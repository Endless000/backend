<?php
$workers = [];
 $workers[1] = ["name" => "Misha", "email" => "misha@test.com","lang"=>"en"];
 $workers[2] = ["name" => "Bodya", "email" => "bodya@gmail.com","lang"=>"ru"];
 $workers[3] = ["name" => "Irakli", "email" => "irakli@gmail.com","lang"=>"fr"];
 $workers[4] = ["name" => "Roman", "email" => "roman@gmail.com","lang"=>"ua"];
 $workers[5] = ["name" => "Anton", "email" => "anton@gmail.com","lang"=>"de"];
 $worker = ["name" => "Misha"];
  krsort($workers);
   unset($workers[1]);
