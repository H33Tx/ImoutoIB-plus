<?php

// Only if plugins are enabled in the config_default.
if ($config["plugins_enabled"]) {
    // Setting dir variable
    $plugins_dir = __DIR__ . "/.." . $config["plugins_directory"] . "/";
    if (!file_exists($plugins_dir)) {
        // Create folder if it doesn't exist
        mkdir($plugins_dir, 0755);
    }
    if (!empty($config["plugins_string"])) {
        // Explosion!
        $plugins = explode(",", $config["plugins_string"]);
        foreach ($plugins as $key => $plugin) {
            // Now loop, require and acquire!
            if (!empty($plugin)) {
                require_once $plugins_dir . $plugin . ".php";
            }
        }
    }
}
