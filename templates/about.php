<?php
require_once __DIR__ . '/../templates/_header.php';
?>

<div id="column_container">
    <section class="left">
        <h1>About this website</h1><br>
        <p>This website</p>
        <a href="index.php?action=admin">Continue to Admin section.</a><br/>
        <a href="index.php?action=league">League Table</a>
    </section>

    <section class="right">
        <textarea name="news" rows="20" cols="50"> News Feed </textarea>
    </section>
</div>

<?php
require_once __DIR__ . '/../templates/_footer.php';