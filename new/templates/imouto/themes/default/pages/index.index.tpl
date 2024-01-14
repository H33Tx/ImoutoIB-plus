<div class="page-info">
    <h1>{$config.site_name}</h1>
    <span class="small">{$config.site_slogan}</span>
</div>
<br>

{* Here should be an announcement. Maybe the latest, maybe a custom? *}
<div class="main first">
    <h2>Live Demo</h2>
    <p>
        This software is probably riddled with bugs and exploits.<br>
        Please send me questions, feature requests, and bug reports on
        <a href="https://github.com/H33Tx/ImoutoIB-plus" target="_blank">Github</a>.<br><br>
        You should not use ImoutoIB-plus in any serious capacity.
    </p>
</div>
<br>

{* This is the "imouto"-$config["index_list"] *}
<div class="main">
    <h2>Boards</h2>
    <table id="boards">
        <thead>
            <tr>
                <th><small>Board</small></th>
                <th><small>Description</small></th>
                <th><small>Posts</small></th>
            </tr>
        </thead>
        <tbody>
            <tr class="cat" id="Testing Boards">
                <th><span class="small"></span></th>
                <th>
                    <h2>Testing Boards</h2>
                </th>
                <th><span class="small"></span></th>
            </tr>
            <tr>
                <th><a href="/ImoutoIB/?board=img">/img/ - imageboard</a></th>
                <th>You can test the imageboard functions here.</th>
                <th>5</th>
            </tr>
            <tr>
                <th><a href="/ImoutoIB/?board=txt">/txt/ - textboard</a></th>
                <th>You can test the textboard functions here.</th>
                <th>2</th>
            </tr>
        </tbody>
    </table>
    <br>
</div>
<br>

<div class="main">
    <h2>Stats</h2>
    <div class="stats">
        <div><b>Total Posts:</b> 7</div>
        <div><b>Unique Posters:</b> 1</div>
        <div><b>Active Content:</b> 2 MB</div>
    </div>
</div>