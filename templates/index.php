<?php
require_once __DIR__ . '/../templates/_header.php';

$submit = isset($_REQUEST['submit']) ? $_REQUEST['submit'] : '';

if ($submit != ''){
    $club = $_REQUEST['club'];
    $age = $_REQUEST['age'];
    $selected = $club.$age;
    $error = '';

    $query = "SELECT * FROM teams WHERE team = '$club' " . "AND age = '$age'";
    $result = mysqli_query($db_link, $query);
    $count = mysqli_num_rows($result);

    if ($count == 1){
        echo "<p>You have chosen " . ucfirst($club) . " " . $age . "s.<br></p>";
        echo "<a href='index.php?action=$selected'>Continue to this page.</a><br>";
        echo "<a href='index.php'>Or return to Home page.</a>";
    }
    else{
        echo $error .= "<span class='error'>Your page could not be found.</span><br>";
        echo "Please <a href='$self'>Try again</a>";
        exit();
    }
}
else {
    ?>

    <div id="column_container">
        <section class="left">
            <form method="post">
                <table border="0" cellpadding="3" cellspacing="1">
                    <tr>
                        <td>
                            <select name="club">
                                <option value="no team selected">Please choose a team</option>
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
                                <option value="no age selected">Please choose an age</option>
                                <option value="u13">Under 13s</option>
                                <option value="u14">Under 14s</option>
                            </select>
                        </td>
                        <td>
                            <input type="submit" name="submit" value="Go to selected team page">
                        </td>
                    </tr>
                </table>
            </form>

            <img src="/../public/images/strike.jpg" alt="Strike">
        </section>

        <section class="right">
            <textarea name="news" rows="20" cols="50"> News Feed </textarea>
        </section>
    </div>

    <?php
}

require_once __DIR__ . '/../templates/_footer.php';