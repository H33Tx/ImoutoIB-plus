<?php 

require dirname(__FILE__) . '/require.php';


//add a bunch of post functions here before everything else


//DISMISS REPORT
if (isset($_POST['dismiss'])) {
	if ($config['mod']['reports'] > $user_mod_level) {
		error('You don\'t have permission to dismiss reports');
	}
	if (!in_Array($_POST['board'], $config['boardlist'])) {
		error('Invalid board');
	}
	if (!is_numeric(basename($_POST['report'], '.php'))) {
		error('Invalid report number');
	}
	if (!file_exists(__dir__ . '/' . $database_folder . '/reports/' . $_POST['board'] . '/' . $_POST['report'])) {
		error('This report doesn\'t exist. Maybe someone else dismissed it before you.');
	}
	//ok everything checks out, delete report.
	unlink(__dir__ . '/' . $database_folder . '/reports/' . $_POST['board'] . '/' . $_POST['report']);
	ReportCounter($database_folder, 'normal');
	//save to log?

}

//DISMISS GLOBAL
if (isset($_POST['dismiss_global'])) {
	if ($config['mod']['global_reports'] > $user_mod_level) {
		error('You don\'t have permission to dismiss reports');
	}
	if (!in_Array($_POST['board'], $config['boardlist'])) {
		error('Invalid board');
	}
	if (!is_numeric(basename($_POST['report'], '.php'))) {
		error('Invalid report number');
	}
	if (!file_exists(__dir__ . '/' . $database_folder . '/reportsglobal/' . $_POST['report'])) {
		error('This report doesn\'t exist. Maybe someone else dismissed it before you.');
	}
	//ok everything checks out, delete report.
	unlink(__dir__ . '/' . $database_folder . '/reportsglobal/' . $_POST['report']);
	ReportCounter($database_folder, 'global');
	//save to log?

}

//LOGOUT
if (isset($_POST['logout'])) {
	setcookie("mod_user", null, time() - 3600,  $cookie_location, $domain, isset($_SERVER["HTTPS"]), true);
	setcookie("mod_session", null, time() - 3600,  $cookie_location, $domain, isset($_SERVER["HTTPS"]), true);
	$logged_in = false;
}

//EDIT PASSWORD
if (isset($_POST['old-password'])) {
	//check requirements
	if (($_POST['old-password'] == '') || ($_POST['new-password'] == '') || ($_POST['new-password2'] == '')) {
		error('You must fill in all fields.');
	}
	if (crypt($_POST['old-password'], $password_salt) != $password) {
		error('Old password is incorrect.');
	}
	if ($_POST['new-password'] != $_POST['new-password2']) {
		error('New passwords don\'t match.');
	}
	if (strlen($_POST['new-password']) > 256) {
		error('Password too long. Maximum 256.');
	}
	if (strlen($_POST['new-password']) < 8) {
		error('Password too short. Minimum 8.');
	}
	//ok now change password
	$password_salt = crypt(md5(random_bytes(30)) , $secure_hash);
	$password = crypt($_POST['new-password'] , $password_salt);

	$user_info = file_get_contents(__dir__ . '/' . $database_folder . '/users/' . $username . '.php');
	$user_info = preg_replace('/\$password_salt = ".*?";/i', '$password_salt = "' . $password_salt . '";', $user_info);
	$user_info = preg_replace('/\$password = ".*?";/i', '$password = "' . $password . '";', $user_info);
	$user_info = preg_replace('/\$user_session = ".*?";/i', '$user_session = "";', $user_info); //clear outdated session
	file_put_contents(__dir__ . '/' . $database_folder . '/users/' . $username . '.php', $user_info);

	//ok we changed password now logout
	$logged_in = false;
	$changed_password = true;
	setcookie("mod_user", null, time() - 3600,  $cookie_location, $domain, isset($_SERVER["HTTPS"]), true);
	setcookie("mod_session", null, time() - 3600,  $cookie_location, $domain, isset($_SERVER["HTTPS"]), true);
}

