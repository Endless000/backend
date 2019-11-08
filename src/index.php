<?php
$worker[1] = ["name" => "Misha", "email" => "misha@test.com", "lang"=> "ru"];
$worker[2] = ["name" => "Bodya", "email" => "bodya@gmail.com", "lang"=> "eu"];
$worker[3] = ["name" => "Irakli", "email" => "irakli@gmail.com", "lang"=> "de"];
$worker[4] = ["name" => "Roman", "email" => "roman@gmail.com", "lang"=> "fr"];
$worker[5] = ["name" => "Anton", "email" => "anton@gmail.com", "lang"=> "ua"];
$worker[6] = ["name" => "Misha", "email" => "misha@test.com", "lang"=> "de"];
$worker[7] = ["name" => "Bodya", "email" => "bodya@gmail.com", "lang"=> "ua"];
$worker[8] = ["name" => "Irakli", "email" => "irakli@gmail.com", "lang"=> "ru"];
$worker[9] = ["name" => "Roman", "email" => "roman@gmail.com", "lang"=> "eu"];
$worker[10] = ["name" => "Anton", "email" => "anton@gmail.com", "lang"=> "en"];
if ($worker[1]["lang"] == $worker[10]["lang"] ){
    echo 'Привет';
} else {
    echo 'Привет, Hello ';
}
