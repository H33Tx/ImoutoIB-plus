<?php
/* Smarty version 4.3.0, created on 2024-01-14 20:30:50
  from 'C:\xampp8\htdocs\ImoutoIB-plus\new\templates\imouto\themes\default\parts\admin_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_65a4366a546267_28768305',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e04df0b9491fa29aec4312a7b99bc4f95e3a047' => 
    array (
      0 => 'C:\\xampp8\\htdocs\\ImoutoIB-plus\\new\\templates\\imouto\\themes\\default\\parts\\admin_header.tpl',
      1 => 1705260649,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:pages/mod.".((string)$_smarty_tpl->tpl_vars[\'display_page\']->value).".tpl' => 1,
  ),
),false)) {
function content_65a4366a546267_28768305 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="page-info">
    <h1>Dashbord</h1>
    <div class="small">Try not to ruin everything.</div>
    <br>Logged in as: [<?php echo $_smarty_tpl->tpl_vars['user']->value["id"];?>
:<?php echo $_smarty_tpl->tpl_vars['user']->value['level'];?>
] <?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
<br>
    <form name="logout" action="mod.php" method="post">
        <input type="hidden" id="logout" name="logout" value="logout"><input type="Submit" value="Logout">
    </form>
</div>
<br>
<div class="main first">
    <h2>Moderator tools</h2>
    <p>Things like notices or messages may be here later.</p>
</div>
<br>

<div class="box flex">
    <div class="box left">
        <h2>Navigation</h2>
        <ul class="box-list">
            <li><a href="mod.php" class="active">Home</a></li>
            <li><a href="mod.php?page=account">Account</a></li>
            <li><a href="mod.php?page=users">Manage Users</a></li>
            <li><a href="mod.php?page=reports">Reports (0)</a></li>
            <li><a href="mod.php?page=global_reports">Global Reports (0)</a></li>
            <li><a href="mod.php?page=bans">Manage Bans</a></li>
        </ul>
    </div>
    <div class="container-right">
        <?php $_smarty_tpl->_subTemplateRender("file:pages/mod.".((string)$_smarty_tpl->tpl_vars['display_page']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    </div>
</div><?php }
}
