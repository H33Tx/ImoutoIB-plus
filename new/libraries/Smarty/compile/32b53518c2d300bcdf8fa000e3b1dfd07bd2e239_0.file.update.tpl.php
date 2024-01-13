<?php
/* Smarty version 4.3.0, created on 2023-12-13 13:02:05
  from 'C:\xamppx\htdocs\KEngine\system\themes\FoOlSlideX\themes\fsx\pages\admin\update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_65799d3dc66f29_29331923',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32b53518c2d300bcdf8fa000e3b1dfd07bd2e239' => 
    array (
      0 => 'C:\\xamppx\\htdocs\\KEngine\\system\\themes\\FoOlSlideX\\themes\\fsx\\pages\\admin\\update.tpl',
      1 => 1702468924,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65799d3dc66f29_29331923 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="flex px-2 py-1 text-gray-700 bg-gray-50 dark:bg-gray-800 mb-4" aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
        <li class="inline-flex items-center">
            <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
"
                class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                <?php echo $_smarty_tpl->tpl_vars['config']->value['title'];?>

            </a>
        </li>
        <li>
            <div class="flex items-center">
                <span class="text-gray-400 cursor-default">»</span>
                <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
admin"
                    class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Admin</a>
            </div>
        </li>
        <li>
            <div class="flex items-center">
                <span class="text-gray-400 cursor-default">»</span>
                <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Update-Center</span>
            </div>
        </li>
    </ol>
</nav>

<div>
    <p class="text-2xl mb-2">Update-Center</p>
    <p class="text-xl">KEngine</p>
    <p>Your version: <span
            class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 dark:bg-blue-900 dark:text-blue-300">v<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
</span>
    </p>
    <p>Latest stable: <span
            class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 dark:bg-green-900 dark:text-green-300">v<?php echo $_smarty_tpl->tpl_vars['kengine']->value['gitver'];?>
</span>
    </p>
    <p>Latest dev: <span
            class="bg-yellow-100 text-yellow-800 text-xs font-medium me-2 px-2.5 py-0.5 dark:bg-yellow-900 dark:text-yellow-300">v<?php echo $_smarty_tpl->tpl_vars['kengine']->value['devver'];?>
</span>
    </p>

    <p class="text-xl mt-2">FoOlSlideX</p>
    <p>Your version: <span
            class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 dark:bg-blue-900 dark:text-blue-300">v<?php echo $_smarty_tpl->tpl_vars['foolslidex']->value['version'];?>
</span>
    </p>
    <p>Latest stable: <span
            class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 dark:bg-green-900 dark:text-green-300">v<?php echo $_smarty_tpl->tpl_vars['foolslidex']->value['gitver'];?>
</span>
    </p>
    <p>Latest dev: <span
            class="bg-yellow-100 text-yellow-800 text-xs font-medium me-2 px-2.5 py-0.5 dark:bg-yellow-900 dark:text-yellow-300">v<?php echo $_smarty_tpl->tpl_vars['foolslidex']->value['devver'];?>
</span>
    </p>
</div>

<nav class="flex px-2 py-1 text-gray-700 bg-gray-50 dark:bg-gray-800 my-4" aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
        <li class="inline-flex items-center">
            <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
"
                class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                <?php echo $_smarty_tpl->tpl_vars['config']->value['title'];?>

            </a>
        </li>
        <li>
            <div class="flex items-center">
                <span class="text-gray-400 cursor-default">»</span>
                <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
admin"
                    class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Admin</a>
            </div>
        </li>
        <li>
            <div class="flex items-center">
                <span class="text-gray-400 cursor-default">»</span>
                <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Update-Center</span>
            </div>
        </li>
    </ol>
</nav><?php }
}
