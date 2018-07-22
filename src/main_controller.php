<?php

//read in the declaration of the model/database function
require_once __DIR__ . '/model_functions.php';

function index_action()
{
    $pageTitle = "Home Page";
    $indexLinkClass = "current_page";
    $aboutLinkClass = "";
    $contactLinkClass = "";
    $loginLinkClass = "";
    require_once __DIR__ . '/../templates/index.php';
}

function about_action()
{
    $pageTitle = "About Page";
    $indexLinkClass = "";
    $aboutLinkClass = "current_page";
    $contactLinkClass = "";
    $loginLinkClass = "";
    require_once __DIR__. '/../templates/about.php';
}

function contact_action()
{
    $pageTitle = "Contact Page";
    $indexLinkClass = "";
    $aboutLinkClass = "";
    $contactLinkClass = "current_page";
    $loginLinkClass = "";
    require_once __DIR__ . '/../templates/contact.php';
}

function login_action()
{
    $pageTitle = "Login Page";
    $indexLinkClass = "";
    $aboutLinkClass = "";
    $contactLinkClass = "";
    $loginLinkClass = "current_page";
    require_once __DIR__ . '/../templates/login.php';
}

function league_action()
{
    $pageTitle = "League Table";
    $indexLinkClass = "";
    $aboutLinkClass = "";
    $contactLinkClass = "";
    $loginLinkClass = "current_page";

    $leagues = display_league_table();  //get data from model function
    require_once __DIR__ . '/../templates/league.php';
}

function sitemap_action()
{
    $pageTitle = "Sitemap";
    $indexLinkClass = "";
    $aboutLinkClass = "";
    $contactLinkClass = "";
    $loginLinkClass = "";
    require_once __DIR__ . '/../templates/sitemap.php';
}

function admin_action()
{
    $pageTitle = "Admin";
    $indexLinkClass = "";
    $aboutLinkClass = "";
    $contactLinkClass = "";
    $loginLinkClass = "";
    require_once __DIR__ . '/../templates/admin.php';
}

function scores_action()
{
    $pageTitle = "Update Scores";
    $indexLinkClass = "";
    $aboutLinkClass = "";
    $contactLinkClass = "";
    $loginLinkClass = "";
    require_once __DIR__ . '/../templates/scores.php';
}