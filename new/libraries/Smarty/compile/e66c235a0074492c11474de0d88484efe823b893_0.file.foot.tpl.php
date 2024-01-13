<?php
/* Smarty version 4.3.0, created on 2023-12-15 03:12:24
  from 'C:\xamppx\htdocs\KEngine\system\themes\FoOlSlideX\themes\fsx\parts\foot.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_657bb608bd2288_68299133',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e66c235a0074492c11474de0d88484efe823b893' => 
    array (
      0 => 'C:\\xamppx\\htdocs\\KEngine\\system\\themes\\FoOlSlideX\\themes\\fsx\\parts\\foot.tpl',
      1 => 1702606318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_657bb608bd2288_68299133 (Smarty_Internal_Template $_smarty_tpl) {
?></div>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
node_modules/flowbite/dist/flowbite.min.js" data-instant-track><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
js/js.cookie.js" data-instant-track><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
instantclick?<?php echo filemtime('js/instantclick.js')+filemtime('js/loading-indicator.js');?>
"
    data-instant-track>
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    InstantClick.init('mouseover');

    var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
    var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

    // Change the icons inside the button based on previous settings
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
            '(prefers-color-scheme: dark)').matches)) {
        themeToggleLightIcon.classList.remove('hidden');
    } else {
        themeToggleDarkIcon.classList.remove('hidden');
    }

    var themeToggleBtn = document.getElementById('theme-toggle');

    themeToggleBtn.addEventListener('click', function() {
        // toggle icons inside button
        themeToggleDarkIcon.classList.toggle('hidden');
        themeToggleLightIcon.classList.toggle('hidden');

        // if set via local storage previously
        if (localStorage.getItem('color-theme')) {
            if (localStorage.getItem('color-theme') === 'light') {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
                console.warn("dark");
            } else {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
                console.warn("light");
            }

            // if NOT set via local storage previously
        } else {
            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            } else {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            }
        }
    });

    function setCookie(name, value) {
        Cookies.set(name, value, { expires: 999 })
    }

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
>

</body>

</html><?php }
}