//CREATE USER
if (isset($_POST['create-user'])) {
	if ($user_mod_level < $config['mod']['edit_user']) {
		error('You don\'t have permission to edit users.');
	}
	if (!is_numeric($_POST['create-level']) || ($_POST['create-level'] > 9001) || ($_POST['create-level'] < 0) ) {
		error('Invalid mod level.');
	}
	if (!ctype_alnum($_POST['create-username'])) {
		error('Invalid username. Alphanumeric only.');
	}
	if (strlen($_POST['create-username']) > 32) {
		error('Username too long, Maximum 32.');
	}
	if (strlen($_POST['create-username']) < 2) {
		error('Username too short, Minimum 3.');
	}
	if (strlen($_POST['create-password']) > 256) {
		error('Password too long, Maximum 256.');
	}
	if (strlen($_POST['create-password']) < 8) {
		error('Password too short, Minimum 8.');
	}
	if ($_POST['create-password'] != $_POST['create-password2']) {
		error('Passwords don\'t match.');
	}
	$_POST['create-username'] = strtolower($_POST['create-username']); //set lowercase

	if (file_exists(__dir__ . '/' . $database_folder . '/users/' . $_POST['create-username'] . '.php')) {
		error('User already exists or is unavailable.');
	}

	$password_salt = crypt(md5(random_bytes(30)) , $secure_hash);
	$current_count = file_get_contents(__dir__ . '/' . $database_folder . '/users/counter.php');
	$new_count = $current_count + 1;

	$new_user = '<?php ';
	$new_user .= '$user_id = "' . $new_count . '"; ';
	$new_user .= '$username = "' . $_POST['create-username'] . '"; ';
	$new_user .= '$password_salt = "' . $password_salt . '"; ';
	$new_user .= '$password = "' . crypt($_POST['create-password'] , $password_salt) . '"; ';
	$new_user .= '$gpg_key = ""; '; 
	$new_user .= '$gpg_enabled = "0"; '; //if enabled, don't check password but instead send a gpg decryption test. use php session.
	$new_user .= '$user_mod_level = "' . $_POST['create-level'] . '"; ';
	$new_user .= '$user_mod_boards = "*"; '; //add board specifics or all.
	$new_user .= '$user_remember = "' . time() . '"; '; //add a +30 days check or delete session and go to login screen
	$new_user .= '$user_session = ""; '; //login session key, set on login.
	$new_user .= ' ?>';

	file_put_contents(__dir__ . '/' . $database_folder . '/users/' . $_POST['create-username'] . '.php', $new_user);
	file_put_contents(__dir__ . '/' . $database_folder . '/users/counter.php', $new_count); //+1 user id

	$user_created = true;
}

//LOGGIN IN?
if (isset($_POST['username']) && isset($_POST['password'])) {
	if ($_POST['username'] == "") {
		error('No username given.');
	}
	if ($_POST['username'] == "counter" || ctype_alnum($_POST['username']) != true) {
		error('Invalid Username.');
	}
	$_POST['username'] = strtolower($_POST['username']);
	if (!file_exists(__dir__ . '/' . $database_folder . '/users/' . $_POST['username'] . '.php')) {
		error('User doesn\'t exist.');
	}

	include __dir__ . '/' . $database_folder . '/users/' . $_POST['username'] . '.php';

	if (crypt($_POST['password'] , $password_salt) != $password) {
		error('Wrong password.');
	}

	$new_session = crypt(md5(random_bytes(10) . $_POST['password']) , $secure_hash);

	//set session in user file
	setcookie("mod_user", $_POST['username'], 0,  $cookie_location, $domain, isset($_SERVER["HTTPS"]), true); //not bothering setting expiry, they'll be replaced anyways if old.
	setcookie("mod_session", $new_session, 0,  $cookie_location, $domain, isset($_SERVER["HTTPS"]), true);

	if (isset($_POST['remember'])) {
		$remember_time = time(); //basically just says when the login session was created
	} else {
		$remember_time = time() + 2505600; // remember time +29days (for 1day login)
	}

	//todo: set session in user file
	//todo: set remember in user file

	$user_info = file_get_contents(__dir__ . '/' . $database_folder . '/users/' . $_POST['username'] . '.php');
	$user_info = preg_replace('/\$user_remember = ".*?";/i', '$user_remember = "' . $remember_time . '";', $user_info);
	$user_info = preg_replace('/\$user_session = ".*?";/i', '$user_session = "' . $new_session . '";', $user_info);
	file_put_contents(__dir__ . '/' . $database_folder . '/users/' . $_POST['username'] . '.php', $user_info);

	$logged_in = true;
}

