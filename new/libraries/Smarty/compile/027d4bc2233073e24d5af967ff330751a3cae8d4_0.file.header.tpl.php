<?php
/* Smarty version 4.3.0, created on 2024-01-04 23:47:18
  from 'C:\xampp8\htdocs\KEngine\system\themes\Waters\themes\Waters\parts\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_65973576675b28_61314874',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '027d4bc2233073e24d5af967ff330751a3cae8d4' => 
    array (
      0 => 'C:\\xampp8\\htdocs\\KEngine\\system\\themes\\Waters\\themes\\Waters\\parts\\header.tpl',
      1 => 1703768115,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65973576675b28_61314874 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <?php if ($_smarty_tpl->tpl_vars['page']->value == "index") {?>
        <title><?php echo $_smarty_tpl->tpl_vars['config']->value['title'];?>
 <?php echo $_smarty_tpl->tpl_vars['lowerfantasy']->value;?>
</title>
    <?php } else { ?>
        <title><?php echo ucfirst($_smarty_tpl->tpl_vars['page']->value);?>
 - <?php echo $_smarty_tpl->tpl_vars['config']->value['title'];?>
 <?php echo $_smarty_tpl->tpl_vars['lowerfantasy']->value;?>
</title>
    <?php }?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
bootstrap/css/bootstrap2.css" rel="stylesheet">
    <style>
        <?php $_smarty_tpl->_assignInScope('forecolour', array("rgb(255, 0, 0)","rgb(0, 200, 0)","rgb(200, 0, 200)"));?>
        <?php $_smarty_tpl->_assignInScope('backcolour', array("rgb(70, 0, 0)","rgb(0, 70, 0)","rgb(70, 0, 70)"));?>
        .fantasy {
            color: <?php echo $_smarty_tpl->tpl_vars['forecolour']->value[$_smarty_tpl->tpl_vars['theme']->value['config']['title']['colors']];?>
 !important;
            border-color: <?php echo $_smarty_tpl->tpl_vars['forecolour']->value[$_smarty_tpl->tpl_vars['theme']->value['config']['title']['colors']];?>
 !important;
            background-color: <?php echo $_smarty_tpl->tpl_vars['backcolour']->value[$_smarty_tpl->tpl_vars['theme']->value['config']['title']['colors']];?>
 !important;
        }

        html {
            overflow-x: hidden;
        }
    </style>
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"><?php echo '</script'; ?>
>
</head>

<body><?php }
}