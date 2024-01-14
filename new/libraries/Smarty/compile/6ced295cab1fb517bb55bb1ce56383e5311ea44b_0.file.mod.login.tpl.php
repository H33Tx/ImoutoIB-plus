<?php
/* Smarty version 4.3.0, created on 2024-01-14 17:58:58
  from 'C:\xampp8\htdocs\ImoutoIB-plus\new\templates\imouto\themes\default\pages\mod.login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_65a412d22af858_27349964',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ced295cab1fb517bb55bb1ce56383e5311ea44b' => 
    array (
      0 => 'C:\\xampp8\\htdocs\\ImoutoIB-plus\\new\\templates\\imouto\\themes\\default\\pages\\mod.login.tpl',
      1 => 1705251537,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65a412d22af858_27349964 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="page-info">
    <h1>Login Page</h1>
    <div class="small">Permission required.</div>
</div>
<br><br>
<div class="main first">
    <h2>Login.</h2>
    <div id="post-form">
        <form name="login" action="mod.php" method="post">
            <table id="login" style="margin:auto;">
                <tr>
                    <th>Username</th>
                    <td>
                        <input type="text" name="username" size="25" maxlength="256" autocomplete="off"
                            placeholder="Username">
                    </td>
                </tr>
                <tr>
                    <th>Password</th>
                    <td>
                        <input type="password" name="password" size="25" maxlength="256" autocomplete="off"
                            placeholder="Password">
                    </td>
                </tr>
                <tr>
                    <th>Verification</th>
                    <td>
                        <span class="js-captcha" id="load-captcha" style="max-width:200px">
                            <span class="js-captcha">
                                <img title="Click Here To Refresh" height="50" width="198" id="captcha"><br>
                            </span>
                        </span>
                        <input id="captcha-field" type="text" name="captcha" minlength="6" maxlength="6"
                            autocomplete="off" required>
                        </span>
                    </td>
                </tr>
                <tr>
                    <th style="visibility:hidden;"></th>
                    <td>
                        <input type="checkbox" id="remember" name="remember" checked>
                        <label for="remember">Remember Me</label>
                        <input type="submit" name="post" value="Login" style="float: right;">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
<div class="message"></div>

<?php echo '<script'; ?>
>
    create_captcha();
<?php echo '</script'; ?>
><?php }
}
