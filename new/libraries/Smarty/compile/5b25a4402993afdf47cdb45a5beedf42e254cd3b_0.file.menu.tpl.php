<?php
/* Smarty version 4.3.0, created on 2024-01-04 23:47:18
  from 'C:\xampp8\htdocs\KEngine\system\themes\Waters\themes\Waters\parts\menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_65973576737d41_24403123',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b25a4402993afdf47cdb45a5beedf42e254cd3b' => 
    array (
      0 => 'C:\\xampp8\\htdocs\\KEngine\\system\\themes\\Waters\\themes\\Waters\\parts\\menu.tpl',
      1 => 1703777694,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65973576737d41_24403123 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="navbar navbar-inverse navbar-fixed-top mb-2">
    <div class="navbar-inner">
        <div class="container">
            <h3 class="fantasy">
                <a class="brand" href="/"><?php echo $_smarty_tpl->tpl_vars['config']->value['title'];?>
<span class="fantasy"> - <?php echo $_smarty_tpl->tpl_vars['fantasy']->value;?>
</span></a>
            </h3>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-2">
        <h4>Main</h4>
        <nav class="nav nav-pills flex-column">
                        <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['page']->value == "blog" || $_smarty_tpl->tpl_vars['page']->value == "index") {?>active<?php }?>" href="/index">Blog</a>
            <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['page']->value == "about") {?>active<?php }?>" href="/about">About</a>
            <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['page']->value == "archive") {?>active<?php }?>" href="/archive">Archive</a>
            <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['page']->value == "guestbook") {?>active<?php }?>" href="/guestbook">Guestbook</a>
        </nav>
        <h4>Projects</h4>
        <nav class="nav nav-pills flex-column">
            <a class="nav-link <?php if (strtolower($_smarty_tpl->tpl_vars['page']->value) == "project foolslidex") {?>active<?php }?>" href="/projects/FoOlSlideX">FoOlSlideX</a>
            <a class="nav-link <?php if (strtolower($_smarty_tpl->tpl_vars['page']->value) == "project waters") {?>active<?php }?>" href="/projects/Waters">Waters</a>
            <a class="nav-link <?php if (strtolower($_smarty_tpl->tpl_vars['page']->value) == "project kengine") {?>active<?php }?>" href="/projects/KEngine">KEngine</a>
            <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['page']->value == "projects") {?>active<?php }?>" href="/projects">More...</a>
        </nav>
        <h4>Account</h4>
        <nav class="nav nav-pills flex-column">
            <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['page']->value == "login") {?>active<?php }?>" href="/login">Login</a>
            <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['page']->value == "signup") {?>active<?php }?>" href="/signup">Signup</a>
        </nav>
    </div>
<div class="col-8" id="content"><?php }
}
