<?php

require_once WORKER_PATH . '/../php/workers/users.php';

$existLogin = existLogin($_POST['login']);
$existEmail = existEmail($_POST['email']);

if ($existLogin or $existEmail) {
    require_once WORKER_PATH . '/../views/register.phtml';
    die;
}

$result = addUsers($_POST['login'], $_POST['email'], $_POST['password']);
if($result){
    header('Location: /views/login?register=success&login=' . $_POST['login']);
}
echo 'ERROR IN REGISTRATION';