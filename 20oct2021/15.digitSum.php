<?php
    $num = $_GET['num'];
    $number = $num;
    $digitsum = 0;
    if($number < 10){
        $digitsum = $number;
    }else{
        while($number >= 10){
        
            $digitsum = $digitsum + $number%10;
            $number = floor($number/10);       
        }
        $digitsum = $digitsum + $number;
    }
    

    

    echo "Digit sum of the number is : ".$digitsum;
?>