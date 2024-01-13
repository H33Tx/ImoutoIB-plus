<?php
/* Smarty version 4.3.0, created on 2023-11-30 22:28:09
  from 'C:\xamppx\htdocs\KEngine\system\themes\Waters\parts\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6568fe6914aea7_94192979',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4395a265b630d48d6dd72226c3d8edd76adc5933' => 
    array (
      0 => 'C:\\xamppx\\htdocs\\KEngine\\system\\themes\\Waters\\parts\\footer.tpl',
      1 => 1701379661,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6568fe6914aea7_94192979 (Smarty_Internal_Template $_smarty_tpl) {
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
