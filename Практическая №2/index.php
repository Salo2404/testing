<?php

//№1

$arr = [-1, 2, 5, 24, -100, 0, 10];
$sum = 0;
foreach($arr as $number){
    if($number > 0){
        $sum += $number;
    }
}
echo "$sum <br>";

//№2

$arr = [-1, 2, 5, 24, -100, 0, 10];
$sum = 0;
foreach($arr as $number){
    if($number > 0 && $number < 10){
        $sum += $number;
    }
}
echo "$sum <br>";

//№3

$school = array(
    'Коля' => '200',
    'Вася' => '300',
    'Петя' => '400'
);

foreach($school as $name => $earn) {
    echo "$name - зарплата $earn долларов<br>";
}

//№4

$colors = array(
    'Green' => 'Зеленый',
    'Red' => 'Красный',
    'Blue' => 'Синий'
);

foreach($colors as $color => $ruscolor) {
    echo "$color - $ruscolor<br>";
}