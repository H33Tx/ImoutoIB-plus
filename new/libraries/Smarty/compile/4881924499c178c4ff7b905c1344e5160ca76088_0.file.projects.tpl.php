<?php
/* Smarty version 4.3.0, created on 2023-12-07 02:01:12
  from 'C:\xamppx\htdocs\KEngine\system\themes\FoOlSlideX\pages\projects.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_65711958eee979_09513282',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4881924499c178c4ff7b905c1344e5160ca76088' => 
    array (
      0 => 'C:\\xamppx\\htdocs\\KEngine\\system\\themes\\FoOlSlideX\\pages\\projects.tpl',
      1 => 1701910838,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65711958eee979_09513282 (Smarty_Internal_Template $_smarty_tpl) {
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
                <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Page <?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</span>
            </div>
        </li>
    </ol>
</nav>

<div class="px-2 xl:px-0">
    <p class="text-2xl">
        Projects - Page <?php echo $_smarty_tpl->tpl_vars['page']->value;?>

        <?php if ($_smarty_tpl->tpl_vars['logged']->value && $_smarty_tpl->tpl_vars['user']->value['level'] <= 14) {?>
            <a type="button" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
publisher/validate_custom/title/create"
                class="text-white bg-blue-700 hover:bg-blue-800 font-medium text-sm p-1 dark:bg-blue-600 dark:hover:bg-blue-700">Create
                Title</a>
        <?php }?>
    </p>
    <div class="grid grid-cols-6 gap-2 my-2" id="titlesDiv">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['projects']->value, 'item', false, 'key', 'name', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
            <div class="col-span-1">
                <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
project/<?php echo $_smarty_tpl->tpl_vars['item']->value['uid'];?>
/info">
                    <div>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value['cover']) {?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
api/image/<?php echo $_smarty_tpl->tpl_vars['item']->value['cover'];?>
/title" alt="Cover Image">
                        <?php }?>
                    </div>
                    <span class="text-blue-500 hover:underline dark:text-blue-600"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</span>
                </a>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div>

<?php echo '<script'; ?>
>
    function getTitles() {
        $.ajax({
            url: "<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
api/titles/<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
",
            method: 'GET',
            dataType: 'json',
            success: function(data) {
                // Work with the JSON data here
                console.log('Data from API:', data);

                // Check if the data is an object
                if (typeof data !== 'object') {
                    console.error('Data is not in the expected format.');
                    return;
                }

                // Loop through each array in the data and create checkboxes
                Object.keys(data.msg).forEach(key => {
                    const itemsArray = data[key] || [];

                    // Create a container div for each array
                    if (document.getElementById(key + "Div")) {
                        $("#titlesDiv").empty();
                        const containerDiv = document.getElementById("titlesDiv");
                        if (containerDiv) {
                            // Create checkboxes for each item in the array
                            itemsArray.forEach(item => {
                                containerDiv.appendChild(div);
                            });
                        }
                    }
                });

                $("#loadingTagsText").addClass("hidden");
            },
            error: function(xhr, status, error) {
                console.error('There was a problem fetching data:', error);
            }
        });
    }

    getTitles();
<?php echo '</script'; ?>
>

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
                <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Page <?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</span>
            </div>
        </li>
    </ol>
</nav><?php }
}
