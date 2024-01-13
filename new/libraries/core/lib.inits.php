<?php

if ($config["debug"] === true) {
    ini_set("display_errors", 1);
    ini_set("display_startup_errors", 1);
    error_reporting(E_ALL);
}

$title = '$title';
$current_page = '$current_page';
$current_board = "";
$current_thread = "";
$board_title = '$board_title';
$board_slogan = '$board_slogan';
$board_description = '$board_description';
$post_number_op = "";

$reply = "";
$reply_ip = "";
$op = "";
$op_ip = "";

$isSpoiler_ = "";
$reply_file = "";
$op_file = "";
$new_thumbname = "";
$thmb_res = "";

$info_locked = 0;
$info_sticky = 0;
$info_autosage = 0;

$frontpage_uniqueids = 0;
$frontpage_active = 0;

$pages = "";

$logged_in = false;
$logged_in_user = false;
$mod_level = false;
$changed_password = false;
$user_created = false;
$user_edited = false;
$user_deleted = false;
$ban_removed = false;
$ban_created = false;
$warning_created = false;

$is_banned = false;

$post_locked = false;
$post_sticky = false;
$post_autosage = false;

// Params
if (!isset($_GET["thread"])) {
    $_GET["thread"] = "";
}
if (!isset($_GET["page"])) {
    $_GET["page"] = "";
}
if (!isset($_GET["board"])) {
    $_GET["board"] = "";
}

// Password
if (isset($_POST["password"]) && $_POST["password"] !== "") {
    $post_password = encode_string(htmlspecialchars($_POST["password"]), $config["secure_hash"]);
} else {
    $post_password = encode_string(gen_token(), $config["secure_hash"]);
}
