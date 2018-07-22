<?php

//read in declarations of the page controller functions
require_once __DIR__ . '/../src/main_controller.php';

//get value from 'action' parameter
$action = filter_input(INPUT_GET, 'action');

switch ($action){
    //if 'about' then show about page
    case 'about':
        about_action();  //call the function
        break;

    //if 'contact' then show contact page
    case 'contact':
        contact_action();  //call the function
        break;

    //if 'login' then show login page
    case 'login':
        login_action();     //call the function
        break;

    //if 'league' then show league page
    case 'league':
        league_action();  //call the function
        break;

    //if 'sitemap' then show sitemap page
    case 'sitemap':
        sitemap_action();   //call the function
        break;

    //if 'admin' then show admin page
    case 'admin':
        admin_action();     //call the function
        break;

    //if 'scores' then show scores page
    case 'scores':
        scores_action();    //call the function
        break;

    //else show home page
    case 'index':
    default:
        index_action();  //call the function
}
