<?php
    $num = $_GET['num'];
    
    $number = $num;
    // $num = $number;
    $compare = 0;
    if($number < 10){
        $digitsum = $number;
    }else{
        while($number >= 10){
        
            $compare = $compare + ($number%10)**3;
            $number = floor($number/10);       
        }
        $compare = $compare + $number**3;
    }
    
    if($compare == $num){
        echo "The number is a Armstrong number.";
    }else{
        echo "The number not a Armstrong number.";
    }
    
?>