<?php
/* Smarty version 4.3.0, created on 2023-11-29 17:16:07
  from 'C:\xamppx\htdocs\KEngine\system\themes\FoOlSlideX\parts\head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_656763c7a1f211_91729824',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '153c9d196901cddba055b4c70434f57b80d80a6a' => 
    array (
      0 => 'C:\\xamppx\\htdocs\\KEngine\\system\\themes\\FoOlSlideX\\parts\\head.tpl',
      1 => 1700927993,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_656763c7a1f211_91729824 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
        <link href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
dist/output.css" rel="stylesheet">
        <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"><?php echo '</script'; ?>
>

    <style>
        /* @import url('<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
font'); */
        @import url('https://fonts.googleapis.com/css2?family=Courier+Prime&family=PT+Serif&display=swap');

        * {
            font-family: 'Courier Prime', monospace;
            font-family: 'PT Serif', serif;
        }
    </style>

    <?php echo '<script'; ?>
>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    <?php echo '</script'; ?>
>
</head>

<body><?php }
}
