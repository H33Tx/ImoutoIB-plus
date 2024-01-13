<?php
/* Smarty version 4.3.0, created on 2023-11-30 22:18:35
  from 'C:\xamppx\htdocs\KEngine\system\themes\Waters\parts\menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6568fc2b86fdf0_70858875',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e295b559c0bad75274f84bb9795e4ddc111117c9' => 
    array (
      0 => 'C:\\xamppx\\htdocs\\KEngine\\system\\themes\\Waters\\parts\\menu.tpl',
      1 => 1701379054,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6568fc2b86fdf0_70858875 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="navbar navbar-inverse navbar-fixed-top mb-2">
    <div class="navbar-inner">
        <div class="container">
            <h3 class="fantasy">
                <a class="brand" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['config']->value['title'];?>
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
            <?php if ($_smarty_tpl->tpl_vars['page']->value == "404") {?><a class="nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
">Error 404</a><?php }?>
            <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['page']->value == "blog") {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
index">Blog</a>
            <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['page']->value == "about") {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
about">About</a>
            <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['page']->value == "archive") {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
archive">Archive</a>
            <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['page']->value == "guestbook") {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
guestbook">Guestbook</a>
        </nav>
        <h4>Projects</h4>
        <nav class="nav nav-pills flex-column">
            <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
projects/foolslidex">FoOlSlideX</a>
        </nav>
        <h4>Account</h4>
        <nav class="nav nav-pills flex-column">
            <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['page']->value == "login") {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
login">Login</a>
            <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['page']->value == "signup") {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
signup">Signup</a>
        </nav>
    </div>
<div class="col-8" id="content"><?php }
}
