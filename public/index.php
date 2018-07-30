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
    case 'scoresu13':
        scoresu13_action();    //call the function
        break;

    case 'scoresu14':
        scoresu14_action();
        break;

    case 'castleknocku13':
        castleknocku13_action();
        break;

    case 'castleknocku14':
        castleknocku14_action();
        break;

    case 'corduffu13':
        corduffu13_action();
        break;

    case 'corduffu14':
        corduffu14_action();
        break;

    case 'hartstownu13':
        hartstownu13_action();
        break;

    case 'hartstownu14':
        hartstownu14_action();
        break;

    case 'mochtasu13':
        mochtasu13_action();
        break;

    case 'mochtasu14':
        mochtasu14_action();
        break;

    case 'mountviewu13':
        mountviewu13_action();
        break;

    case 'mountviewu14':
        mountviewu14_action();
        break;

    case 'veronau13':
        veronau13_action();
        break;

    case 'veronau14':
        veronau14_action();
        break;

    case 'castleknocku13results':
        castleknocku13results_action();
        break;

    case 'castleknocku14results':
        castleknocku14results_action();
        break;

    case 'corduffu13results':
        corduffu13results_action();
        break;

    case 'corduffu14results':
        corduffu14results_action();
        break;

    case 'hartstownu13results':
        hartstownu13results_action();
        break;

    case 'hartstownu14results':
        hartstownu14results_action();
        break;

    case 'mochtasu13results':
        mochtasu13results_action();
        break;

    case 'mochtasu14results':
        mochtasu14results_action();
        break;

    case 'mountviewu13results':
        mountviewu13results_action();
        break;

    case 'mountviewu14results':
        mountviewu14results_action();
        break;

    case 'veronau13results':
        veronau13results_action();
        break;

    case 'veronau14results':
        veronau14results_action();
        break;

    //else show home page
    case 'index':
    default:
        index_action();  //call the function
}
