<?php

require "../libraries/autoload.php";

$index = true;
$smarty->assign("page_title", $config["site_name"]);

$footer_bar = $db->where("active", true)->orderBy("number", "ASC")->get("footer_bar");
$smarty->assign("footer_items", $footer_bar);

if (isset($_GET["page"]) && !empty($_GET["page"])) {
    $index = false;
    $page = $db->where("url", $db->escape($_GET["page"]))->where("active", true)->getOne("pages");
    if (empty($page)) {
        $page = $db->where("name", "404")->getOne("pages");
    }
    $smarty->assign("page_title", $page["name"] . " - " . $config["site_name"]);
    $smarty->assign("page", $page);
}

if ($index) {
    $smarty->display("parts/header.tpl");
    $smarty->display("parts/boardlist.tpl");
    $smarty->display("parts/banner.tpl");
    $smarty->display("pages/index.index.tpl");
    $smarty->display("parts/footer_bar.tpl");
    $smarty->display("parts/footer.tpl");
} else {
    if ($page["include_header"]) {
        $smarty->display("parts/header.tpl");
    }
    if ($page["include_boardlist"]) {
        $smarty->display("parts/boardlist.tpl");
    }
    if ($page["include_banner"]) {
        $smarty->display("parts/banner.tpl");
    }
    $smarty->display("pages/index.custom.tpl");
    if ($page["include_footer"]) {
        $smarty->display("parts/footer_bar.tpl");
        $smarty->display("parts/footer.tpl");
    }
}
