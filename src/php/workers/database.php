<?php

function getConnection(string $name)
{
    $config = require_once WORKER_PATH . '/../config/database.php';
    if (!isset($config[$name])) {
        echo 'Error Database Name';
    }
    $config = $config[$name];
    $connect = mysqli_connect($config['host'], $config['user'], $config['password'], $config['database_name']);
    if ($connect) {
        return $connect;
    }
    die ('ERROR CONNECT TO MYSQL SERVER');
}