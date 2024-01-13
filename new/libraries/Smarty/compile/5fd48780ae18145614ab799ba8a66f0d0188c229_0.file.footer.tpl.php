<?php
/* Smarty version 4.3.0, created on 2024-01-06 17:03:31
  from 'C:\xampp8\htdocs\KEngine\system\themes\Asuna\themes\2024\parts\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_659979d3751609_29275366',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5fd48780ae18145614ab799ba8a66f0d0188c229' => 
    array (
      0 => 'C:\\xampp8\\htdocs\\KEngine\\system\\themes\\Asuna\\themes\\2024\\parts\\footer.tpl',
      1 => 1704557005,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659979d3751609_29275366 (Smarty_Internal_Template $_smarty_tpl) {
?></div>
</div>
<div class="col-span-4 border bg-neutral border-black p-1">
    <p>&copy; 2021-<?php echo date("Y");?>
 <a href="/" class="text-primary link">Asuna.cloud</a>, All rights
        reserved.</p>
    <p class="text-sm">
        Running on <a href="https://github.com/H33Tx/KEngine" target="_blank" class="text-primary link">KEngine</a>
        <span class="badge badge-primary badge-sm"><?php echo $_smarty_tpl->tpl_vars['version']->value;?>
</span> - developed by <a href="https://h33t.moe"
            target="_blank" class="text-primary link">H33T.moe</a>
    </p>
</div>
<div class="col-span-4 grid grid-cols-8 gap-2">
    <a href="https://h33t.moe" target="_blank">
        <img src="https://h33t.moe/assets/buttons/h33t.jpg">
    </a>
    <a href="https://palemoon.org" target="_blank">
        <img src="https://h33t.moe/assets/buttons/palemoon.jpg">
    </a>
    <a href="http://angelic-trust.net/" target="_blank">
        <img src="https://h33t.moe/assets/buttons/angelic-trust.jpg">
    </a>
</div>
</div>
</div>

<?php echo '<script'; ?>

    src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
instantclick?<?php echo filemtime('js/instantclick.js')+filemtime('js/loading-indicator.js')+filemtime('js/js.cookie.js');?>
"
    data-instant-track>
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 data-no-instant>
    instantclick.init("mousedown")
<?php echo '</script'; ?>
>
</body>

</html><?php }
}