//CREATE FOLDER + DEFAULT USER
if (!file_exists(__dir__ . '/' . $database_folder . '/users')) {
	mkdir(__dir__ . '/' . $database_folder . '/users', 0755);

	$password_salt = crypt(md5(random_bytes(30)) , $secure_hash);

	$default_user = '<?php ';
	$default_user .= '$user_id = "0"; ';
	$default_user .= '$username = "admin"; ';
	$default_user .= '$password_salt = "' . $password_salt . '"; ';
	$default_user .= '$password = "' . crypt('password' , $password_salt) . '"; ';
	$default_user .= '$gpg_key = ""; '; 
	$default_user .= '$gpg_enabled = "0"; '; //if enabled, don't check password but instead send a gpg decryption test. use php session.
	$default_user .= '$user_mod_level = "9001"; ';
	$default_user .= '$user_mod_boards = "*"; '; //add board specifics or all.
	$default_user .= '$user_remember = "' . time() . '"; '; //add a +30 days check or delete session and go to login screen
	$default_user .= '$user_session = ""; '; //login session key, set on login.
	$default_user .= ' ?>';

	file_put_contents(__dir__ . '/' . $database_folder . '/users/admin.php', $default_user); //create default admin user
	file_put_contents(__dir__ . '/' . $database_folder . '/users/counter.php', 0); //create user count

}

//LOGIN PAGE
if ($logged_in == false) {
	
	$title = 'Login - ' . $site_name;
	if (isset($_GET["theme"])) {
		echo '<html data-stylesheet="'. htmlspecialchars($_GET["theme"]) .'">';
	} else {
		echo '<html data-stylesheet="'. $current_theme .'">';	
	}
	echo '<head>';
	include $path . '/templates/header.html';
	echo '</head>';
	echo '<body class="frontpage">';
	include $path . '/templates/boardlist.html';
	echo '<div class="page-info"><h1>Login Page</h1><div class="small">Permission required.</div></div><br><br>';
	echo '<div class="main first"><h2>Login.</h2>';
	echo '<p>
			<div id="post-form">
			<form name="login" action="' . $prefix_folder . '/mod.php" method="post">
				<table id="login" style="margin:auto;">
					<tr><th>Username</th><td><input type="text" name="username" size="25" maxlength="256" autocomplete="off" placeholder="Username"></td></tr>
					<tr><th>Password</th><td><input type="password" name="password" size="25" maxlength="256" autocomplete="off" placeholder="Password"></td></tr>
					<tr><th style="visibility:hidden;"></th><td><input type="checkbox" id="remember" name="remember"
         checked><label for="remember">Remember Me</label><input type="submit" name="post" value="Login" style="float: right;"></td></tr>
				</table>
			</form>
			</div>
		  </p>';
	echo '</div>';

	if ($changed_password == true) {
		echo '<div class="message" style="margin-top:0;">Password has been changed.</div>';
	} else {
		echo '<div class="message"></div>';
	}

	include $path . '/templates/footer.html';
	echo '</body>';
	echo '</html>';
	exit();
}

