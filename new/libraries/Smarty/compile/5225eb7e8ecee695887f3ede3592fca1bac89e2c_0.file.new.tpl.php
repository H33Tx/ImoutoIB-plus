<?php
/* Smarty version 4.3.0, created on 2024-01-06 00:47:52
  from 'C:\xampp8\htdocs\KEngine\system\themes\Asuna\themes\2024\pages\project\new.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6598952862d935_97356552',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5225eb7e8ecee695887f3ede3592fca1bac89e2c' => 
    array (
      0 => 'C:\\xampp8\\htdocs\\KEngine\\system\\themes\\Asuna\\themes\\2024\\pages\\project\\new.tpl',
      1 => 1704497884,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6598952862d935_97356552 (Smarty_Internal_Template $_smarty_tpl) {
?><h2 class="text-xl font-bold">Create Project</h2>

<form method="post" id="project-form">
    <label class="form-control w-full max-w-xs mt-1">
        <div class="label p-0">
            <span class="label-text">Team*</span>
        </div>
        <select class="select select-sm select-bordered py-0 rounded-none" name="team">
            <option value="0" selected>None</option>
            <?php if (!empty($_smarty_tpl->tpl_vars['teams']->value)) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['teams']->value, 'team', false, 'key', 'name', array (
));
$_smarty_tpl->tpl_vars['team']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['team']->value) {
$_smarty_tpl->tpl_vars['team']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['team']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['team']->value['name'];?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
        </select>
    </label>
    <label class="form-control w-full max-w-xs mt-1">
        <div class="label p-0"><span class="label-text">Name*</span></div>
        <input type="text" placeholder="Type here" class="input input-sm input-bordered w-full max-w-xs rounded-none"
            name="name">
    </label>
    <label class="form-control w-full max-w-xs mt-1">
        <div class="label p-0">
            <span class="label-text">Status*</span>
        </div>
        <select class="select select-sm select-bordered py-0 rounded-none" name="status">
            <option value="1" selected>Planned</option>
            <option value="2">Under development</option>
                    </select>
    </label>
    <label class="form-control w-full max-w-xs mt-1">
        <div class="label p-0"><span class="label-text">Link to GitHub</span></div>
        <input type="text" placeholder="Type here" class="input input-sm input-bordered w-full max-w-xs rounded-none"
            name="github">
    </label>
    <label class="form-control mt-1">
        <div class="label p-0">
            <span class="label-text">Description</span>
        </div>
        <textarea class="textarea textarea-sm textarea-bordered h-24 rounded-none" placeholder="Supports MarkDown"
            name="description"></textarea>
    </label>
    <p>Required fields are marked with a *</p>
    <button class="btn btn-primary btn-sm rounded-none mt-2">Attempt creating Project</button>
    <p class="text-red hidden mt-2 text-error" id="error"></p>
</form>

<?php echo '<script'; ?>
>
    $("#project-form").on("submit", function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            contentType: "application/x-www-form-urlencoded",
            url: "<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
api/project/create",
            data: $("#project-form").serialize(),
            success: function(data) {
                window.location.href = "<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
" + data.user + "/p/" + data.project
            },
            error: function(xhr, status, error) {
                displayError(xhr, "error")
            }
        });
    });
<?php echo '</script'; ?>
><?php }
}
