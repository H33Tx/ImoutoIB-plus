<?php
/* Smarty version 4.3.0, created on 2023-12-13 13:16:08
  from 'C:\xamppx\htdocs\KEngine\system\themes\FoOlSlideX\themes\fsx\pages\project.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6579a088358858_43545519',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b9c3fae1f8c4260f4eecf5e3fc1f57cd5006fca' => 
    array (
      0 => 'C:\\xamppx\\htdocs\\KEngine\\system\\themes\\FoOlSlideX\\themes\\fsx\\pages\\project.tpl',
      1 => 1702469767,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6579a088358858_43545519 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="flex px-2 py-1 text-gray-700 bg-gray-50 dark:bg-gray-800 mb-4" aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
        <li>
            <div class="flex items-center">
                <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
"
                    class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white"><?php echo $_smarty_tpl->tpl_vars['config']->value['title'];?>
</a>
            </div>
        </li>
        <li>
            <div class="flex items-center">
                <span class="text-gray-400 cursor-default">»</span>
                <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
projects"
                    class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Projects</a>
            </div>
        </li>
        <li>
            <div class="flex items-center">
                <span class="text-gray-400 cursor-default">»</span>
                <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
project/<?php echo $_smarty_tpl->tpl_vars['project']->value['uid'];?>
/info"
                    class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white"><?php echo $_smarty_tpl->tpl_vars['project']->value['title'];?>
</a>
            </div>
        </li>
        <li>
            <div class="flex items-center">
                <span class="text-gray-400 cursor-default">»</span>
                <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400"><?php echo ucfirst($_smarty_tpl->tpl_vars['tab']->value);?>
</span>
            </div>
        </li>
    </ol>
</nav>

<div class="px-2 xl:px-0">
    <h1 class="text-2xl"><?php echo $_smarty_tpl->tpl_vars['project']->value['title'];?>
</h1>

    <div class="my-2">
        <ul
            class="flex flex-wrap text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400">
            <li>
                <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
project/<?php echo $_smarty_tpl->tpl_vars['project']->value['uid'];?>
/info" aria-current="page"
                    class="inline-block p-2 <?php if ($_smarty_tpl->tpl_vars['tab']->value == "info") {?>text-blue-600 bg-gray-100 active dark:bg-gray-800 dark:text-blue-500<?php } else { ?>hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300<?php }?>">Info</a>
            </li>
            <li>
                <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
project/<?php echo $_smarty_tpl->tpl_vars['project']->value['uid'];?>
/chapters"
                    class="inline-block p-2 <?php if ($_smarty_tpl->tpl_vars['tab']->value == "chapters") {?>text-blue-600 bg-gray-100 active dark:bg-gray-800 dark:text-blue-500<?php } else { ?>hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300<?php }?>">Chapters</a>
            </li>
            <li>
                <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
project/<?php echo $_smarty_tpl->tpl_vars['project']->value['uid'];?>
/comments"
                    class="inline-block p-2 <?php if ($_smarty_tpl->tpl_vars['tab']->value == "comments") {?>text-blue-600 bg-gray-100 active dark:bg-gray-800 dark:text-blue-500<?php } else { ?>hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300<?php }?>">Comments</a>
            </li>
            <li>
                <?php if ($_smarty_tpl->tpl_vars['logged']->value && $_smarty_tpl->tpl_vars['user']->value['level'] < 15) {?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
publisher/validate_custom/title/modify/<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
"
                        class="inline-block p-2 hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300">Edit</a>
                <?php } else { ?>
                    <a class="inline-block p-2 text-gray-400 cursor-not-allowed dark:text-gray-500">Edit</a>
                <?php }?>
            </li>
        </ul>
    </div>

    <div class="my-2">
        <?php if ($_smarty_tpl->tpl_vars['tab']->value == "info") {?>
            <div class="grid grid-cols-6 gap-x-2 mb-2">
                <?php if (!empty($_smarty_tpl->tpl_vars['project']->value['cover'])) {?>
                    <div class="col-span-1">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
api/image/<?php echo $_smarty_tpl->tpl_vars['project']->value['cover'];?>
/title" class="w-full">
                    </div>
                <?php }?>
                <div class="<?php if (!empty($_smarty_tpl->tpl_vars['project']->value['cover'])) {?>col-span-5<?php } else { ?>col-span-6<?php }?> w-full">
                    <div class="w-full">
                        <?php if (!empty($_smarty_tpl->tpl_vars['project']->value['summary'])) {?>
                            <div id="summary">
                                <?php echo $_smarty_tpl->tpl_vars['parsedown']->value->text($_smarty_tpl->tpl_vars['project']->value['summary']);?>

                            </div>
                            <hr class="h-px my-1 bg-gray-200 dark:bg-gray-700">
                        <?php }?>
                        <?php if (!empty($_smarty_tpl->tpl_vars['project']->value['alts'])) {?>
                            <div>
                                <b>Alternative Titles:</b> <?php echo $_smarty_tpl->tpl_vars['project']->value['alts'];?>

                            </div>
                        <?php }?>
                        <?php if (!empty($_smarty_tpl->tpl_vars['project']->value['authors']) || !empty($_smarty_tpl->tpl_vars['project']->value['artists'])) {?>
                            <div class="grid grid-cols-2 gap-x-2">
                                <?php if (!empty($_smarty_tpl->tpl_vars['project']->value['authors'])) {?>
                                    <div class="col-span-1">
                                        <b>Author/s:</b> <?php echo $_smarty_tpl->tpl_vars['project']->value['authors'];?>

                                    </div>
                                <?php }?>
                                <?php if (!empty($_smarty_tpl->tpl_vars['project']->value['artists'])) {?>
                                    <div class="col-span-1">
                                        <b>Artist/s:</b> <?php echo $_smarty_tpl->tpl_vars['project']->value['artists'];?>

                                    </div>
                                <?php }?>
                            </div>
                        <?php }?>
                        <div class="grid grid-cols-3 gap-x-2">
                            <div class="col-span-1">
                                <b>Original Language:</b> <?php echo $_smarty_tpl->tpl_vars['project']->value['lang'];?>

                            </div>
                            <div class="col-span-1">
                                <b>Original Status:</b>
                                <?php if ($_smarty_tpl->tpl_vars['project']->value['status']['original'] == 1) {?>
                                    Announced
                                <?php } elseif ($_smarty_tpl->tpl_vars['project']->value['status']['original'] == 2) {?>
                                    Releasing
                                <?php } elseif ($_smarty_tpl->tpl_vars['project']->value['status']['original'] == 3) {?>
                                    Hiatus
                                <?php } elseif ($_smarty_tpl->tpl_vars['project']->value['status']['original'] == 4) {?>
                                    Completed
                                <?php } else { ?>
                                    Cancelled
                                <?php }?>
                            </div>
                            <div class="col-span-1">
                                <b>Upload Status:</b>
                                <?php if ($_smarty_tpl->tpl_vars['project']->value['status']['upload'] == 1) {?>
                                    Planned
                                <?php } elseif ($_smarty_tpl->tpl_vars['project']->value['status']['upload'] == 2) {?>
                                    Ongoing
                                <?php } elseif ($_smarty_tpl->tpl_vars['project']->value['status']['upload'] == 3) {?>
                                    Hiatus
                                <?php } elseif ($_smarty_tpl->tpl_vars['project']->value['status']['upload'] == 4) {?>
                                    Completed
                                <?php } else { ?>
                                    Cancelled
                                <?php }?>
                            </div>
                        </div>
                        <?php if (!empty($_smarty_tpl->tpl_vars['project']->value['years'])) {?>
                            <div class="grid grid-cols-2 gap-x-2">
                                <?php if (!empty($_smarty_tpl->tpl_vars['project']->value['years']['release'])) {?>
                                    <div class="col-span-1">
                                        <b>Released:</b> <?php echo $_smarty_tpl->tpl_vars['project']->value['years']['release'];?>

                                    </div>
                                <?php }?>
                                <?php if (!empty($_smarty_tpl->tpl_vars['project']->value['years']['completion'])) {?>
                                    <div class="col-span-1">
                                        <b>Completed:</b> <?php echo $_smarty_tpl->tpl_vars['project']->value['years']['completion'];?>

                                    </div>
                                <?php }?>
                            </div>
                        <?php }?>
                        <?php if (!empty($_smarty_tpl->tpl_vars['project']->value['tags']['format']) || !empty($_smarty_tpl->tpl_vars['project']->value['tags']['genre']) || !empty($_smarty_tpl->tpl_vars['project']->value['tags']['theme']) || !empty($_smarty_tpl->tpl_vars['project']->value['tags']['warnings'])) {?>
                            <div class="grid grid-cols-2 gap-x-2 mt-2" id="tags">
                                <?php if (!empty($_smarty_tpl->tpl_vars['project']->value['tags']['demographic'])) {?>
                                    <div class="col-span-1" id="demographicDiv">
                                        <b>Demographic:</b>
                                    </div>
                                <?php }?>
                                <?php if (!empty($_smarty_tpl->tpl_vars['project']->value['tags']['format'])) {?>
                                    <div class="col-span-1" id="formatDiv">
                                        <b>Formats:</b>
                                    </div>
                                <?php }?>
                                <?php if (!empty($_smarty_tpl->tpl_vars['project']->value['tags']['genre'])) {?>
                                    <div class="col-span-1" id="genreDiv">
                                        <b>Genres:</b>
                                    </div>
                                <?php }?>
                                <?php if (!empty($_smarty_tpl->tpl_vars['project']->value['tags']['theme'])) {?>
                                    <div class="col-span-1" id="themeDiv">
                                        <b>Themes:</b>
                                    </div>
                                <?php }?>
                                <?php if (!empty($_smarty_tpl->tpl_vars['project']->value['tags']['warnings'])) {?>
                                    <div class="col-span-1" id="warningsDiv">
                                        <b>Warnings:</b>
                                    </div>
                                <?php }?>
                            </div>
                        <?php }?>
                    </div>
                </div>
            </div>

            <?php echo '<script'; ?>
>
                function addClassesToLinks(clss, blnk) {
                    var summaryDiv = document.getElementById(clss);
                    if (summaryDiv) {
                        var links = summaryDiv.getElementsByTagName('a');
                        for (var i = 0; i < links.length; i++) {
                            links[i].classList.add('text-blue-500', 'dark:text-blue-600', 'hover:underline');
                            if (blnk)
                                links[i].setAttribute("target", "_blank");
                        }
                    }
                }

                <?php if (!empty($_smarty_tpl->tpl_vars['project']->value['summary'])) {?>
                    addClassesToLinks("summary", true);
                <?php }?>
                <?php if (!empty($_smarty_tpl->tpl_vars['project']->value['tags']['format']) || !empty($_smarty_tpl->tpl_vars['project']->value['tags']['genre']) || !empty($_smarty_tpl->tpl_vars['project']->value['tags']['theme']) || !empty($_smarty_tpl->tpl_vars['project']->value['tags']['warnings'])) {?>
                    addClassesToLinks("tags", false);
                <?php }?>
            <?php echo '</script'; ?>
>
        <?php } elseif ($_smarty_tpl->tpl_vars['tab']->value == "chapters") {?>

        <?php } else { ?>
        <?php }?>
    </div>
</div>

<nav class="flex px-2 py-1 text-gray-700 bg-gray-50 dark:bg-gray-800 my-4" aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
        <li>
            <div class="flex items-center">
                <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
"
                    class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white"><?php echo $_smarty_tpl->tpl_vars['config']->value['title'];?>
</a>
            </div>
        </li>
        <li>
            <div class="flex items-center">
                <span class="text-gray-400 cursor-default">»</span>
                <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
projects"
                    class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Projects</a>
            </div>
        </li>
        <li>
            <div class="flex items-center">
                <span class="text-gray-400 cursor-default">»</span>
                <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
project/<?php echo $_smarty_tpl->tpl_vars['project']->value['uid'];?>
/info"
                    class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white"><?php echo $_smarty_tpl->tpl_vars['project']->value['title'];?>
</a>
            </div>
        </li>
        <li>
            <div class="flex items-center">
                <span class="text-gray-400 cursor-default">»</span>
                <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400"><?php echo ucfirst($_smarty_tpl->tpl_vars['tab']->value);?>
</span>
            </div>
        </li>
    </ol>
</nav><?php }
}
