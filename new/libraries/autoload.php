<?php

// CORE

require "core/lib.config.php";

$config = read_config();
$version = version();

if ($config["generated_in"] === true) {
    $start_time = microtime(true);
}

require "core/lib.crypt.php";
require "core/lib.tokens.php";
require "core/lib.formbuilder.php";

// THIRD-PARTY

# Parsedown
require "Parsedown/Parsedown.php";
$parsedown = new Parsedown();
$parsedown->setSafeMode(true);
$parsedown->setBreaksEnabled(true);

# Smarty
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

// Database-class
require_once "MysqliDb/MysqliDb.php";
if ((empty($config["mysqli_host"]) || empty($config["mysqli_username"]) || empty($config["mysqli_database"])) || (!isset($config["mysqli_host"]) || !isset($config["mysqli_username"]) || !isset($config["mysqli_database"]))) {
    die("Database-Type MySQLi selected but no credentials given.");
}
$db = new MysqliDb(array(
    "host" => $config["mysqli_host"],
    "username" => $config["mysqli_username"],
    "password" => $config["mysqli_password"] ?? "",
    "db" => $config["mysqli_database"],
    "port" => $config["mysqli_port"] ?? 3306,
    "prefix" => $config["mysqli_prefix"] ?? "",
    "charset" => "utf8"));
$db->connect();

// Final assigns
$smarty->assign("config", $config);
$smarty->assign("version", $version);
$smarty->assign("board_type", "text");

if ($config["generated_in"] === true) {
    $end_time = microtime(true);
    $generation_time = round($end_time - $start_time, 5);
    $smarty->assign("generation_time", $generation_time);
}

# Load Plugins at the very end...
require "core/lib.plugins.php";
