<?php

define("CONFIG_DIR", __DIR__ . "/../config/");
define("CONFIG_DEFAULT", __DIR__ . "/../config/config_default.json");
define("CONFIG_CUSTOM", __DIR__ . "/../config/config_custom.json");

function check_configs()
{
    // Check if directory exists
    if (!file_exists(CONFIG_DIR)) {
        // Create directory
        mkdir(CONFIG_DIR, 0755);
    }

    // Check if default config file exists
    if (!file_exists(CONFIG_DEFAULT)) {
        // Create default config file with default content
        $defaultArray = [
            "site_title" => "ImoutoIB-Plus",
            "max_upload_size" => 5242880,
            "allow_anonymous_posts" => true,
            "captcha_enabled" => true,
        ];

        $defaultContent = json_encode($defaultArray, JSON_PRETTY_PRINT);
        file_put_contents(CONFIG_DEFAULT, $defaultContent);
    }

    // Check if custom config file exists
    if (!file_exists(CONFIG_CUSTOM)) {
        // Create custom config file with empty content
        $customArray = [];
        $customContent = json_encode($customArray, JSON_PRETTY_PRINT);
        file_put_contents(CONFIG_CUSTOM, $customContent);
    }
}

function read_config()
{
    check_configs();

    // Read default config
    $defaultConfig = json_decode(file_get_contents(CONFIG_DEFAULT), true);

    // Read custom config
    $customConfig = json_decode(file_get_contents(CONFIG_CUSTOM), true);

    // Merge default and custom configs
    $mergedConfig = array_replace_recursive($defaultConfig, $customConfig);

    return $mergedConfig;
}

function read_specific_config($config)
{
    check_configs();

    // Read default config
    $config = json_decode(file_get_contents($config), true);

    return $config;
}

function read_custom_config()
{
    check_configs();

    // Read custom config
    $customConfig = json_decode(file_get_contents(CONFIG_CUSTOM), true);

    return $customConfig;
}

function update_config($newSettings = array())
{
    // Read existing custom config
    // $customConfig = readCustomConfig(CONFIG_CUSTOM);

    // Update with new settings
    foreach ($newSettings as $key => $value) {
        // $customConfig[$key] = $value;
        edit_config_setting($key, $value);
    }

    // Save the updated custom config
    // file_put_contents(CONFIG_CUSTOM, json_encode($customConfig, JSON_PRETTY_PRINT));
}

function edit_config_setting($settingKey, $newValue)
{
    // Read existing default and custom configs
    $defaultConfig = read_specific_config(CONFIG_DEFAULT);
    $customConfig = read_specific_config(CONFIG_CUSTOM);

    // Check if the setting exists in the default config
    if (array_key_exists($settingKey, $defaultConfig)) {
        // Check if the new value is the same as in the default config
        if ($newValue === $defaultConfig[$settingKey]) {
            // Remove the setting from the custom config if it exists
            if (isset($customConfig[$settingKey])) {
                unset($customConfig[$settingKey]);
            }
        } else {
            // Update the specific setting or add it if not exists
            $customConfig[$settingKey] = $newValue;
        }

        // Save the updated custom config
        file_put_contents(CONFIG_CUSTOM, json_encode($customConfig, JSON_PRETTY_PRINT));

        return true; // Success
    } else {
        // Add the setting to the custom config if it doesn't exist in the default config
        $customConfig[$settingKey] = $newValue;

        // Save the updated custom config
        file_put_contents(CONFIG_CUSTOM, json_encode($customConfig, JSON_PRETTY_PRINT));

        return true; // Success
    }
}

function version()
{
    return file_get_contents(__DIR__ . "/../../version");
}