//NAVIGATION
$mod_navigation =	'<div class="box left">';
$mod_navigation .=	'<h2>Navigation</h2>';
$mod_navigation .=	'<ul class="box-list">';

	//HOME
$mod_navigation .=	'<li><a href="' . $prefix_folder . '/mod.php"';
if ((!isset($_GET["page"])) || ($_GET["page"] == '')) {
	$mod_navigation .= 'class="active"';
}
$mod_navigation .=	'>Home</a></li>';

	//ACCOUNT
$mod_navigation .=	'<li><a href="' . $prefix_folder . '/mod.php?page=account"';
if ($_GET["page"] == 'account') {
	$mod_navigation .=	'class="active"';
}
$mod_navigation .=	'>Account</a></li>';

	//USERS
if ($config['mod']['edit_user'] <= $user_mod_level) {
	$mod_navigation .=	'<li><a href="' . $prefix_folder . '/mod.php?page=users"';
	if ($_GET["page"] == 'users') {
		$mod_navigation .=	'class="active"';
	}
	$mod_navigation .=	'>Manage Users</a></li>';
}

	//REPORTS
if ($config['mod']['reports'] <= $user_mod_level) {
	$mod_navigation .=	'<li><a href="' . $prefix_folder . '/mod.php?page=reports"';
	if ($_GET["page"] == 'reports') {
		$mod_navigation .=	'class="active"';
	}
	if (file_exists(__dir__ . '/' . $database_folder . '/reports/current.php')) {
		$reports = file_get_contents(__dir__ . '/' . $database_folder . '/reports/current.php');
	} else {
		$reports = 0;
	}
	$mod_navigation .=	'>Reports (' . $reports . ')</a></li>';
}
	//GLOBAL REPORTS
if ($config['mod']['global_reports'] <= $user_mod_level) {
	$mod_navigation .=	'<li><a href="' . $prefix_folder . '/mod.php?page=global_reports"';
	if ($_GET["page"] == 'global_reports') {
		$mod_navigation .=	'class="active"';
	}
	if (file_exists(__dir__ . '/' . $database_folder . '/reportsglobal/current.php')) {
		$reports_global = file_get_contents(__dir__ . '/' . $database_folder . '/reportsglobal/current.php');
	} else {
		$reports_global = 0;
	}
	$mod_navigation .=	'>Global Reports (' . $reports_global . ')</a></li>';
}

	//BANLIST
if ($config['mod']['ban'] <= $user_mod_level) {
	$mod_navigation .=	'<li><a href="' . $prefix_folder . '/mod.php?page=banlist"';
	if ($_GET["page"] == 'banlist') {
		$mod_navigation .=	'class="active"';
	}
	$mod_navigation .=	'>Banlist</a></li>';
}


$mod_navigation .=	'</ul>';
$mod_navigation .=	'</div>';

//LOGOUT BUTTON
$logged_in_as = '<br>Logged in as: (ID:' . $user_id . ', Username: ' . $username . ', Level: ' . $user_mod_level . ')<br><form name="logout" action="' . $prefix_folder . '/mod.php" method="post"><input type="hidden" id="logout" name="logout" value="logout"><input type="Submit" value="Logout"></form>';

//ABOVE DASHBOARD
//add noticeboard + pm notification here maybe?
$dashboard_notifications = '<div class="main first"><h2>Moderator tools</h2>';
$dashboard_notifications .= '<p>Things like notices or messages may be here later.</p>';
$dashboard_notifications .= '</div>';

//$dashboard_notifications = ''; //clear it out for now?

