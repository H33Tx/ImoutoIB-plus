<?php
/* Smarty version 4.3.0, created on 2023-12-15 03:12:35
  from 'C:\xamppx\htdocs\KEngine\system\themes\FoOlSlideX\themes\fsx\parts\head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_657bb613995d08_32514717',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2383cdcd4945217258a81219d016612ff880f3ee' => 
    array (
      0 => 'C:\\xamppx\\htdocs\\KEngine\\system\\themes\\FoOlSlideX\\themes\\fsx\\parts\\head.tpl',
      1 => 1702606354,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_657bb613995d08_32514717 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
    <link href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
fsx/css" rel="stylesheet" data-instant-track>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
fsx/jquery" data-instant-track><?php echo '</script'; ?>
>

    <style data-instant-track>
        @font-face {
            font-family: 'Courier Prime';
            font-style: normal;
            font-weight: normal;
            src: url("<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
fsx/font?name=CourierPrime-Regular&path=Courier_Prime") format('truetype');
        }

        @font-face {
            font-family: 'Courier Prime';
            font-style: italic;
            font-weight: normal;
            src: url("<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
fsx/font?name=CourierPrime-Italic&path=Courier_Prime") format('truetype');
        }

        @font-face {
            font-family: 'Courier Prime';
            font-style: normal;
            font-weight: bold;
            src: url("<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
fsx/font?name=CourierPrime-Bold&path=Courier_Prime") format('truetype');
        }

        @font-face {
            font-family: 'Courier Prime';
            font-style: italic;
            font-weight: bold;
            src: url("<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
fsx/font?name=CourierPrime-Bolditalic&path=Courier_Prime") format('truetype');
        }


        @font-face {
            font-family: 'PT Serif';
            font-style: normal;
            font-weight: normal;
            src: url("<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
fsx/font?name=PTSerif-Regular&path=PT_Serif") format('truetype');
        }

        @font-face {
            font-family: 'PT Serif';
            font-style: italic;
            font-weight: normal;
            src: url("<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
fsx/font?name=PTSerif-Italic&path=PT_Serif") format('truetype');
        }

        @font-face {
            font-family: 'PT Serif';
            font-style: normal;
            font-weight: bold;
            src: url("<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
fsx/font?name=PTSerif-Bold&path=PT_Serif") format('truetype');
        }

        @font-face {
            font-family: 'PT Serif';
            font-style: italic;
            font-weight: bold;
            src: url("<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
fsx/font?name=PTSerif-Bolditalic&path=PT_Serif") format('truetype');
        }

        * {
            font-family: 'Courier Prime', monospace;
            font-family: 'PT Serif', serif;
        }
    </style>

    <?php echo '<script'; ?>
 data-instant-track>
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
