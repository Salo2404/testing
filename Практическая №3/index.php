<?php

//№1
// $arr = [];

// for($i = 0; $i < 11; $i++ ){
//     array_push($arr, "X");
// }

// print_r($arr);

//№2

// for($i = 0; $i <= 100; $i++){
//     echo "$i <br>";
// }

//№3

// $result = 0;

// for($i = 0; $i <= 100; $i++){
//     $result += $i;
// }

// echo "$result <br>";

//№4

// $result = 0;

// for($i = 2; $i <= 100; $i+=2){
//     $result += $i;
// }

// echo "$result <br>";

//№5

// $arr = [1,2,3,4,5,6,7,8,0,1,2,3,4,5];

// $i = 0;

// while ($i < count($arr) && $arr[$i] != 0){
//     echo $arr[$i];
//     $i++;
// }

//№6

$word = 'abcde';
	
$arr = str_split($word, 5);
print_r($arr);