<?php
require_once __DIR__ . '/../templates/_header.php';
?>

<div id="column_container">
    <section class="left">
        <h1>About this website</h1>
        <p>This website</p>
        <p><a href="index.php?action=admin">Continue to Admin section.</a></p>
        <p><a href="index.php?action=league">League Table</a></p>
    </section>

    <section class="right">
        <textarea name="news" rows="20" cols="50"> News Feed </textarea>
    </section>
</div>

<?php
require_once __DIR__ . '/../templates/_footer.php';