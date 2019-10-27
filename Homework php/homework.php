<?php
$workers = [];
 $workers[1] = ["name" => "Misha", "email" => "misha@test.com"];
 $workers[2] = ["name" => "Bodya", "email" => "bodya@gmail.com"];
 $workers[3] = ["name" => "Irakli", "email" => "irakli@gmail.com"];
 $workers[4] = ["name" => "Roman", "email" => "roman@gmail.com"];
 $workers[5] = ["name" => "Anton", "email" => "anton@gmail.com"];
 $worker = ["name" => "Misha"];
  krsort($workers);
   unset($workers[1]);
   echo $workers. '<pre>';
   echo "max_id = ", current($workers[5]), "<br>";
   echo "min_id = ", current($worker), "<br>";
   echo "next_max_id = ", current($workers[4]), "<br>";
   echo "next_min_id = ", current($workers[2]), "<br>";
   echo "Количество пользователей  сайта = ". count($workers). '<br>';
    print_r($workers);
?>