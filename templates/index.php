<?php
require_once __DIR__ . '/../templates/_header.php';
?>

<div id="column_container">
    <section class="left">
        <form action="" method="post">
            <table border="0" cellpadding="3" cellspacing="1">
                <tr>
                    <td>
                        <select name="club">
                            <option value="castleknock">Castleknock</option>
                            <option value="corduff">Corduff</option>
                            <option value="hartstown">Hartstown</option>
                            <option value="mochtas">Mochtas</option>
                            <option value="mountview">Mountview</option>
                            <option value="verona">Verona</option>
                        </select>
                    </td>
                    <td>
                        <select name="age">
                            <option name="u13">Under 13s</option>
                            <option name="u14">Under 14s</option>
                        </select>
                    </td>
                    <td>
                        <input type="submit" name="submit" value="Go to selected team page">
                    </td>

        <img src="/../public/images/strike.jpg" alt="Strike">
    </section>

    <section class="right">
        <textarea name="news" rows="20" cols="50"> News Feed </textarea>
    </section>
</div>


<?php
require_once __DIR__ . '/../templates/_footer.php';