//DASHBOARD
if ((!isset($_GET["page"])) || ($_GET["page"] == '')) {
	
	$title = 'Mod Dashboard - ' . $site_name;
	if (isset($_GET["theme"])) {
		echo '<html data-stylesheet="'. htmlspecialchars($_GET["theme"]) .'">';
	} else {
		echo '<html data-stylesheet="'. $current_theme .'">';	
	}
	echo '<head>';
	include $path . '/templates/header.html';
	echo '</head>';
	echo '<body class="frontpage">';
	include $path . '/templates/boardlist.html';
	echo '<div class="page-info"><h1>Dashbord</h1><div class="small">Try not to ruin everything.</div>';
	echo $logged_in_as;
	echo '</div>';
	echo $dashboard_notifications;
	echo '<br>';
	echo '<div class="box flex">';
	echo $mod_navigation;
	echo '<div class="container-right">';
	echo '<div class="box right">';
	echo '<h2>Content</h2>';
	echo '<div class="box-content">';
	echo '<p>Welcome to the moderator dashboard.</p>';
	echo '</div>';
	echo '</div>';
	echo '</div>';
	echo '<br>';
	echo '</div>';

	include $path . '/templates/footer.html';
	echo '</body>';
	echo '</html>';
	exit();
}

//ACCOUNT PAGE
if ($_GET["page"] == 'account') {
	
	$title = 'Account - ' . $site_name;
	if (isset($_GET["theme"])) {
		echo '<html data-stylesheet="'. htmlspecialchars($_GET["theme"]) .'">';
	} else {
		echo '<html data-stylesheet="'. $current_theme .'">';	
	}
	echo '<head>';
	include $path . '/templates/header.html';
	echo '</head>';
	echo '<body class="frontpage">';
	include $path . '/templates/boardlist.html';
	echo '<div class="page-info"><h1>Dashbord</h1><div class="small">Try not to ruin everything.</div>';
	echo $logged_in_as;
	echo '</div>';
	echo $dashboard_notifications;
	echo '<br>';
	echo '<div class="box flex">';
	echo $mod_navigation;
	echo '<div class="container-right">';
	echo '<div class="box right">';
	echo '<h2>Account</h2>';
	echo '<div class="box-content">';
	echo '<p>';
	echo 'Username: ' . $username;
	echo '</p>';

	//CHANGE PASSWORD
	echo '<details><summary>Edit Password</summary>';
	echo '		<form name="edit-password" action="' . $prefix_folder . '/mod.php" method="post">
				<table id="post-form" style="width:initial;">
					<tr><th>Current Password:</th><td><input type="password" name="old-password" size="25" maxlength="256" autocomplete="off" placeholder="Password" required></td></tr>
					<tr><th>New Password:</th><td><input type="password" name="new-password" size="25" maxlength="256" autocomplete="off" placeholder="Password" required></td></tr>
					<tr><th>New Password x2:</th><td><input type="password" name="new-password2" size="25" maxlength="256" autocomplete="off" placeholder="Password" required></td></tr>
					<tr><th style="visibility:hidden;"></th><td><input type="submit" name="post" value="Edit Password" style="float: right;"></td></tr>
				</table>
			</form>';
	echo '</details>';
	echo '</div>';
	echo '</div>';

	echo '</div>';
	echo '<br>';
	echo '</div>';

	include $path . '/templates/footer.html';
	echo '</body>';
	echo '</html>';
	exit();
}

