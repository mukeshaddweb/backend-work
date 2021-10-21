<?php
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $num3 = $_GET['num3'];

    if($num1 == $num2){
        if($num1 == $num3){
            echo "All numbers are equal.";
        }else if($num1<$num3){
            echo "Third Number is maximum.";
        }else{
            echo "First and second numbers are maximum.";
        }
    }else if($num1 < $num2){
        if($num2 == $num3){
            echo "Second and third numbers are maximum.";
        }else if($num2<$num3){
            echo "Third Number is maximum.";
        }else{
            echo "Second numbers is maximum.";
        }
    }else{
        if($num1 == $num3){
            echo "First and third are maximum.";

        }else if($num1 < $num3){
            echo "Third number is maximum.";
        }else{
            echo "First number is maximum.";
        }
    }

?>