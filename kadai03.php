<?php
$name = "紫垣";
if ($name === '紫垣') {
    echo "私は紫垣です。";
} else {
    echo "私は紫垣ではありません。";
}
echo "\n";

$total = 0;
for($i = 1; $i <= 10000; $i++) {
    $total += $i;
}
echo $total;
echo "\n";

$fruits = array("apple", "orange", "lemon", "grape", "strawberry");
foreach($fruits as $fruit){
    echo "要素は" . $fruit;
    echo "\n";
}

$start = 1;
$end = 100;
for($i = $start; $i <= $end; $i++){
    if($i % 5 == 0){
      echo $i;
      echo "\n";
    }
}