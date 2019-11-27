<?php

const SALT = '827ccb0eea8a706c4c34a16891f84e7b';
function existLogin(string $login): bool
{
    $sql = "SELECT count(*) cnt_rows FROM users WHERE login = '$login'";
    $query = mysqli_query($GLOBALS['main_connection'], $sql);
    $result = mysqli_fetch_assoc($query);

    return (bool)$result['cnt_rows'];
}

function existEmail(string $email): bool
{
    $sql = "SELECT count(*) cnt_rows FROM users WHERE login = '$email'";
    $query = mysqli_query($GLOBALS['main_connection'], $sql);
    $result = mysqli_fetch_assoc($query);

    return (bool)$result['cnt_rows'];
}

function addUsers(string $login, string $email, string $password): bool
{
    $password = md5($password. SALT);
    $sql = "INSERT INTO users(login, email, password) VALUES('$login', '$email', '$password')";
    return mysqli_query($GLOBALS['main_connection'], $sql);
}

function getUserByUserNameAndPassword(string $userName, string $password): ?array
{
    $password = md5($password . SALT);
    $sql = "SELECT * FROM users WHERE(login = '$userName' or email = '$userName') AND password = '$password'";
    $result = mysqli_query($GLOBALS['main_connection'], $sql);

    return mysqli_fetch_assoc($result);
}