<br>
<hr class="footer static">
<div class="static footer">
    <ul>
        {foreach from=$footer_items item=item key=key name=name}
            <li><a href="{$item.url}">{$item.name}</a></li>
        {/foreach}
    </ul>
</div>