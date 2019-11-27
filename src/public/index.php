<?php

const WORKER_PATH = __DIR__;

$uri = explode('?', $_SERVER['REQUEST_URI'])[0];

require_once WORKER_PATH . '/../php/workers/database.php';

$mainConnection = getConnection('mysql');
$GLOBALS['main_connection'] = $mainConnection;

switch (mb_strtolower($uri)) {
    case '/': {
        require_once WORKER_PATH . '/../php/views/main.php';
        break;
    }
    case '/views/register': {
        require_once WORKER_PATH . '/../php/views/register.php';
        break;
    }
    case'/register': {
       require_once WORKER_PATH . '/../php/execute/register.php';
        break;
    }
    case '/login': {
        require_once WORKER_PATH . '/../php/execute/login.php';
        break;
    }
    case '/views/login': {
        require_once WORKER_PATH . '/../php/views/login.php';
        break;
    }
    default: {
        echo 'PAGE NOT FOUND';die;
    }

}




