<?php
/* Smarty version 4.3.0, created on 2023-11-30 22:53:52
  from 'C:\xamppx\htdocs\KEngine\system\themes\Waters\pages\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_65690470a40165_00917715',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1259c7ec55b1a6e48a2b23912ff5f9b4d031f037' => 
    array (
      0 => 'C:\\xamppx\\htdocs\\KEngine\\system\\themes\\Waters\\pages\\login.tpl',
      1 => 1701381200,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65690470a40165_00917715 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
    .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        border: 1px solid #e5e5e5;
    }

    .form-signin .form-signin-heading,
    .form-signin .checkbox {
        margin-bottom: 10px;
    }

    .form-signin input[type="text"],
    .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
        width: 100%;
    }
</style>

<form class="form-signin" id="loginForm">
    <h1 class="form-signin-heading" style="margin-bottom: 15px;">Please sign in</h1>
    <button type="button" class="btn btn-primary btn-lg btn-block" id="login-button">With AsunaAuth</button>
</form>



<?php echo '<script'; ?>
>
    <?php if ((isset($_GET['sc'])) && $_GET['sc']) {?>
        location.reload();
        window.close();
    <?php } else { ?>
        document.getElementById("login-button").onclick = () => {
            const win = window.open(
                'https://auth.asuna.cloud/?for=h33tint&to=<?php echo $_smarty_tpl->tpl_vars['loginTo']->value;?>
',
                'Authorize Holics');
            const timer = setInterval(() => {
                if (win.closed) {
                    clearInterval(timer);
                    // alert('"Authorize Holics" window closed!');
                    location.reload();
                }
            }, 500);
        }
    <?php }
echo '</script'; ?>
><?php }
}
