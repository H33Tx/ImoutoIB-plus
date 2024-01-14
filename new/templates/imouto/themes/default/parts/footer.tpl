<div class="abovefooter">
    <div class="float-right">
        <select id="themes">
            {foreach from=(explode(",", $config.styles_all)) item=item key=key name=name}
                <option value="{trim($item)}">{trim($item)}</option>
            {/foreach}
        </select>
    </div>
</div>

<div class="footer">
    <p>
        <a style="text-decoration:underline" href="https://github.com/H33Tx/ImoutoIB-plus" target="_blank">
            ImoutoIB-plus
        </a>
    </p>
    <p>{$version}</p>
    <p class="small">Page generated in {$generation_time} seconds.</p>
    <br>
    <a name="bottom" id="bottom"></a>
</div>
<script>
    setTimeout(() => {
        location.reload();
    }, 2000);
</script>
</body>

</html>