//USERS PAGE
if ($_GET["page"] == 'users') {
	if ($user_mod_level < $config['mod']['edit_user']) {
		error('You don\'t have permission to view this page.');
	}
	$title = 'Manage Users - ' . $site_name;
	if (isset($_GET["theme"])) {
		echo '<html data-stylesheet="'. htmlspecialchars($_GET["theme"]) .'">';
	} else {
		echo '<html data-stylesheet="'. $current_theme .'">';	
	}
	echo '<head>';
	include $path . '/templates/header.html';
	echo '</head>';
	echo '<body class="frontpage">';
	include $path . '/templates/boardlist.html';
	echo '<div class="page-info"><h1>Dashbord</h1><div class="small">Try not to ruin everything.</div>';
	echo $logged_in_as;
	echo '</div>';
	echo $dashboard_notifications;
	echo '<br>';
	echo '<div class="box flex">';
	echo $mod_navigation;
	echo '<div class="container-right">';

	echo '<div class="box right">';
	echo '<h2>Create User</h2>';
	echo '<div class="box-content">';
	echo '<p>';
	echo '<details><summary>Create User</summary>';
	echo '<form name="create-user" action="' . $prefix_folder . '/mod.php?page=users" method="post">
				<table id="post-form" style="width:initial;">
					<tbody><tr><th>Username:</th><td><input type="text" name="create-username" size="25" maxlength="32" autocomplete="off" placeholder="Username" required></td></tr>
					<tr><th>Password:</th><td><input type="password" name="create-password" size="25" maxlength="256" autocomplete="off" placeholder="Password" required></td></tr>
					<tr><th>Password x2:</th><td><input type="password" name="create-password2" size="25" maxlength="256" autocomplete="off" placeholder="Password" required></td></tr>
					<tr><th>User Level:</th><td>
					<select name="create-level">
					  <option value="9001">Admin (9001)</option>
					  <option value="40">Moderator (40)</option>
					  <option value="10">Janitor (10)</option>
					  <option value="0" selected>User (0)</option>
					</select>
					</td></tr>
					<tr><th style="visibility:hidden;"></th><td><input type="submit" name="create-user" value="Create User" style="float: right;"></td></tr>
				</tbody></table>
			</form>';
	echo '</details>';
	echo '</p>';
	echo '</div>';
	echo '</div>';

	echo '<br>';
	echo '<div class="box right">';
	echo '<h2>Manage Users</h2>';
	echo '<div class="box-content">';
	
	//foreach
	
	echo '<table><thead> <td>ID</td> <td>Username</td> <td>Mod Level</td> <td>Actions</td></thead>';
	echo '<tbody>';

	//TO DO: multiarray and sort by ID, alternatively use JS.
	// I should also first take the admins, sort them by id, then the mods by id, then the jannies by id, etc.
	// Basically sorted by mod level, and each modlevel sorted by ID.

	$userlist = glob(__dir__ . '/' . $database_folder . '/users/*'); 
	foreach ($userlist as $user) {
		if (basename($user) == 'counter.php') {
			continue; //not a user, go next iteration
		}
		include $user;
		echo '<tr>';
		echo '<td>' . $user_id . '</td>';
		echo '<td>' . $username . '</td>';
		echo '<td>';
		switch ($user_mod_level) {
			case 9001:
				echo 'Admin';
				break;
			case 40:
				echo 'Mod';
				break;
			case 10:
				echo 'Janitor';
				break;
			case 0:
				echo 'User';
				break;
			default:
				echo 'Unknown';
				break;
		}
		echo ' (' . $user_mod_level . ')</td>';
		echo '<td><details><summary>More</summary>';
		echo '<details><summary style="font-size:smaller;">Edit</summary>[editstuff]</details>';
		echo '<details><summary style="font-size:smaller;">Delete</summary><details><summary>Are you sure you want to delete this user ('.$username.')?</summary><details><summary>Yes!</summary>[delete]</details></details></details>';
		echo '</details></td>';
		echo '</tr>';
		
	}
	echo '</tbody></table>';
	
	echo '</div>';
	echo '</div>';

	echo '</div>';
	echo '<br>';
	echo '</div>';

	if ($user_created == true) {
		echo '<div class="message" style="margin-top:0;">User created.</div>';
	}

	include $path . '/templates/footer.html';
	echo '</body>';
	echo '</html>';
	exit();
}

