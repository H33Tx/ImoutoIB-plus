<?php
/* Smarty version 4.3.0, created on 2023-12-13 13:08:13
  from 'C:\xamppx\htdocs\KEngine\system\themes\FoOlSlideX\themes\fsx\pages\publisher\title.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_65799ead978a07_97585324',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b3a92d32c8f05677d64108199ca34ecbe0ba06f' => 
    array (
      0 => 'C:\\xamppx\\htdocs\\KEngine\\system\\themes\\FoOlSlideX\\themes\\fsx\\pages\\publisher\\title.tpl',
      1 => 1702469290,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65799ead978a07_97585324 (Smarty_Internal_Template $_smarty_tpl) {
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
publisher/title/create"
                    class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Publisher</a>
            </div>
        </li>
        <li>
            <div class="flex items-center">
                <span class="text-gray-400 cursor-default">»</span>
                <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400"><?php echo ucfirst($_smarty_tpl->tpl_vars['action']->value);?>

                    Title</span>
            </div>
        </li>
    </ol>
</nav>

<div class="px-2 xl:px-0">
    <p class="text-2xl">Publisher - <?php echo ucfirst($_smarty_tpl->tpl_vars['action']->value);?>
 Title</p>
    <?php if ((isset($_smarty_tpl->tpl_vars['res']->value))) {?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
project/<?php echo $_smarty_tpl->tpl_vars['res']->value['uid'];?>
/info" class="text-blue-500 dark:text-blue-600 hover:underline">Return to
            Title "<?php echo $_smarty_tpl->tpl_vars['res']->value['title'];?>
"</a>
    <?php }?>

    <div class="mb-2"></div>

    <div id="addAlert"
        class="w-full p-2 text-sm mb-4 text-blue-800 hidden bg-blue-50 dark:bg-blue-200 dark:text-blue-800"
        role="alert">
        <span class="font-medium">Info alert!</span> Change a few things up and try submitting again.
    </div>

    <form method="POST" id="titleForm">
        <?php if ((isset($_smarty_tpl->tpl_vars['res']->value))) {?>
            <input type="text" name="id" value="<?php echo $_smarty_tpl->tpl_vars['res']->value['id'];?>
" class="hidden" readonly>
        <?php }?>
        <div class="w-full grid grid-cols-10 gap-2">
            <div class="col-span-4">
                <label class="w-full border p-1 h-full dark:border-gray-700">
                    <input type="file" id="cover">
                    Select Cover Image
                </label>
            </div>
            <div class="col-span-2">
                <img class="w-full" id="coverPreview"
                    <?php if ((isset($_smarty_tpl->tpl_vars['res']->value)) && !empty($_smarty_tpl->tpl_vars['res']->value['cover'])) {?>src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
api/image/<?php echo $_smarty_tpl->tpl_vars['res']->value['cover'];?>
/title" <?php }?>>
                <input type="text" name="cover" class="hidden">
            </div>
            <div class="col-span-4"></div>
            <div class="col-span-5">
                <input type="text" placeholder="Ttitle" name="title" <?php if ((isset($_smarty_tpl->tpl_vars['res']->value))) {?>value="<?php echo $_smarty_tpl->tpl_vars['res']->value['title'];?>
" <?php }?>
                    class="w-full text-sm text-gray-900 border border-gray-300 bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
            </div>
            <div class="col-span-5"></div>
            <div class="col-span-10">
                <input type="text" placeholder="Alternative Titles (Seperate with a semicolon)" name="alts"
                    <?php if ((isset($_smarty_tpl->tpl_vars['res']->value))) {?>value="<?php echo $_smarty_tpl->tpl_vars['res']->value['alts'];?>
" <?php }?>
                    class="w-full text-sm text-gray-900 border border-gray-300 bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
            </div>
            <div class="col-span-4">
                <input type="text" placeholder="Author/s (Seperate with a semicolon)" name="authors"
                    <?php if ((isset($_smarty_tpl->tpl_vars['res']->value))) {?>value="<?php echo $_smarty_tpl->tpl_vars['res']->value['authors'];?>
" <?php }?>
                    class="w-full text-sm text-gray-900 border border-gray-300 bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
            </div>
            <div class="col-span-4">
                <input type="text" placeholder="Artist/s (Seperate with a semicolon)" name="artists"
                    <?php if ((isset($_smarty_tpl->tpl_vars['res']->value))) {?>value="<?php echo $_smarty_tpl->tpl_vars['res']->value['artists'];?>
" <?php }?>
                    class="w-full text-sm text-gray-900 border border-gray-300 bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
            </div>
            <div class="col-span-2">
                <input type="text" placeholder="Original Language" name="lang" <?php if ((isset($_smarty_tpl->tpl_vars['res']->value))) {?>value="<?php echo $_smarty_tpl->tpl_vars['res']->value['lang'];?>
" <?php }?>
                    class="w-full text-sm text-gray-900 border border-gray-300 bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
            </div>
            <div class="col-span-3">
                <select name="originalStatus"
                    class="select w-full text-sm text-gray-900 border border-gray-300 bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
                    <option disabled selected>Select original work status...</option>
                    <option value="1" <?php if ((isset($_smarty_tpl->tpl_vars['res']->value)) && $_smarty_tpl->tpl_vars['res']->value['status']['original'] == 1) {?>selected<?php }?>>Announced</option>
                    <option value="2" <?php if ((isset($_smarty_tpl->tpl_vars['res']->value)) && $_smarty_tpl->tpl_vars['res']->value['status']['original'] == 2) {?>selected<?php }?>>Releasing</option>
                    <option value="3" <?php if ((isset($_smarty_tpl->tpl_vars['res']->value)) && $_smarty_tpl->tpl_vars['res']->value['status']['original'] == 3) {?>selected<?php }?>>Hiatus</option>
                    <option value="4" <?php if ((isset($_smarty_tpl->tpl_vars['res']->value)) && $_smarty_tpl->tpl_vars['res']->value['status']['original'] == 4) {?>selected<?php }?>>Completed</option>
                    <option value="5" <?php if ((isset($_smarty_tpl->tpl_vars['res']->value)) && $_smarty_tpl->tpl_vars['res']->value['status']['original'] == 5) {?>selected<?php }?>>Cancelled</option>
                </select>
            </div>
            <div class="col-span-3">
                <select name="uploadStatus"
                    class="select w-full text-sm text-gray-900 border border-gray-300 bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
                    <option disabled selected>Select scanlation status...</option>
                    <option value="1" <?php if ((isset($_smarty_tpl->tpl_vars['res']->value)) && $_smarty_tpl->tpl_vars['res']->value['status']['upload'] == 1) {?>selected<?php }?>>Planned</option>
                    <option value="2" <?php if ((isset($_smarty_tpl->tpl_vars['res']->value)) && $_smarty_tpl->tpl_vars['res']->value['status']['upload'] == 2) {?>selected<?php }?>>Ongoing</option>
                    <option value="3" <?php if ((isset($_smarty_tpl->tpl_vars['res']->value)) && $_smarty_tpl->tpl_vars['res']->value['status']['upload'] == 3) {?>selected<?php }?>>Hiatus</option>
                    <option value="4" <?php if ((isset($_smarty_tpl->tpl_vars['res']->value)) && $_smarty_tpl->tpl_vars['res']->value['status']['upload'] == 4) {?>selected<?php }?>>Completed</option>
                    <option value="5" <?php if ((isset($_smarty_tpl->tpl_vars['res']->value)) && $_smarty_tpl->tpl_vars['res']->value['status']['upload'] == 5) {?>selected<?php }?>>Cancelled</option>
                </select>
            </div>
            <div class="col-span-2">
                <input type="text" placeholder="Year of Release" name="release"
                    <?php if ((isset($_smarty_tpl->tpl_vars['res']->value))) {?>value="<?php echo $_smarty_tpl->tpl_vars['res']->value['years']['release'];?>
" <?php }?>
                    class="w-full text-sm text-gray-900 border border-gray-300 bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
            </div>
            <div class="col-span-2">
                <input type="number" placeholder="Year of Completion" name="completion"
                    <?php if ((isset($_smarty_tpl->tpl_vars['res']->value))) {?>value="<?php echo $_smarty_tpl->tpl_vars['res']->value['years']['completion'];?>
" <?php }?>
                    class="w-full text-sm text-gray-900 border border-gray-300 bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
            </div>
            <div class="col-span-10">
                <textarea name="summary"
                    class="textarea w-full h-[250px] text-sm text-gray-900 border border-gray-300 bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                    placeholder="Summary (Supports MarkDown)"><?php if ((isset($_smarty_tpl->tpl_vars['res']->value))) {
echo $_smarty_tpl->tpl_vars['res']->value['summary'];
}?></textarea>
            </div>
            <div class="col-span-10">
                <p class="text-xl mb-2">
                    Tags
                </p>

                <p id="loadingTagsText" class="text-blue-500 hover:underline dark:text-blue-600 cursor-pointer"
                    onclick="loadTags();"><i>If tags don't load, please click this text!</i></p>

                <p><b>Warnings</b></p>
                <div class="w-full grid grid-cols-5 gap-2 mb-2" id="warningsDiv">
                </div>

                <p><b>Formats</b></p>
                <div class="w-full grid grid-cols-5 gap-2 mb-2" id="formatDiv">
                </div>

                <p><b>Themes</b></p>
                <div class="w-full grid grid-cols-5 gap-2 mb-2" id="themeDiv">
                </div>

                <p><b>Genres</b></p>
                <div class="w-full grid grid-cols-5 gap-2" id="genreDiv">
                </div>

                <p><b>Demographic</b> (Only for Mangas)</p>
                <div class="w-full grid grid-cols-5 gap-2" id="demographicDiv">
                </div>
            </div>
        </div>
    </form>
</div>

<button
    class="text-white bg-blue-700 hover:bg-blue-800 font-medium p-1 dark:bg-blue-600 dark:hover:bg-blue-700 w-full mt-3"
    onclick="addTitle()">Add!</button>

<?php echo '<script'; ?>
>
    function loadTags() {
        $.ajax({
            <?php if ((isset($_smarty_tpl->tpl_vars['res']->value))) {?>
            url: "<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
api/tags/<?php echo $_smarty_tpl->tpl_vars['res']->value['id'];?>
",
            <?php } else { ?>
            url: "<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
api/tags",
            <?php }?>
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
                Object.keys(data).forEach(key => {
                    let key2 = key + "[]";
                    const itemsArray = data[key] || [];
                    console.log(key2);

                    // Create a container div for each array
                    if (document.getElementById(key + "Div")) {
                        $("#" + key + "Div").empty();
                        const containerDiv = document.getElementById(key + "Div");
                        if (containerDiv) {
                            // Create checkboxes for each item in the array
                            itemsArray.forEach(item => {
                                const div = document.createElement("div");
                                div.classList = "flex items-center";

                                const checkbox = document.createElement('input');
                                checkbox.classList =
                                    "text-blue-600 bg-gray-100 border-gray-300 dark:bg-gray-700 dark:border-gray-600";
                                checkbox.type = 'checkbox';
                                checkbox.name = key2;
                                checkbox.value = item.id;
                                if (item.checked) {
                                    checkbox.checked = true;
                                }

                                const label = document.createElement('label');
                                label.classList =
                                    "font-medium text-gray-900 dark:text-gray-300";
                                // label.htmlFor = item.id;

                                div.appendChild(label);
                                label.appendChild(checkbox);
                                label.appendChild(document.createTextNode(" " + item.name));
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

    loadTags();

    $(document).ready(function() {
        $("#cover").change(function(e) {
            e.preventDefault();

            var allowedTypes = ["image/jpeg", "image/jpg", "image/png", "image/webp"];
            var file = this.files[0];
            var fileType = file.type;

            if (!allowedTypes.includes(fileType)) {
                alert("Upload only supports JPG, JPEG, PNG, and WEBP!");
                $("#cover").val("");
                return false;
            }

            let fd = new FormData();
            var files = $("#cover")[0].files;

            if (files.length > 0) {
                fd.append("cover", files[0]);
                $.ajax({
                    type: "POST",
                    url: "<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
api/assets/temporary_image",
                    enctype: 'multipart/form-data',
                    data: fd,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        if (data.done) {
                            $("#coverPreview").removeClass("hidden");
                            $("#coverPreview").attr("src", "<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
" + data.public);
                            $("input[name='cover']").val(data.image);
                            // alert(data.image);
                        } else {
                            alert(data.msg);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error("AJAX Error:", status, error);
                    }
                });
            }
        });
    });

    function addTitle() {
        let formData = $("#titleForm").serialize();
        $.ajax({
            type: "POST",
            url: "<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
api/publisher/title/add_title",
            data: formData,
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
                    //TODO: Update Menubar and footerbar to match the new updated stuff and also move the form up/down on order change
                    // THIS is bad practice...
                    // setTimeout(() => {
                    //     document.location.reload();
                    // }, 500);
                    <?php if ((isset($_smarty_tpl->tpl_vars['res']->value))) {?>
                        document.location.href = "<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
project/<?php echo $_smarty_tpl->tpl_vars['res']->value['uid'];?>
/info";
                    <?php } else { ?>
                        document.location.href = data.url;
                    <?php }?>
                } else {
                    // If not successful, show the element with id "addAlert" and set its inner HTML to the response message
                    $targetEl.innerHTML = "<b>Error!</b> " + data.msg;
                    $targetEl.classList.remove("hidden");
                }
                document.getElementById("addAlert").scrollIntoView();
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
publisher/title/create"
                    class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Publisher</a>
            </div>
        </li>
        <li>
            <div class="flex items-center">
                <span class="text-gray-400 cursor-default">»</span>
                <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400"><?php echo ucfirst($_smarty_tpl->tpl_vars['action']->value);?>

                    Title</span>
            </div>
        </li>
    </ol>
</nav><?php }
}
