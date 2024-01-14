<?php

// Session plugin? Based on ithrts" original code.
$logged_in = false;

// Logging in? Allow only in mod.php
if (isset($_POST["username"]) && isset($_POST["password"]) && str_contains($_SERVER["PHP_SELF"], "mod.php")) {
    if ($config["captcha_required"] == true) {
        if (isset($_POST["captcha"])) {
            if (isset($_SESSION["captcha"]) && strtoupper(decode_string($_SESSION["captcha"], $config["captcha_crypt"])) != strtoupper($_POST["captcha"])) {
                error($smarty, "Wrong captcha. You entered '" . strtoupper($_POST["captcha"]) . "' but correct was '" . strtoupper(decode_string($_SESSION["captcha"], $config["captcha_crypt"])) . "'.");
            } else {
                // Captcha correct, removing it? Guess so.
                unset($_SESSION["captcha"]);
            }
        } else {
            error($smarty, "No captcha entered.");
        }
    }

    if (empty($_POST["username"])) {
        error($smarty, "No username given.");
    }
    $user = $db->where("username", $db->escape($_POST["username"]))->getOne("users");
    if (empty($user)) {
        error($smarty, "User doesn't exist");
    }

    header("Refresh: 0");
    die();
}

// Checking now...
if (isset($_COOKIE["mod_user"]) && isset($_COOKIE["mod_session"])) {
    if ($_COOKIE["mod_user"] == "") {
        error($smarty, "No username given.");
    }
    $user = $db->where("username", $db->escape($_COOKIE["mod_user"]))->getOne("users");
    if (empty($user)) {
        error($smarty, "User doesn't exist");
    }

    $session = [];
    if (isset($_COOKIE["mod_user"]) && isset($_COOKIE["mod_session"]) && !empty($_COOKIE["mod_user"]) && !empty($_COOKIE["mod_session"])) {
        $session = $db->where("token", $db->escape($_COOKIE["mod_session"]))->getOne("sessions");
    }
    if (empty($session)) {
        setcookie("mod_user", "", time() - 3600, "/", $_SERVER["HTTP_HOST"], isset($_SERVER["HTTPS"]));
        setcookie("mod_session", "", time() - 3600, "/", $_SERVER["HTTP_HOST"], isset($_SERVER["HTTPS"]));
        error($smarty, "Invalid or expired cookie session");
    } else {
        $logged_in = true;
        $smarty->assign("user", $user);
        $smarty->assign("session", $session);
    }

    // What does this code mean? Can somebody explain this to me xd - saintly
    // if (($user_remember + 86400) < time()) { //1day if not remember me, otherwise using the +30days from remember time for 31days total
    //     setcookie("mod_user", "", time() - 3600, "/", $_SERVER["HTTP_HOST"], isset($_SERVER["HTTPS"]));
    //     setcookie("mod_session", "", time() - 3600, "/", $_SERVER["HTTP_HOST"], isset($_SERVER["HTTPS"]));
    //     $logged_in = false;
    // }
}

$smarty->assign("logged_in", $logged_in);
