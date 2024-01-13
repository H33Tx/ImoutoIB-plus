<?php
/* Smarty version 4.3.0, created on 2024-01-05 17:16:49
  from 'C:\xampp8\htdocs\KEngine\system\themes\Asuna\themes\2024\pages\projects\queue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_65982b7179e344_86653420',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd55acffe3e30f06935cb30d83f2ce6af111e1d30' => 
    array (
      0 => 'C:\\xampp8\\htdocs\\KEngine\\system\\themes\\Asuna\\themes\\2024\\pages\\projects\\queue.tpl',
      1 => 1704471407,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65982b7179e344_86653420 (Smarty_Internal_Template $_smarty_tpl) {
?><h2 class="text-xl font-bold">Approval Queue - Page <?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>
</h2>

<div id="projectsDiv" class="mt-1 space-y-1"></div>

<div id="paginationDiv" class="mt-1"></div>

<?php echo '<script'; ?>
>
    function getProjects() {
        $.ajax({
            url: "<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
api/mod_actions/getApprovalQueue/<?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>
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
                    if (Array.isArray(data.projects)) {
                        data.projects.forEach(item => {
                            const project = createDynamicProject(item);
                            containerDiv.appendChild(project);
                        });
                    } else {
                        const text = document.createElement("p");
                        text.innerHTML = "No unapproved projects found."
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
                console.error('There was a problem fetching data:', xhr.responseText);
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
        const details = document.createElement("details")
        const summary = document.createElement("summary")
        const content = document.createElement("div")

        details.id = item.id
        summary.innerHTML = item.name
        summary.className = "link text-primary"
        content.className = "ml-4"

        const p = document.createElement("p")
        const projectLink = document.createElement("a")
        const divider = document.createElement("span")
        const userLink = document.createElement("a")

        divider.innerHTML = " - "
        projectLink.className = "link text-primary"
        projectLink.innerHTML = "View Project in new Tab"
        projectLink.href = "<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
" + item.team + "/p/" + item.url_name
        projectLink.setAttribute("target", "_blank")
        userLink.className = "link text-primary"
        if (item.teamId) {
            userLink.innerHTML = "View team in new Tab"
            userLink.href = "<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
team/" + item.team
        } else {
            userLink.innerHTML = "View user in new Tab"
            userLink.href = "<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
profile/" + item.team
        }
        userLink.setAttribute("target", "_blank")

        const aDetails = document.createElement("details")
        const aSummary = document.createElement("summary")
        const aContent = document.createElement("div")

        aSummary.innerHTML = "Actions"
        aSummary.className = "hover:cursor-pointer"
        aContent.className = "ml-4 space-x-2"

        const approveButton = document.createElement("button")
        const rejectButton = document.createElement("button")

        approveButton.className = "btn btn-primary btn-xs rounded-none"
        approveButton.innerHTML = "Approve"
        approveButton.setAttribute("onclick", "approveProject(" + item.id + ")")

        rejectButton.className = "btn btn-error btn-xs rounded-none"
        rejectButton.innerHTML = "Reject"
        rejectButton.setAttribute("onclick", "rejectProject(" + item.id + ")")


        aContent.appendChild(approveButton)
        aContent.appendChild(rejectButton)
        aDetails.appendChild(aSummary)
        aDetails.appendChild(aContent)
        p.appendChild(projectLink)
        p.appendChild(divider)
        p.appendChild(userLink)
        content.appendChild(p)
        content.appendChild(aDetails)
        details.appendChild(summary)
        details.appendChild(content)
        return details;
    }

    function approveProject(id) {
        $.ajax({
            url: "<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
api/mod_actions/approveProject/" + id,
            method: 'GET',
            dataType: 'json',
            success: function(data) {
                $("#" + id).remove()
                getProjects()
            },
            error: function(xhr, status, error) {
                alert('There was a problem fetching data:', xhr.responseText);
                console.error('There was a problem fetching data:', xhr.responseText);
            }
        });
    }

    function rejectProject(id) {
        $("#" + id).remove()
        getProjects()
    }
<?php echo '</script'; ?>
><?php }
}
