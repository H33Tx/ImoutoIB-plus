<?php
/* Smarty version 4.3.0, created on 2024-01-14 01:20:49
  from 'C:\xampp8\htdocs\ImoutoIB-plus\new\templates\imouto\themes\default\parts\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_65a328e1c514b2_82740982',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6fe5ce05faba443c0c879cd41e9ed0a4711df0d2' => 
    array (
      0 => 'C:\\xampp8\\htdocs\\ImoutoIB-plus\\new\\templates\\imouto\\themes\\default\\parts\\footer.tpl',
      1 => 1705191648,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65a328e1c514b2_82740982 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="abovefooter">
    <div class="float-right">
        <select id="themes">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, (explode(",",$_smarty_tpl->tpl_vars['config']->value['styles_all'])), 'item', false, 'key', 'name', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                <option value="<?php echo trim($_smarty_tpl->tpl_vars['item']->value);?>
"><?php echo trim($_smarty_tpl->tpl_vars['item']->value);?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
    </div>
</div>

<div class="footer">
    <p>
        <a style="text-decoration:underline" href="https://github.com/H33Tx/ImoutoIB-plus" target="_blank">
            ImoutoIB-plus
        </a>
    </p>
    <p><?php echo $_smarty_tpl->tpl_vars['version']->value;?>
</p>
    <p class="small">Page generated in <?php echo $_smarty_tpl->tpl_vars['generation_time']->value;?>
 seconds.</p>
    <br>
    <a name="bottom" id="bottom"></a>
</div>
<?php echo '<script'; ?>
>
    setTimeout(() => {
        location.reload();
    }, 2000);
<?php echo '</script'; ?>
>
</body>

</html><?php }
}
