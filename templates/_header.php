<?php
require_once __DIR__ . '/../templates/db_connect.php'; //using the db_connect file to connect to the database

$db_link = db_connect("football"); //connecting to the football database

$self = $_SERVER['PHP_SELF'];  //initialising the $self variable in order to refresh the page
?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="utf-8">
    <title>Schoolboy Football Website - <?= $pageTitle ?> </title>
    <style>
        @import "/../public/css/basic.css";
        @import "/../public/css/header.css";
        @import "/../public/css/nav.css";
        @import "/../public/css/footer.css";
    </style>
</head>

<body>
    <header>
        <div id="header">
            <section class="text">
                <h1 class="flex">Schoolboy Football Website</h1>
                <h2 class="flex">All The Information You Need About Your Local Club</h2>
            </section>
            <section class="image">
                <img src="/../public/images/ball.jpg" alt="Ball" class="fixed">
            </section>
        </div>
    </header>

<?php
require_once __DIR__ . '/_nav.php';