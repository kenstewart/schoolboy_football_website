<?php
require_once __DIR__ . '/../templates/_header.php';
?>

<div id="column_container">
    <section class="left">
        <h1>About this website</h1>
        <p>
            This is a website for the local district football league where users can check results and league tables.
            You can also check on upcoming fixtures with all the relevant information given including kick-off times.
        </p>
    </section>

    <section class="right">
        <?php
        require_once __DIR__ . '/../templates/_news.php';
        ?>
    </section>
</div>

<?php
require_once __DIR__ . '/../templates/_footer.php';