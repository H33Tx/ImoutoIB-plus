<?php
/* Smarty version 4.3.0, created on 2024-01-14 01:21:27
  from 'C:\xampp8\htdocs\ImoutoIB-plus\new\templates\imouto\themes\default\parts\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_65a329070260c2_52152292',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '816fed7e6ea75287d3ad6d15357da0454684aeef' => 
    array (
      0 => 'C:\\xampp8\\htdocs\\ImoutoIB-plus\\new\\templates\\imouto\\themes\\default\\parts\\header.tpl',
      1 => 1705191686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65a329070260c2_52152292 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="" data-stylesheet="<?php echo $_smarty_tpl->tpl_vars['config']->value['detault_style'];?>
">

<head>
    <title><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</title>
    <?php echo '<script'; ?>
>
        var default_theme = "<?php echo $_smarty_tpl->tpl_vars['config']->value['detault_style'];?>
"
        var captcha_required = <?php echo var_export($_smarty_tpl->tpl_vars['config']->value["captcha_required"],true);?>

        var board_type = "<?php echo $_smarty_tpl->tpl_vars['board_type']->value;?>
"

        if (localStorage.theme !== undefined) {
            document.documentElement.setAttribute("data-stylesheet", localStorage.theme)
        } else {
            localStorage.theme = default_theme
        }
    <?php echo '</script'; ?>
>
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <link rel="stylesheet" type="text/css" href="assets/css/Yotsuba%20B.css">
    <link rel="stylesheet" type="text/css" href="assets/css/Yotsuba.css">
    <link rel="stylesheet" type="text/css" href="assets/css/Burichan.css">
    <link rel="stylesheet" type="text/css" href="assets/css/Futaba.css">
    <link rel="stylesheet" type="text/css" href="assets/css/Cyanide.css">
    <link rel="stylesheet" type="text/css" href="assets/css/Tomorrow.css">
    <link rel="stylesheet" type="text/css" href="assets/css/Kareha.css">
    <link rel="stylesheet" type="text/css" href="assets/css/Sankarea.css">
    <?php echo '<script'; ?>
 type="text/javascript" src="assets/js/main.js"><?php echo '</script'; ?>
>
</head>

<body class="frontpage">
<a name="top" id="top"></a><?php }
}
