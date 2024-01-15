<?php
/* Smarty version 4.3.0, created on 2023-12-07 01:59:54
  from 'C:\xamppx\htdocs\KEngine\system\themes\FoOlSlideX\pages\admin\users.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6571190a052713_03246236',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89bed7e985384e19b769ae6078e776144eb21c87' => 
    array (
      0 => 'C:\\xamppx\\htdocs\\KEngine\\system\\themes\\FoOlSlideX\\pages\\admin\\users.tpl',
      1 => 1700934546,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6571190a052713_03246236 (Smarty_Internal_Template $_smarty_tpl) {
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
                <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Edit Users</span>
            </div>
        </li>
    </ol>
</nav>

<div class="px-2 xl:px-0">
    <p class="text-2xl">Edit Users</p>

    <div class="space-y-2 my-4" id="itemDiv">
        <?php if (empty($_smarty_tpl->tpl_vars['userItems']->value)) {?>
            <p>No items yet.</p>
        <?php } else { ?>
            <div id="editAlert" class="p-2 text-sm mb-4 text-blue-800 hidden bg-blue-50 dark:bg-blue-200 dark:text-blue-800"
                role="alert">
                <span class="font-medium">Info alert!</span> Change a few things up and try submitting again.
            </div>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['userItems']->value, 'item', false, 'key', 'name', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                <form id="item<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="grid grid-cols-10 gap-2" method="POST">
                    <input type="number" name="id" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" readonly class="hidden">
                    <div class="col-span-2">
                        <input name="username" type="text" placeholder="Username" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['username'];?>
" readonly
                            class="w-full text-sm text-gray-900 border border-gray-300 bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
                    </div>
                    <div class="col-span-2">
                        <input name="level" type="number" placeholder="Level" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['level'];?>
"
                            class="w-full text-sm text-gray-900 border border-gray-300 bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
                    </div>
                    <div class="col-span-1">
                        <button type="button" onclick="editItem('item<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
')" id="editBtn<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"
                            class="w-full py-2 text-sm text-center text-white bg-blue-700 hover:bg-blue-800 dark:bg-blue-600 dark:hover:bg-blue-700">Edit</button>
                        <button type="button" onclick="deleteItem('item<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
')" id="confirmBtn<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"
                            class="w-full py-2 hidden text-sm text-center text-white bg-red-700 hover:bg-red-800 dark:bg-red-600 dark:hover:bg-red-700">Confirm</button>
                    </div>
                    <div class="col-span-1">
                                                <button type="button"
                            onclick="$(this).addClass('hidden'); $('#editBtn<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
').removeClass('hidden'); $('#confirmBtn<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
').addClass('hidden'); $('#delBtn<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
').removeClass('hidden');"
                            id="cancelBtn<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"
                            class="w-full hidden py-2 text-sm text-center text-white bg-gray-700 hover:bg-gray-800 dark:bg-gray-600 dark:hover:bg-gray-700">Cancel</button>
                    </div>
                </form>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>
    </div>

    <hr>

    <div class="mt-4">
        <p class="text-4xl">NEIN</p>
        <div id="addAlert" class="p-2 text-sm mb-4 text-blue-800 hidden bg-blue-50 dark:bg-blue-200 dark:text-blue-800"
            role="alert">
            <span class="font-medium">Info alert!</span> Change a few things up and try submitting again.
        </div>
        <form id="addForm" class="grid grid-cols-9 gap-2">
            <div class="col-span-2">
                <input type="text" placeholder="Display" id="addDisplay"
                    class="w-full text-sm text-gray-900 border border-gray-300 bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
            </div>
            <div class="col-span-2">
                <input type="text" placeholder="Page/URL" id="addUrl"
                    class="w-full text-sm text-gray-900 border border-gray-300 bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
            </div>
            <div class="col-span-1">
                <input type="number" placeholder="Order" id="addOrder"
                    class="w-full text-sm text-gray-900 border border-gray-300 bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
            </div>
            <div class="col-span-1 flex items-center">
                <label title="Only displayed for members">
                    <input type="checkbox" id="addLogged">
                    Logged only
                </label>
            </div>
            <div class="col-span-1 flex items-center">
                <label title="Opens link in new browser tab">
                    <input type="checkbox" id="addTab">
                    New Tab
                </label>
            </div>
            <div class="col-span-1 flex items-center">
                <label title="Won't be shown at all, nowhere except here">
                    <input type="checkbox" id="addHidden">
                    Hidden
                </label>
            </div>
            <div class="col-span-1">
                <button type="button" id="loginForm" onclick="addItem()"
                    class="w-full py-2 text-sm text-center text-white bg-blue-700 hover:bg-blue-800 dark:bg-blue-600 dark:hover:bg-blue-700">Add</button>
            </div>
        </form>
    </div>
</div>

<?php echo '<script'; ?>
>
    function deleteItem(formId) {
        var values = $("#" + formId).serializeArray();
        $.ajax({
            type: "POST",
            url: "<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
api/admin/users/userlevel",
            data: values,
            success: function(data) {
                const $targetEl = document.getElementById('editAlert');
                const options = {};
                const instanceOptions = {
                    id: 'editAlert',
                    override: true
                };
                const dismiss = new Dismiss($targetEl, null, options, instanceOptions);

                if (data.done) {
                    // alert("session: " + data.session);
                    // If success, display an alert
                    $targetEl.innerHTML = "<b>Success!</b> " + data.msg;
                    $targetEl.classList.remove("hidden");
                    //TODO: Update Menubar and footerbar to match the new updated stuff and also move the form up/down on order change
                    // THIS is bad practice...
                    setTimeout(() => {
                        document.location.reload();
                    }, 500);
                } else {
                    // If not successful, show the element with id "editAlert" and set its inner HTML to the response message
                    $targetEl.innerHTML = "<b>Error!</b> " + data.msg;
                    $targetEl.classList.remove("hidden");
                }
                setTimeout(() => {
                    $targetEl.classList.add("hidden");
                }, 2000);
            }
        });
        return false;
    }

    function editItem(formId) {
        var values = $("#" + formId).serializeArray();
        // alert(values[0].name)
        $.ajax({
            type: "POST",
            url: "<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
api/admin/users/userlevel",
            data: values,
            success: function(data) {
                const $targetEl = document.getElementById('editAlert');
                const options = {};
                const instanceOptions = {
                    id: 'editAlert',
                    override: true
                };
                const dismiss = new Dismiss($targetEl, null, options, instanceOptions);

                if (data.done) {
                    // alert("session: " + data.session);
                    // If success, display an alert
                    $targetEl.innerHTML = "<b>Success!</b> " + data.msg;
                    $targetEl.classList.remove("hidden");
                    //TODO: Update Menubar and footerbar to match the new updated stuff and also move the form up/down on order change
                    // THIS is bad practice...
                    setTimeout(() => {
                        document.location.reload();
                    }, 500);
                } else {
                    // If not successful, show the element with id "editAlert" and set its inner HTML to the response message
                    $targetEl.innerHTML = "<b>Error!</b> " + data.msg;
                    $targetEl.classList.remove("hidden");
                }
                // setTimeout(() => {
                //     $targetEl.classList.add("hidden");
                // }, 2000);
            }
        });
        return false;
    }

    function addItem() {
        $.ajax({
            type: "POST",
            url: "<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
api/admin/users/userlevel",
            data: $(this).serialize(),
            success: function(data) {
                const $targetEl = document.getElementById('addAlert');
                const options = {};
                const instanceOptions = {
                    id: 'addAlert',
                    override: true
                };
                const dismiss = new Dismiss($targetEl, null, options, instanceOptions);

                if (data.done) {
                    // alert("session: " + data.session);
                    // If success, display an alert
                    $targetEl.innerHTML = "<b>Success!</b> " + data.msg;
                    $targetEl.classList.remove("hidden");
                    $("#addForm")[0].reset();
                    //TODO: Add form into div formDiv instead of force refreshing page
                    // THIS is bad practice...
                    setTimeout(() => {
                        document.location.reload();
                    }, 500);

                } else {
                    // If not successful, show the element with id "addAlert" and set its inner HTML to the response message
                    $targetEl.innerHTML = "<b>Error!</b> " + data.msg;
                    $targetEl.classList.remove("hidden");
                }
                //Doesn't make sense if page is force-refreshed.
                // setTimeout(() => {
                //     $targetEl.classList.add("hidden");
                // }, 2000);
            }
        });
        return false;
    }
<?php echo '</script'; ?>
>

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
                <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Edit Users</span>
            </div>
        </li>
    </ol>
</nav><?php }
}