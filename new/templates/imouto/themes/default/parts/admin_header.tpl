<div class="page-info">
    <h1>Dashbord</h1>
    <div class="small">Try not to ruin everything.</div>
    <br>Logged in as: [{$user["id"]}:{$user.level}] {$user.username}<br>
    <form name="logout" action="mod.php" method="post">
        <input type="hidden" id="logout" name="logout" value="logout"><input type="Submit" value="Logout">
    </form>
</div>
<br>
<div class="main first">
    <h2>Moderator tools</h2>
    <p>Things like notices or messages may be here later.</p>
</div>
<br>

<div class="box flex">
    <div class="box left">
        <h2>Navigation</h2>
        <ul class="box-list">
            <li><a href="mod.php" class="active">Home</a></li>
            <li><a href="mod.php?page=account">Account</a></li>
            <li><a href="mod.php?page=users">Manage Users</a></li>
            <li><a href="mod.php?page=reports">Reports (0)</a></li>
            <li><a href="mod.php?page=global_reports">Global Reports (0)</a></li>
            <li><a href="mod.php?page=bans">Manage Bans</a></li>
        </ul>
    </div>
    <div class="container-right">
        {include file="pages/mod.$display_page.tpl"}
    </div>
</div>