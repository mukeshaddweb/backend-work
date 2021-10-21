<?php
    $num = $_GET['num'];
    $number = $num;
    $reverse = 0;
    while($number > 10){
        $remainder = $number%10;
        $reverse = $reverse*10 + $remainder;
        $number = floor($number/10);       
    }

    $reverse = $reverse*10 + $number;

    echo "Reverser number is : ".$reverse;
?>