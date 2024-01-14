<?php
/* Smarty version 4.3.0, created on 2024-01-14 01:29:04
  from 'C:\xampp8\htdocs\ImoutoIB-plus\new\templates\imouto\themes\default\pages\index.index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_65a32ad029b4f6_10137518',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae153620014f054218514893aa387857734a1d45' => 
    array (
      0 => 'C:\\xampp8\\htdocs\\ImoutoIB-plus\\new\\templates\\imouto\\themes\\default\\pages\\index.index.tpl',
      1 => 1705192144,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65a32ad029b4f6_10137518 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="page-info">
    <h1><?php echo $_smarty_tpl->tpl_vars['config']->value['site_name'];?>
</h1>
    <span class="small"><?php echo $_smarty_tpl->tpl_vars['config']->value['site_slogan'];?>
</span>
</div>
<br>

<div class="main first">
    <h2>Live Demo</h2>
    <p>
        This software is probably riddled with bugs and exploits.<br>
        Please send me questions, feature requests, and bug reports on
        <a href="https://github.com/H33Tx/ImoutoIB-plus" target="_blank">Github</a>.<br><br>
        You should not use ImoutoIB-plus in any serious capacity.
    </p>
</div>
<br>

<div class="main">
    <h2>Boards</h2>
    <table id="boards">
        <thead>
            <tr>
                <th><small>Board</small></th>
                <th><small>Description</small></th>
                <th><small>Posts</small></th>
            </tr>
        </thead>
        <tbody>
            <tr class="cat" id="Testing Boards">
                <th><span class="small"></span></th>
                <th>
                    <h2>Testing Boards</h2>
                </th>
                <th><span class="small"></span></th>
            </tr>
            <tr>
                <th><a href="/ImoutoIB/?board=img">/img/ - imageboard</a></th>
                <th>You can test the imageboard functions here.</th>
                <th>5</th>
            </tr>
            <tr>
                <th><a href="/ImoutoIB/?board=txt">/txt/ - textboard</a></th>
                <th>You can test the textboard functions here.</th>
                <th>2</th>
            </tr>
        </tbody>
    </table>
    <br>
</div>
<br>

<div class="main">
    <h2>Stats</h2>
    <div class="stats">
        <div><b>Total Posts:</b> 7</div>
        <div><b>Unique Posters:</b> 1</div>
        <div><b>Active Content:</b> 2 MB</div>
    </div>
</div><?php }
}
