<?php
    $num = $_GET['num'];
    $compare = 0;

    for($i = 1; $i <= $num/2; $i++){
        if($num%$i == 0){
            $compare += $i;
        }
    }

    if($compare == $num){
        echo "The number is a Perfect number.";
    }else{
        echo "The number not a Perfect number.";
    }

    
?>