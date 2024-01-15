<?php

require "../libraries/autoload.php";

$page = "index";
$smarty->assign("page_title", "Mod - " . $config["site_name"]);
if (!$logged_in) {
    $page = "login";
}

$footer_bar = $db->where("active", true)->orderBy("number", "ASC")->get("footer_bar");
$smarty->assign("footer_items", $footer_bar);
$smarty->assign("display_page", $page);

// $pw = password_hash("password", PASSWORD_BCRYPT);
// echo $pw;
// echo password_verify("password", $pw);

$smarty->display("parts/header.tpl");
$smarty->display("parts/boardlist.tpl");
if ($logged_in) {
    $smarty->display("parts/admin_header.tpl");
} else {
// $smarty->display("parts/banner.tpl");
    $smarty->display("pages/mod.{$page}.tpl");
}
$smarty->display("parts/footer_bar.tpl");
$smarty->display("parts/footer.tpl");
