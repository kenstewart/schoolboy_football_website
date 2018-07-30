<?php
require_once __DIR__ . '/../templates/_header.php';

$submit = isset($_REQUEST['submit']) ? $_REQUEST['submit'] : ''; //checking if the submit button was pressed

if ($submit != ''){
    $home_team_score = trim(isset($_REQUEST['home_team_score'])) ? $_REQUEST['home_team_score'] : ''; //creating the variables with the values entered
    $away_team_score = trim(isset($_REQUEST['away_team_score'])) ? $_REQUEST['away_team_score'] : '';
    $fixture = isset($_REQUEST['fixture']);
    $error = '';

    if ($fixture = ''){
        echo $error .= "<span class = 'error'>You must choose a fixture!</span><br>"; //display the error message if no fixture was chosen
        echo "Please <a href='index.php?action=scoresu13'>try again.</a>"; //creating a link back to the form
        exit();
    }
    else{
        $query = "";
        $result = "";
        $count = "";

        if ($count == 1){
            echo "Update successful.<br>";
            echo "Return to <a href='index.php?action=scoresu13'>fixtures page.</a>";
        }
        else{
            echo $error .= "<span class='error'>Your details could not be found! Please try again.</span><br/>";
            echo "Please <a href='index.php?action=scoresu13'>try again.</a>";
            exit();
        }
    }
}
?>

<h2>Choose which fixture to update and enter the score.</h2>
<form method="post">
    <table id="scores">
        <tr align="center">
            <td>
                <label for="home_team_score">Home Team Score</label>
                <input type="text" name="home_team_score" size="2" value="0">
            </td>
            <td>
                <label for="away_team_score">Away Team Score</label>
                <input type="text" name="away_team_score" size="2" value="0">
            </td>
            <td><input type="submit" name="submit" value="Enter Scores"></td>
        </tr>
        <tr>
            <td><fieldset id="scores">
                    <legend><strong>01/09/2018</strong></legend>
                        <table border="0" cellpadding="3" cellspacing="1">
                            <tr>
                                <td><input type="radio" name="fixture" value="1">    Castleknock -vs- Corduff</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="fixture" value="2">    Hartstown -vs- Mochtas</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="fixture" value="3">    Mountview -vs- Verona</td>
                            </tr>
                        </table>
                </fieldset></td>
            <td><fieldset id="scores">
                    <legend><strong>08/09/2018</strong></legend>
                        <table border="0" cellpadding="3" cellspacing="1">
                            <tr>
                                <td><input type="radio" name="fixture" value="4">    Corduff -vs- Mountview</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="fixture" value="5">    Hartstown -vs- Castleknock</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="fixture" value="6">    Mochtas -vs- Verona</td>
                            </tr>
                        </table>
                </fieldset></td>
        </tr>
        <tr>
            <td><fieldset id="scores">
                    <legend><strong>15/09/2018</strong></legend>
                        <table border="0" cellpadding="3" cellspacing="1">
                            <tr>
                                <td><input type="radio" name="fixture" value="7">    Castleknock -vs- Mochtas</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="fixture" value="8">    Hartstown -vs- Mountview</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="fixture" value="9">    Verona -vs- Corduff</td>
                            </tr>
                        </table>
                </fieldset></td>
            <td><fieldset id="scores">
                    <legend><strong>22/09/2018</strong></legend>
                        <table border="0" cellpadding="3" cellspacing="1">
                            <tr>
                                <td><input type="radio" name="fixture" value="10">    Corduff -vs- Mochtas</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="fixture" value="11">    Mountview -vs- Castleknock</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="fixture" value="12">    Verona -vs- Hartstown</td>
                            </tr>
                        </table>
                </fieldset></td>
        </tr>
        <tr>
            <td><fieldset id="scores">
                    <legend><strong>29/09/2018</strong></legend>
                        <table border="0" cellpadding="3" cellspacing="1">
                            <tr>
                                <td><input type="radio" name="fixture" value="13">    Castleknock -vs- Verona</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="fixture" value="14">    Hartstown -vs- Corduff</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="fixture" value="15">    Mochtas -vs- Mountview</td>
                            </tr>
                        </table>
                </fieldset></td>
            <td><fieldset id="scores">
                    <legend><strong>06/10/2018</strong></legend>
                        <table border="0" cellpadding="3" cellspacing="1">
                            <tr>
                                <td><input type="radio" name="fixture" value="16">    Corduff -vs- Castleknock</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="fixture" value="17">    Mochtas -vs- Hartstown</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="fixture" value="18">    Verona -vs- Mountview</td>
                            </tr>
                        </table>
                </fieldset></td>
        </tr>
        <tr>
            <td><fieldset id="scores">
                    <legend><strong>13/10/2018</strong></legend>
                        <table border="0" cellpadding="3" cellspacing="1">
                            <tr>
                                <td><input type="radio" name="fixture" value="19">    Castleknock -vs- Hartstown</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="fixture" value="20">    Mountview -vs- Corduff</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="fixture" value="21">    Verona -vs- Mochtas</td>
                            </tr>
                        </table>
                </fieldset></td>
            <td><fieldset id="scores">
                    <legend><strong>20/10/2018</strong></legend>
                        <table border="0" cellpadding="3" cellspacing="1">
                            <tr>
                                <td><input type="radio" name="fixture" value="22">    Corduff -vs Verona</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="fixture" value="23">    Mochtas -vs- Castleknock</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="fixture" value="24">    Mountview -vs- Hartstown</td>
                            </tr>
                        </table>
                </fieldset></td>
        </tr>
        <tr>
            <td><fieldset id="scores">
                    <legend><strong>27/10/2018</strong></legend>
                        <table border="0" cellpadding="3" cellspacing="1">
                            <tr>
                                <td><input type="radio" name="fixture" value="25">    Castleknock -vs- Mountview</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="fixture" value="26">    Hartstown -vs- Verona</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="fixture" value="27">    Mochtas -vs- Corduff</td>
                            </tr>
                        </table>
                </fieldset></td>
            <td><fieldset id="scores">
                    <legend><strong>03/11/2018</strong></legend>
                        <table border="0" cellpadding="3" cellspacing="1">
                            <tr>
                                <td><input type="radio" name="fixture" value="28">    Corduff -vs- Hartstown</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="fixture" value="29">    Mountview -vs- Mochtas</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="fixture" value="30">    Verona -vs- Castleknock</td>
                            </tr>
                        </table>
                </fieldset></td>
        </tr>
    </table>
</form>
<a href="index.php?action=admin">Return to Admin page</a>

<?php
require_once __DIR__ . '/../templates/_footer.php';