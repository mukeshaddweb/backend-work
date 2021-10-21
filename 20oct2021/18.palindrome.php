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

    if($reverse == $num){
        echo "This is a Palindrome number.";
    }else{
        echo "This is not a Palindrome number.";
    }
?>