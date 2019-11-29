<?php

const WORKER_PATH = __DIR__;
const COOKIE_SESSION_ID = 'OLD_SESSION_ID';

if(isset($_COOKIE[COOKIE_SESSION_ID])) {
    session_id($_COOKIE[COOKIE_SESSION_ID]);
}

session_start();
require_once WORKER_PATH . '/../php/workers/database.php';
$mainConnection = getConnection('mysql');
$GLOBALS['main_connection'] = $mainConnection;

$isAuth = false;
if(isset($_SESSION['auth'])) {
    $isAuth = true;
}

$uri = explode('?', $_SERVER['REQUEST_URI'])[0];

switch (mb_strtolower($uri)) {
    case '/': {
        require_once WORKER_PATH . '/../php/views/main.php';
        break;
    }
    case '/views/register': {
        if($isAuth) {
            echo 'Premission denied';die;
        }
        require_once WORKER_PATH . '/../php/views/register.php';
        break;
    }
    case'/register': {
        if($isAuth) {
            echo 'Premission denied';die;
        }
        require_once WORKER_PATH . '/../php/execute/register.php';
        break;
    }
    case '/login': {
        if($isAuth) {
            echo 'Premission denied';die;
        }
        require_once WORKER_PATH . '/../php/execute/login.php';
        break;
    }
    case '/views/login': {
        if($isAuth) {
            echo 'Premission denied';die;
        }
        require_once WORKER_PATH . '/../php/views/login.php';
        break;
    }
    case '/views/welcome': {
        if(!$isAuth) {
            echo 'Premission denied';die;
        }
        require_once WORKER_PATH . '/../php/views/welcome.php';
        break;
    }
    case '/logout': {
        if(!$isAuth) {
            echo 'Premission denied';die;
        }
        require_once WORKER_PATH . '/../php/execute/logout.php';
        break;
    }
    default: {
        echo 'PAGE NOT FOUND';die;
    }

}




