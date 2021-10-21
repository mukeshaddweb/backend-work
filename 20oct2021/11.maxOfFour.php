<?php
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $num3 = $_GET['num3'];
    $num4 = $_GET['num4'];

    if($num1>$num2){
        $max = $num1;
    }else{
        $max = $num2;
    }

    if($max<$num3){
        $max = $num3;
    }

    if($max<$num4){
        $max = $num4;
    }

    switch ($max) {
        case $num1:
            echo "First number is maximum.";
            break;
        case $num2:
            echo "Second number is maximum.";
            break;
        case $num3:
            echo "Third number is maximum.";
            break;
        case $num4:
            echo "Forth number is maximum.";
            break;
        
    }

?>