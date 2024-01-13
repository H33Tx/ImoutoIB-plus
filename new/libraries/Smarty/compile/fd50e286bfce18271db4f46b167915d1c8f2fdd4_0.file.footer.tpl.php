<?php
/* Smarty version 4.3.0, created on 2023-12-22 09:50:26
  from 'C:\xamppx\htdocs\KEngine\system\themes\Waters\themes\Waters\parts\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_65854dd2f0a6f3_61886847',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd50e286bfce18271db4f46b167915d1c8f2fdd4' => 
    array (
      0 => 'C:\\xamppx\\htdocs\\KEngine\\system\\themes\\Waters\\themes\\Waters\\parts\\footer.tpl',
      1 => 1701379661,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65854dd2f0a6f3_61886847 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
bootstrap/js/bootstrap2.bundle.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
js/js.cookie.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
instantclick?<?php echo filemtime('js/instantclick.js')+filemtime('js/loading-indicator.js');?>
"
    data-instant-track>
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    InstantClick.init('load');

    function setCookie(name, value) {
        Cookies.set(name, value, { expires: 999 })
    }
<?php echo '</script'; ?>
>
</body>

</html><?php }
}
