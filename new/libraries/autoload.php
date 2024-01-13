<?php

// CORE

require "core/lib.config.php";

$config = read_config();
$version = version();

require "core/lib.crypt.php";
require "core/lib.tokens.php";
require "core/lib.inits.php";

// THIRD-PARTY

require "Parsedown/Parsedown.php";
$parsedown = new Parsedown();
$parsedown->setSafeMode(true);
$parsedown->setBreaksEnabled(true);

require "Smarty/Smarty.class.php";
$smarty = new Smarty();
$smarty->setTemplateDir(__DIR__ . "/../templates/" . $config["theme"] . "/themes/" . $config["subtheme"]);
$smarty->setConfigDir(__DIR__ . "/Smarty/config");
$smarty->setCompileDir(__DIR__ . "/Smarty/compile");
$smarty->setCacheDir(__DIR__ . "/Smarty/cache");

// Should this?
if (isset($_GET["smarty_test"])) {
    $smarty->testInstall();
    header("Refresh: 2, url=index.php");
    die();
}
