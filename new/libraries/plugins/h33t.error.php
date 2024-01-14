<?php

// Prodiving error functions since 2024 ;)

function error($smarty, $error, $success = false)
{
    $smarty->assign("page_title", ($success ? "Success!" : "Error!"));
    $smarty->assign("error", $error);
    $smarty->assign("current_page", "message");
    $smarty->assign("success", $success);
    $smarty->assign("hide_footer", true);
    
    $smarty->display("parts/header.tpl");
    $smarty->display("pages/error.tpl");
    $smarty->display("parts/footer.tpl");
    exit();
}
