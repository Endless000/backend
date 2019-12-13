<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

use src\core\Router;
use src\lib\Db;

spl_autoload_register(function($class) {
    $path = str_replace('\\', '/', $class.'.php');
    echo $path;
    if(file_exists($path)) {
        require $path;
    }
});

$route = new Router();
$route = new Db();