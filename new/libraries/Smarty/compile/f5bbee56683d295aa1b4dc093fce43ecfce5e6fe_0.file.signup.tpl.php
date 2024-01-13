<?php
/* Smarty version 4.3.0, created on 2023-12-07 01:50:16
  from 'C:\xamppx\htdocs\KEngine\system\themes\FoOlSlideX\pages\signup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_657116c8669cd1_53510413',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5bbee56683d295aa1b4dc093fce43ecfce5e6fe' => 
    array (
      0 => 'C:\\xamppx\\htdocs\\KEngine\\system\\themes\\FoOlSlideX\\pages\\signup.tpl',
      1 => 1700079658,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_657116c8669cd1_53510413 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="max-w-[300px] mx-auto px-2 xl:px-0">
    <h3 class="text-2xl text-center">Signup</h3>
    <div class="mt-4 space-y-2">
        <div id="alert" class="p-2 text-sm text-blue-800 hidden bg-blue-50 dark:bg-blue-200 dark:text-blue-800"
            role="alert">
            <span class="font-medium">Info alert!</span> Change a few things up and try submitting again.
        </div>
        <input type="text" id="username" required minlength="3" maxlength="20" placeholder="Username"
            class="block w-full text-sm text-gray-900 border border-gray-300 bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
        <input type="password" id="password" required minlength="8" maxlength="50" placeholder="Password"
            class="block w-full text-sm text-gray-900 border border-gray-300 bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
        <input type="password" id="password2" required minlength="8" maxlength="50" placeholder="Repeat Password"
            class="block w-full text-sm text-gray-900 border border-gray-300 bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
        <button type="button" id="signupForm"
            class="w-full py-2 text-sm text-center text-white bg-blue-700 hover:bg-blue-800 dark:bg-blue-600 dark:hover:bg-blue-700">Signup</button>
        <hr>
        <p>
            Already have an account?
            <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
login" class="text-blue-600 hover:underline">Login!</a>
        </p>
    </div>
</div>

<?php echo '<script'; ?>
>
    $("#signupForm").on("click", function(e) {
        // alert(encodeString($("#username").val(), "<?php echo $_smarty_tpl->tpl_vars['config']->value['salt'];?>
"));
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "api\\account\\action\\signup\\username\\" + encodeString($("#username").val(), "<?php echo $_smarty_tpl->tpl_vars['config']->value['salt'];?>
") + "\\password\\" + encodeString($("#password").val(), "<?php echo $_smarty_tpl->tpl_vars['config']->value['salt'];?>
") + "\\password2\\" + encodeString($("#password2").val(), "<?php echo $_smarty_tpl->tpl_vars['config']->value['salt'];?>
"),
            success: function(data) {
                const $targetEl = document.getElementById('alert');
                const options = {};
                const instanceOptions = {
                    id: 'alert',
                    override: true
                };
                const dismiss = new Dismiss($targetEl, null, options, instanceOptions);

                if (data.done && data.session) {
                    // alert("session: " + data.session);
                    // If success, display an alert
                    $targetEl.innerHTML = "<b>Success!</b> " + data.msg;
                    $targetEl.classList.remove("hidden");
                    setCookie("session", data.session);
                    document.getElementById('homeLink').click();
                } else {
                    $targetEl.innerHTML = "<b>Error!</b> " + data.msg;
                    $targetEl.classList.remove("hidden");
                    // If not successful, show the element with id "alert" and set its inner HTML to the response message
                    // $targetEl.innerHTML(data.msg).show();
                }
            }
        });
        return false;
    });

    function encodeString(input, salt) {
        let encodedString = "";
        const saltLength = salt.length;
        const inputLength = input.length;

        for (let i = 0; i < inputLength; i++) {
            const saltIndex = i % saltLength;
            const saltChar = salt.charCodeAt(saltIndex);
            const inputChar = input.charCodeAt(i);
            const encodedChar = saltChar + inputChar;

            encodedString += encodedChar.toString(36);
        }

        return encodedString;
    }
<?php echo '</script'; ?>
><?php }
}
