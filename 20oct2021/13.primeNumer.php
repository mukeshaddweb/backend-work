<?php
    $num = $_GET['num'];
    $number = $num;
    $check = 1;
    
    for($i = 2; $i <= $num/2; $i++){
        if($num%$i == 0){
            echo "This is not a Prime number.";
            $check = 0;
            break;
        }
    }

    if($check == 1){
        echo "This is a prime number.";
    }
?>