<?php
/* Smarty version 4.3.0, created on 2024-01-06 20:16:54
  from 'C:\xampp8\htdocs\KEngine\system\themes\Asuna\themes\2024\pages\project\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6599a726ad9930_08148385',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b43f03a8f6c63214c0834f169f62e5d45e280e71' => 
    array (
      0 => 'C:\\xampp8\\htdocs\\KEngine\\system\\themes\\Asuna\\themes\\2024\\pages\\project\\index.tpl',
      1 => 1704568449,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6599a726ad9930_08148385 (Smarty_Internal_Template $_smarty_tpl) {
?><img src="" id="banner" class="w-full h-full hidden mb-2">
<h1 class="text-xl"><a id="author" class="link text-primary"></a> / <span id="name" class="font-bold"></span></h1>
<div role="tablist" class="tabs tabs-bordered">
    <a role="tab" class="tab <?php if ($_smarty_tpl->tpl_vars['tab']->value == "about") {?>tab-active<?php }?>" href="/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
/p/<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">About</a>
    <a role="tab" class="tab <?php if ($_smarty_tpl->tpl_vars['tab']->value == "news") {?>tab-active<?php }?>" href="/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
/p/<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
/news">News</a>
    <a role="tab" class="tab <?php if ($_smarty_tpl->tpl_vars['tab']->value == "wiki") {?>tab-active<?php }?>" href="/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
/p/<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
/wiki">Wiki</a>
    <a role="tab" class="tab <?php if ($_smarty_tpl->tpl_vars['tab']->value == "versions") {?>tab-active<?php }?>" href="/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
/p/<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
/versions">Versions</a>
    <a role="tab" class="tab <?php if ($_smarty_tpl->tpl_vars['tab']->value == "changelogs") {?>tab-active<?php }?>" href="/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
/p/<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
/changelogs">Changelogs</a>
    <a role="tab" class="tab <?php if ($_smarty_tpl->tpl_vars['tab']->value == "discussions") {?>tab-active<?php }?>"
        href="/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
/p/<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
/discussions">Discussions</a>
</div>
<div class="mx-1 my-2">
    <?php if ($_smarty_tpl->tpl_vars['tab']->value == "about") {?>
        <div id="description" class="prose text-sm"></div>
    <?php } elseif ($_smarty_tpl->tpl_vars['tab']->value == "news") {?>
        <?php if ($_smarty_tpl->tpl_vars['logged']->value && ($_smarty_tpl->tpl_vars['user']->value['level'] <= 10 || $_smarty_tpl->tpl_vars['user']->value['username'] == $_smarty_tpl->tpl_vars['id']->value)) {?>
            <details class="mb-2">
                <summary class="cursor-pointer">Add news</summary>
                <div class="">
                    <form method="post" id="news-form">
                        <input type="text" name="project" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" class="hidden" readonly>
                        <label class="form-control w-full max-w-xs">
                            <div class="label p-0"><span class="label-text">Title</span></div>
                            <input type="text" placeholder="Type here"
                                class="input input-sm input-bordered w-full max-w-xs rounded-none" name="title" maxlength="32"
                                minlength="2">
                        </label>
                        <label class="form-control mt-1">
                            <div class="label p-0">
                                <span class="label-text">Content</span>
                            </div>
                            <textarea class="textarea textarea-sm textarea-bordered h-24 rounded-none"
                                placeholder="Supports MarkDown" name="content"></textarea>
                        </label>
                        <div class="form-control max-w-[20%]">
                            <label class="label cursor-pointer">
                                <span class="label-text">Pinned</span>
                                <input type="checkbox" class="checkbox checkbox-primary rounded-none" name="pinned" />
                            </label>
                        </div>
                        <button class="btn btn-primary btn-sm rounded-none mt-2">Attempt post</button>
                        <p class="text-red hidden mt-2 text-error" id="error"></p>
                    </form>
                </div>
            </details>
        <?php }?>
        <div id="news" class="space-y-2"></div>
    <?php }?>
    <p class="text-error hidden mt-2" id="error2"></p>
</div>

<?php echo '<script'; ?>
>
    function getProject() {
        <?php if ($_smarty_tpl->tpl_vars['tab']->value == "about") {?>
            const url = "<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
api/project/get?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"
        <?php } elseif ($_smarty_tpl->tpl_vars['tab']->value == "news") {?>
            const url = "<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
api/project/get?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
&news"
        <?php }?>
        $.ajax({
            url: url,
            method: 'GET',
            dataType: 'json',
            success: function(data) {
                // Work with the JSON data here
                console.log('Data from API:', data);
                if (!data.project) {
                    window.location.href = "/404";
                }
                const project = data.project

                if (project.banner) {
                    $("#banner").removeClass("hidden").src("/api/getBanner/" + project.banner)
                }

                $("#author").html(project.team)
                $("#name").html(project.name)

                if (project.team_id) {
                    $("#author").attr("href", "/team/" + project.team)
                } else {
                    $("#author").attr("href", "/profile/" + project.team)
                }

                <?php if ($_smarty_tpl->tpl_vars['tab']->value == "about") {?>
                    $("#description").html(project.markdown)
                <?php } elseif ($_smarty_tpl->tpl_vars['tab']->value == "news") {?>
                    if (Array.isArray(data.news)) {
                        if (data.news) {
                            $("#news").html("")
                            data.news.forEach(element => {
                                const div = document.createElement("div")
                                const title = document.createElement("p")
                                const titleDiv = document.createElement("div")
                                const titleText = document.createElement("span")
                                const content = document.createElement("div")
                                const timestamp = document.createElement("span")

                                div.className = "p-1 border border-2 border-black"

                                titleText.className = "font-bold mr-1"
                                titleText.innerHTML = element.title

                                timestamp.className = "tooltip cursor-pointer"
                                timestamp.innerHTML = " (" + element.readable + ")"
                                timestamp.setAttribute("data-tip", element.timeago)

                                if (element.pinned) {
                                    const pin = document.createElement("img")
                                    titleDiv.className = "flex"
                                    pin.src = "https://h33t.moe/assets/other/pin.png"
                                    pin.className = "mr-1 w-[16px] h-[16px]"
                                    pin.setAttribute("title", "Pinned")
                                    titleDiv.appendChild(pin)
                                }

                                content.className = "prose text-sm"
                                content.innerHTML = element.markdown

                                title.appendChild(titleText)
                                title.appendChild(timestamp)
                                titleDiv.appendChild(title)
                                div.appendChild(titleDiv)
                                div.appendChild(content)
                                $("#news").append(div)
                            });
                        }
                    }
                <?php }?>
            },
            error: function(xhr, status, error) {
                displayError(xhr, "error2")
            }
        });
    }

    getProject()

    <?php if ($_smarty_tpl->tpl_vars['tab']->value == "news") {?>
        <?php if ($_smarty_tpl->tpl_vars['logged']->value && ($_smarty_tpl->tpl_vars['user']->value['level'] <= 10 || $_smarty_tpl->tpl_vars['user']->value['username'] == $_smarty_tpl->tpl_vars['id']->value)) {?>
            $("#news-form").on("submit", function(e) {
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    contentType: "application/x-www-form-urlencoded",
                    url: "<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
api/project/addNews",
                    data: $("#news-form").serialize(),
                    success: function(data) {
                        $("#news-form")[0].reset()
                        getProject()
                    },
                    error: function(xhr, status, error) {
                        displayError(xhr, "error")
                    }
                });
            });
        <?php }?>
    <?php }
echo '</script'; ?>
><?php }
}
