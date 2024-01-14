<?php
/* Smarty version 4.3.0, created on 2024-01-14 01:28:49
  from 'C:\xampp8\htdocs\ImoutoIB-plus\new\templates\imouto\themes\default\parts\footer_bar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_65a32ac1a69de9_66274558',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77df8aec95c88f58e4d9a4ff0dbf486ae66873f7' => 
    array (
      0 => 'C:\\xampp8\\htdocs\\ImoutoIB-plus\\new\\templates\\imouto\\themes\\default\\parts\\footer_bar.tpl',
      1 => 1705192129,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65a32ac1a69de9_66274558 (Smarty_Internal_Template $_smarty_tpl) {
?><br>
<hr class="footer static">
<div class="static footer">
    <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['footer_items']->value, 'item', false, 'key', 'name', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
</div><?php }
}