//REPORTS PAGE
if ($_GET["page"] == 'reports') {
	if ($user_mod_level < $config['mod']['reports']) {
		error('You don\'t have permission to view this page.');
	}
	//recount
	ReportCounter($database_folder, 'normal');

	$title = 'Reports - ' . $site_name;
	if (isset($_GET["theme"])) {
		echo '<html data-stylesheet="'. htmlspecialchars($_GET["theme"]) .'">';
	} else {
		echo '<html data-stylesheet="'. $current_theme .'">';	
	}
	echo '<head>';
	include $path . '/templates/header.html';
	echo '</head>';
	echo '<body class="frontpage">';
	include $path . '/templates/boardlist.html';
	echo '<div class="page-info"><h1>Dashbord</h1><div class="small">Try not to ruin everything.</div>';
	echo $logged_in_as;
	echo '</div>';
	echo $dashboard_notifications;
	echo '<br>';
	echo '<div class="box flex">';
	echo $mod_navigation;
	echo '<div class="container-right">';
	echo '<div class="box right">';
	echo '<h2>Reports</h2>';
	echo '<div class="box-content">';

	echo '<table style="width:100%">';
	echo '<thead> <td>Board</td> <td>Post</td> <td>Report IP</td> <td>Reason</td> <td>View</td> <td>Actions</td>';
	echo '<tbody>';

	//FIND REPORTS
	$report_boards = glob(__dir__ . '/' . $database_folder . '/reports/*', GLOB_ONLYDIR); //find boards

	foreach ($report_boards as $board ) { //for each board
		$reports = [];
		$reports = glob($board . "/*"); //find reports
			foreach ($reports as $report) { //for each report
				if (is_numeric(basename($report, '.php'))) {
						include $board . '/' . basename($report);

						//dismiss report if thread/reply no longer exists and go to next report in loop
						if ((($report_thread == $report_reply) && (!file_exists(__dir__ . '/' . $database_folder . '/boards/' . basename($board) . '/' . $report_thread))) || (($report_thread != $report_reply) && (!file_exists(__dir__ . '/' . $database_folder . '/boards/' . basename($board) . '/' . $report_thread . '/' . $report_reply . '.php')))) {
							unlink($report);
							continue;
						}

						echo '<tr>'; 
						echo '<td>/' . basename($board) . '/</td>';
						echo '<td>' . $report_reply . '@' . $report_thread . '</td>';
						if ($user_mod_level >= $config['mod']['ip']) {
							echo '<td>' . $report_ip . '</td>';
						} else {
							echo '<td>No Perm</td>';
						}
						echo '<td title="' . $report_reason . '"style="white-space:pre;word-wrap:break-word;max-width:150px;overflow:hidden;text-overflow:ellipsis">' . $report_reason . '</td>';
						echo '<td><a href="' . $prefix_folder . '/' . $main_file . '?board='. basename($board) . '&thread=' . $report_thread . '#' . $report_reply . '" target="_blank">View</a></td>';
						echo '<td><details><summary>More</summary>';

						echo '	<form name="dismiss-report" action="' . $prefix_folder . '/mod.php?page=reports" method="post">
								<input type="hidden" name="board" value="' . basename($board) . '">
								<input type="hidden" name="report" value="' . basename($report) . '">
								<input type="submit" name="dismiss" value="Dismiss"></td>
								</form>';

						echo '</details><td>';
						echo '</tr>';
				}
			}
	}
	echo '</tbody>';
	echo '</table>';

	echo '</div>';
	echo '</div>';
	echo '</div>';
	echo '<br>';
	echo '</div>';

	include $path . '/templates/footer.html';
	echo '</body>';
	echo '</html>';
	exit();
}

