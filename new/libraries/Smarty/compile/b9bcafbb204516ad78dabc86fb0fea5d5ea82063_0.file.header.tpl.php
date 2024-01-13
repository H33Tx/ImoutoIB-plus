<?php
/* Smarty version 4.3.0, created on 2024-01-06 19:36:14
  from 'C:\xampp8\htdocs\KEngine\system\themes\Asuna\themes\2024\parts\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_65999d9e8929d4_90733261',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9bcafbb204516ad78dabc86fb0fea5d5ea82063' => 
    array (
      0 => 'C:\\xampp8\\htdocs\\KEngine\\system\\themes\\Asuna\\themes\\2024\\parts\\header.tpl',
      1 => 1704564538,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65999d9e8929d4_90733261 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en" data-theme="forest">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
    <link href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
css" rel="stylesheet" data-no-instant>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
jquery" data-no-instant><?php echo '</script'; ?>
>

    <style>
        .link {
            text-decoration-line: underline;
        }

        .link:hover {
            text-decoration-style: double;
        }
    </style>
</head>

<body>
    <div class="container mx-auto min-h-screen max-w-[800px] text-sm">
        <br><br>
        <h1 class="text-3xl font-bold">
            <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
" class="text-primary link">
                <?php echo $_smarty_tpl->tpl_vars['config']->value['title'];?>

            </a>
        </h1>
        <p><?php echo $_smarty_tpl->tpl_vars['fantasy']->value;?>
</p>
        <noscript>
            <p>Also, this page heavily relies on JavaScript.</p>
        </noscript>
        <br>
        <div class="grid grid-cols-4 gap-2">
            <div class="col-span-4 border bg-neutral border-black p-1">
                <div class="space-x-2 flow-root">
                    <?php if (!$_smarty_tpl->tpl_vars['logged']->value) {?>
                        <p class="float-left">You are not logged in.</p>
                        <div class="float-right">
                            <a href="/login" class="link text-primary">Login</a> |
                            <a href="/signup" class="link text-primary">Signup</a>
                        </div>
                    <?php } else { ?>
                        <p class="float-left">Welcome, <a href="/profile/<?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
"
                                class="text-primary link"><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</a>.</p>
                        <p class="float-right">
                            <a href="/settings" class="link text-primary">Settings</a> |
                            <a href="/mail" class="link text-primary">Mail</a> |
                            <a href="/logout" class="link text-primary">Logout</a>
                        </p>
                    <?php }?>
                </div>
            </div>
            <div class="col-span-1">
                <div class="border bg-neutral border-black menu menu-sm p-0">
                    <li><a class="rounded-none p-1" href="/">Home</a></li>
                    <li><a class="rounded-none p-1" href="/teams">Teams</a></li>
                    <li><a class="rounded-none p-1" href="/projects">Projects</a></li>
                    <li><a class="rounded-none p-1" href="/avatars">Avatars</a></li>
                    <li><a class="rounded-none p-1" href="/userbars">Userbars</a></li>
                    <li><a class="rounded-none p-1" href="/forum">Forum</a></li>
                    <hr class="border-1 border-black">
                    <li><a class="rounded-none p-1" href="/about">About</a></li>
                    <li><a class="rounded-none p-1" href="https://discord.gg/7GXtgg2xwY" target="_blank">Discord</a>
                    </li>
                </div>
            </div>
            <div class="col-span-3">
                <?php if ((isset($_smarty_tpl->tpl_vars['breadcrumbs']->value)) && !empty($_smarty_tpl->tpl_vars['breadcrumbs']->value)) {?>
                    <div class="border bg-neutral border-black p-1 w-full mb-2">
                        <?php echo generateBreadcrumbs($_smarty_tpl->tpl_vars['breadcrumbs']->value);?>

                    </div>
                <?php }?>
<div class="border bg-neutral border-black p-1 w-full"><?php }
}
