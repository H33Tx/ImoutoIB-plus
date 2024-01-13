<?php
/* Smarty version 4.3.0, created on 2024-01-05 03:15:58
  from 'C:\xampp8\htdocs\KEngine\system\themes\Asuna\themes\2024\pages\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6597665e7ec008_32036535',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a41a7ffea68c4d18bc172ac7b37c1266105891b' => 
    array (
      0 => 'C:\\xampp8\\htdocs\\KEngine\\system\\themes\\Asuna\\themes\\2024\\pages\\login.tpl',
      1 => 1704420926,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6597665e7ec008_32036535 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="post" id="login-form">
    <label class="form-control w-full max-w-xs">
        <div class="label p-0"><span class="label-text">Username</span></div>
        <input type="text" placeholder="Type here" class="input input-sm input-bordered w-full max-w-xs rounded-none"
            name="username" maxlength="24" minlength="3">
    </label>
    <label class="form-control w-full max-w-xs mt-1">
        <div class="label p-0"><span class="label-text">Password</span></div>
        <input type="password" placeholder="Type here"
            class="input input-sm input-bordered w-full max-w-xs rounded-none" name="password" maxlength="64"
            minlength="8">
    </label>
    <button class="btn btn-primary btn-sm rounded-none mt-2">Attempt login</button>
    <p class="text-red hidden mt-2 text-error" id="error"></p>
</form>

<?php echo '<script'; ?>
>
    $("#login-form").on("submit", function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            contentType: "application/x-www-form-urlencoded",
            url: "<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
api/account/login",
            data: $("#login-form").serialize(),
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
