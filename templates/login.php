<?php
require_once __DIR__ . '/../templates/_header.php';

$submit = isset($_REQUEST['submit']) ? $_REQUEST['submit'] : ''; //checking if the submit button was pressed

if ($submit != ''){
    $username = trim(isset($_REQUEST['username'])) ? $_REQUEST['username'] : ''; //creating the variables with the values entered
    $password = trim(isset($_REQUEST['password'])) ? $_REQUEST['password'] : '';
    $hash = md5($password); //hashing the password for better security
    $error = '';

    if ($username = ''){
        echo $error .= "<span class='error'>You must enter your USERNAME!</span><br/>"; //displaying the error message
        echo "Please <a href='$self'>resubmit</a>"; //creating a link back to the form
        exit();
    }
    elseif ($password = ''){
        echo $error .= "<span class='error'>You must enter your PASSWORD!</span><br/>";
        echo "Please <a href='$self'>resubmit</a>";
        exit();
    }
    //elseif (!password_verify($password, $hash)){ //checking if the password entered matches the hashed password in the database
        //echo $error .= "<span class='error'>Invalid Password!</span><br/>";
        //echo "Please <a href='$self'>resubmit</a>";
        //exit();
    //}
    else{
        $query = "SELECT * FROM admin WHERE username = '$username'" . "AND password = '$hash'"; //creating the query to select the user from the database
        $result = mysqli_query($db_link, $query);
        $count = mysqli_num_rows($result);

        if ($count == 1){ //checking if one row has been selected
            echo "Thank you ".$username.". You are now logged in.<br/>";
            echo "<a href='index.php?action=admin'>Continue to Admin section.</a>";
        }
        else{
            echo $error .= "<span class='error'>Your details could not be found! Please try again.</span><br/>";
            echo "Please <a href='$self'>resubmit</a>";
            exit();
        }
    }
}
else {
    ?>

    <fieldset>
        <legend><strong>Admin Login</strong></legend>
        <form action="" method="post" autocomplete="off">
            <table border="0" cellpadding="3" cellspacing="1">
                <tr>
                    <td><label for="username">Username:</label></td>
                    <td><input type="text" name="username" size="30" required placeholder="Enter your username"></td>
                </tr>
                <tr>
                    <td><label for="password">Password:</label></td>
                    <td><input type="password" name="password" size="30" required placeholder="Enter your password"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="LOGIN"></td>
                </tr>
            </table>
        </form>
    </fieldset>

    <?php
}

require_once __DIR__ . '/../templates/_footer.php';