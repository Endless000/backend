<?php

require_once WORKER_PATH . '/../php/workers/users.php';

$user = getUserByUserNameAndPassword($_POST['username'], $_POST['password']);

if (!$user) {
    $error = 'Incorrect username or password';
    require_once WORKER_PATH . '/../views/login.phtml';
    die;
}

unset($user['password']);
$_SESSION['auth'] = $user;

setcookie(COOKIE_SESSION_ID, session_id(), time(), + 3600 * 24 * 7);
header('Location: /views/welcome');