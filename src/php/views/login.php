<?php

if(isset($_GET['register']) && $_GET['register'] === 'success') {
    $login = $_GET['login'];
}

    require_once WORKER_PATH . '/../views/login.phtml';