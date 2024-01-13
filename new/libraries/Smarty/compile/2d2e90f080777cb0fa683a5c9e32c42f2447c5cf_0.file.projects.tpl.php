<?php
/* Smarty version 4.3.0, created on 2024-01-05 02:46:16
  from 'C:\xampp8\htdocs\KEngine\system\themes\Asuna\themes\2024\pages\projects\projects.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_65975f68274d27_93126460',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d2e90f080777cb0fa683a5c9e32c42f2447c5cf' => 
    array (
      0 => 'C:\\xampp8\\htdocs\\KEngine\\system\\themes\\Asuna\\themes\\2024\\pages\\projects\\projects.tpl',
      1 => 1704419052,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65975f68274d27_93126460 (Smarty_Internal_Template $_smarty_tpl) {
?><h2 class="text-xl font-bold">Projects - Page <?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>
</h2>

<div role="alert" class="alert p-1 rounded-none my-2">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="stroke-current shrink-0 w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
    </svg>
    <span>Want to add your own project? <a href="/project/new" class="text-primary link">Click here!</a></span>
</div><?php }
}
