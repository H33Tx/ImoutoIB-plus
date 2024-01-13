<?php
/* Smarty version 4.3.0, created on 2024-01-05 18:35:13
  from 'C:\xampp8\htdocs\KEngine\system\themes\Asuna\themes\2024\pages\projects\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_65983dd1504953_88575401',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03ad3fe27c2bbff37af659b97a438a8b768dfc60' => 
    array (
      0 => 'C:\\xampp8\\htdocs\\KEngine\\system\\themes\\Asuna\\themes\\2024\\pages\\projects\\index.tpl',
      1 => 1704476085,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65983dd1504953_88575401 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['logged']->value) {?>
    <div role="alert" class="alert p-1 rounded-none mb-2">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="stroke-current shrink-0 w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
        </svg>
        <span>Want to add your own project? <a href="/project/new" class="text-primary link">Click here!</a></span>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['user']->value['level'] <= 10) {?>
        <?php if (!empty($_smarty_tpl->tpl_vars['queue']->value)) {?>
            <div role="alert" class="alert p-1 rounded-none mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="stroke-current shrink-0 w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                                <span>There are <?php echo count($_smarty_tpl->tpl_vars['queue']->value);?>
 projects waiting for approval. <a href="/projects/queue"
                        class="text-primary link">View!</a></span>
            </div>
        <?php }?>
    <?php }
}?>

<h2 class="text-xl font-bold">Projects - Page <?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>
</h2>

<div id="projectsDiv" class="mt-1 space-y-1"></div>

<div id="paginationDiv" class="mt-1"></div>

<?php echo '<script'; ?>
>
    function getProjects() {
        $.ajax({
            url: "<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
api/projects/<?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>
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

                // Create a container div for each array
                $("#projectsDiv").empty();
                const containerDiv = document.getElementById("projectsDiv");
                if (containerDiv) {
                    // Create checkboxes for each item in the array
                    if (Array.isArray(data.projects) && data.projects[0]) {
                        data.projects.forEach(item => {
                            const card = createDynamicProject(item);
                            containerDiv.appendChild(card);
                        });
                    } else {
                        const text = document.createElement("p");
                        text.innerHTML = "No projects found."
                        containerDiv.appendChild(text);
                    }
                }

                $("#paginationDiv").empty();
                const paginationDiv = document.getElementById("paginationDiv");
                if (paginationDiv) {
                    for (let p = 1; p <= data.totalpages; p++) {
                        // console.log("Pagination: " + p);
                        const pagination = createPaginationElement(p, <?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>
);
                        paginationDiv.appendChild(pagination);
                    }
                }

                $("#loadingTagsText").addClass("hidden");
            },
            error: function(xhr, status, error) {
                console.error('There was a problem fetching data:', error);
            }
        });
    }

    getProjects();

    function createPaginationElement(p, a) {
        const pagiDiv = document.createElement("div")
        pagiDiv.className = "join p-0"
        const pagiLink = document.createElement("a")

        if (p == a) {
            pagiLink.className = "join-item btn btn-active btn-sm py-0 px-2 rounded-none";
        } else {
            pagiLink.className = "join-item btn btn-sm py-0 px-2 rounded-none";
            pagiLink.href = "<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
projects/" + p;
        }

        pagiLink.textContent = p

        pagiDiv.appendChild(pagiLink)
        return pagiDiv
    }

    function createDynamicProject(item) {
        const div = document.createElement("div")
        div.className = "border border-black hover:bg-base-200 p-1"

        if (item.banner) {
            const banner = document.createElement("img")
            banner.src = item.banner
            banner.className = "w-full h-full"
            div.appendChild(banner)
        }

        const p = document.createElement("p")

        const t = document.createElement("a")
        t.innerHTML = item.team
        t.href = "/team/" + item.team
        t.className = "link text-primary"
        p.appendChild(t)

        const d = document.createElement("span")
        d.innerHTML = " / "
        p.appendChild(d)

        const a = document.createElement("a")
        a.innerHTML = "<b>" + item.name + "</b>"
        a.href = "/" + item.team + "/p/" + item.url_name
        a.className = "link text-primary"
        p.appendChild(a)

        div.appendChild(p)
        return div
    }
<?php echo '</script'; ?>
><?php }
}
