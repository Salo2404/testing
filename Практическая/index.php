<?php
require 'functions.php';

$price1 = 110000;
$price2 = 29000;
$price3 = 190000;
$total = Calculate($price1, $price2, $price3);

$count1 = 1;
$count2 = 1;
$count3 = 1;
$totalcount = sum($count1, $count2, $count3);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <h1 class="h1">Корзина товаров</h1>
    <div class="container">
        <table class="items">
            <?php include 'thead.php';?>
            <?php include 'tbody.php';?>
        </table>
    </div>
</body>
</html>