<?php
/* Smarty version 4.3.0, created on 2024-01-14 16:45:39
  from 'C:\xampp8\htdocs\ImoutoIB-plus\new\templates\imouto\themes\default\pages\error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_65a401a369de55_88681016',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d6f8b33f0e23cfa91d9b507fbc994f565818b90' => 
    array (
      0 => 'C:\\xampp8\\htdocs\\ImoutoIB-plus\\new\\templates\\imouto\\themes\\default\\pages\\error.tpl',
      1 => 1705247120,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65a401a369de55_88681016 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['success']->value) {?>
    <div class="message"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
<?php } else { ?>
    <div class="message">Gomen nasai... <?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
<?php }
}
}
