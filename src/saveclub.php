<?php
$abc = $_POST['qqq'];
$file = fopen('news.txt', 'w');
fwrite($file, "$abc\n");

fclose($file);