//GLOBAL REPORTS PAGE
if ($_GET["page"] == 'global_reports') {
	if ($user_mod_level < $config['mod']['global_reports']) {
		error('You don\'t have permission to view this page.');
	}
	//recount
	ReportCounter($database_folder, 'global');

	$title = 'Global Reports - ' . $site_name;
	if (isset($_GET["theme"])) {
		echo '<html data-stylesheet="'. htmlspecialchars($_GET["theme"]) .'">';
	} else {
		echo '<html data-stylesheet="'. $current_theme .'">';	
	}
	echo '<head>';
	include $path . '/templates/header.html';
	echo '</head>';
	echo '<body class="frontpage">';
	include $path . '/templates/boardlist.html';
	echo '<div class="page-info"><h1>Dashbord</h1><div class="small">Try not to ruin everything.</div>';
	echo $logged_in_as;
	echo '</div>';
	echo $dashboard_notifications;
	echo '<br>';
	echo '<div class="box flex">';
	echo $mod_navigation;
	echo '<div class="container-right">';
	echo '<div class="box right">';
	echo '<h2>Global Reports</h2>';
	echo '<div class="box-content">';

	echo '<table style="width:100%">';
	echo '<thead> <td>Board</td> <td>Post</td> <td>Report IP</td> <td>Reason</td> <td>View</td> <td>Actions</td>';
	echo '<tbody>';

	//FIND REPORTS
		$reports = [];
		$reports = glob(__dir__ . '/' . $database_folder . '/reportsglobal/*'); //find reports
			foreach ($reports as $report) { //for each report
				if (is_numeric(basename($report, '.php'))) {
						include $report;

						//dismiss report if thread/reply no longer exists and go to next report in loop
						if ((($report_thread == $report_reply) && (!file_exists(__dir__ . '/' . $database_folder . '/boards/' . $report_board . '/' . $report_thread))) || (($report_thread != $report_reply) && (!file_exists(__dir__ . '/' . $database_folder . '/boards/' . $report_board . '/' . $report_thread . '/' . $report_reply . '.php')))) {
							unlink($report);
							continue;
						}

						echo '<tr>'; 
						echo '<td>/' . $report_board . '/</td>';
						echo '<td>' . $report_reply . '@' . $report_thread . '</td>';
						if ($user_mod_level >= $config['mod']['ip']) {
							echo '<td>' . $report_ip . '</td>';
						} else {
							echo '<td>No Perm</td>';
						}
						echo '<td title="' . $report_reason . '"style="white-space:pre;word-wrap:break-word;max-width:150px;overflow:hidden;text-overflow:ellipsis">' . $report_reason . '</td>';
						echo '<td><a href="' . $prefix_folder . '/' . $main_file . '?board='. $report_board . '&thread=' . $report_thread . '#' . $report_reply . '" target="_blank">View</a></td>';
						echo '<td><details><summary>More</summary>';

						echo '	<form name="dismiss-report-global" action="' . $prefix_folder . '/mod.php?page=global_reports" method="post">
								<input type="hidden" name="board" value="' . $report_board . '">
								<input type="hidden" name="report" value="' . basename($report) . '">
								<input type="submit" name="dismiss_global" value="Dismiss"></td>
								</form>';

						echo '</details><td>';
						echo '</tr>';
				}
			}
	echo '</tbody>';
	echo '</table>';

	echo '</div>';
	echo '</div>';
	echo '</div>';
	echo '<br>';
	echo '</div>';

	include $path . '/templates/footer.html';
	echo '</body>';
	echo '</html>';
	exit();
}


//If literally none of the above activates.
	$title = 'Error! - ' . $site_name;
	if (isset($_GET["theme"])) {
		echo '<html data-stylesheet="'. htmlspecialchars($_GET["theme"]) .'">';
	} else {
		echo '<html data-stylesheet="'. $current_theme .'">';	
	}
	echo '<head>';
	include $path . '/templates/header.html';
	echo '</head>';
	echo '<body class="frontpage">';
	//include $path . '/templates/boardlist.html';
	echo '<div class="message">Gomen nasai... Woah — Unknown Error!<br>Please leave a detailed bug report... Page may not exist, if this was unintended please let me know.</div>';
	//include $path . '/templates/footer.html';
	echo '</body>';
	echo '</html>';
	exit();

?>