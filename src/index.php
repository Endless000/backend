<?php
// Задача 1. Первый вариант
$date = "31-12-2020";
echo date("Y.m.d", strtotime($date));

//Задача 1. Второй вариант
$data1 = '31-12-2020';
echo '<pre>';
echo str_replace('31-12-2020', '2020.12.31', $data1);

//Задача 1. Третий вариант
$data2 = '31-12-2020';
$data2 = explode('-', '31-12-2020');
echo '<pre>';
echo $data2[2] . '.' . $data2[1] . '.' . $data2[0];

//Задача 2
$from = 'london is the capital of great britain';
$from = ucwords($from);
var_dump($from);

//Задача 3
$password = '11223344556';
$lenght = strlen($password);
if ($lenght > 7 and $lenght < 12) {
    echo 'Пароль подходит';
} else {
    echo 'Нужно придумать другой пароль';
}

//Задача 4
$stroka = '1a2b3c4b5d6e7f8g9h0';
echo '<pre>';
echo str_replace([1, 2, 3, 4, 5, 6, 7, 8, 9, 0], '', '1a2b3c4b5d6e7f8g9h0');