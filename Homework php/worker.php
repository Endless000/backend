<?php
$a = [];
for ($i = 10; $i < 100; $i++) {
    $a[] = rand(-100, 100);
}
foreach ($a as $value) {
    if ($value % 2 == 0) {
        echo $value . '<br />';
    }
}

echo '<pre>' . print_r($a, true) . '</pre>';
$min = min(array_values($a));
$max = max(array_values($a));
echo $min;
echo '<pre>' , $max;

$nums = [];
$sum = 0;
for($q=0;$q<count($nums);$q++){
    $sum += $nums[$q];
}
echo $sum/count($nums);
?>


echo "  Login  <input type='text' name='login' value='".$abc."'>";
echo "  Password  <input type='text' name='pass' value='".$cba."'>";
