<!DOCTYPE html>
<html lang="" data-stylesheet="{$config.detault_style}">

<head>
    <title>{$page_title}</title>
    <script>
        var default_theme = "{$config.detault_style}"
        var captcha_required = {var_export($config["captcha_required"], true)}
        var board_type = "{$board_type}"

        if (localStorage.theme !== undefined) {
            document.documentElement.setAttribute("data-stylesheet", localStorage.theme)
        } else {
            localStorage.theme = default_theme
        }
    </script>
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <link rel="stylesheet" type="text/css" href="assets/css/Yotsuba%20B.css">
    <link rel="stylesheet" type="text/css" href="assets/css/Yotsuba.css">
    <link rel="stylesheet" type="text/css" href="assets/css/Burichan.css">
    <link rel="stylesheet" type="text/css" href="assets/css/Futaba.css">
    <link rel="stylesheet" type="text/css" href="assets/css/Cyanide.css">
    <link rel="stylesheet" type="text/css" href="assets/css/Tomorrow.css">
    <link rel="stylesheet" type="text/css" href="assets/css/Kareha.css">
    <link rel="stylesheet" type="text/css" href="assets/css/Sankarea.css">
    <script type="text/javascript" src="assets/js/main.js"></script>
</head>

<body {if isset($current_page) && !empty($current_page)}current_page="{$current_page}" {else}class="frontpage" {/if}>
<a name="top" id="top"></a>