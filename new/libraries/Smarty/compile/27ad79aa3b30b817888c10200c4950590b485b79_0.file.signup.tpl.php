<?php
/* Smarty version 4.3.0, created on 2024-01-05 04:21:01
  from 'C:\xampp8\htdocs\KEngine\system\themes\Asuna\themes\2024\pages\signup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6597759d02c982_28499168',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27ad79aa3b30b817888c10200c4950590b485b79' => 
    array (
      0 => 'C:\\xampp8\\htdocs\\KEngine\\system\\themes\\Asuna\\themes\\2024\\pages\\signup.tpl',
      1 => 1704420896,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6597759d02c982_28499168 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="post" id="signup-form">
    <label class="form-control w-full max-w-xs">
        <div class="label p-0"><span class="label-text">Desired Username</span></div>
        <input type="text" placeholder="Type here" class="input input-sm input-bordered w-full max-w-xs rounded-none"
            name="username" minlength="3" maxlength="24">
    </label>
    <p>Don't worry. You'll be able to set your display after this.</p>
    <label class="form-control w-full max-w-xs mt-1">
        <div class="label p-0"><span class="label-text">Desired Password</span></div>
        <input type="password" placeholder="Type here"
            class="input input-sm input-bordered w-full max-w-xs rounded-none" name="password" minlength="8"
            maxlength="64">
    </label>
    <label class="form-control w-full max-w-xs mt-1">
        <div class="label p-0"><span class="label-text">Repeat desired Password</span></div>
        <input type="password" placeholder="Type here"
            class="input input-sm input-bordered w-full max-w-xs rounded-none" name="password2" minlength="8"
            maxlength="64">
    </label>
    <button class="btn btn-primary btn-sm rounded-none mt-2">Attempt signup</button>
    <p class="text-red hidden mt-2 text-error" id="error"></p>
</form>

<?php echo '<script'; ?>
>
    $("#signup-form").on("submit", function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            contentType: "application/x-www-form-urlencoded",
            url: "<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
api/account/signup",
            data: $("#signup-form").serialize(),
            success: function(data) {
                Cookies.set("session", data.token, { expires: 30 })
                window.location.href = "<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
profile/" + data.user
            },
            error: function(xhr, status, error) {
                displayError(xhr, "error")
            }
        });
    });
<?php echo '</script'; ?>
><?php }
}
