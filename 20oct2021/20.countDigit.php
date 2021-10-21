<?php
    $num = $_GET['num'];
    $number = $num;
    $count = 0;
    if($number < 10){
        $count = 1;
    }else{
        while($number > 0){
        
            $count++;
            $number = floor($number/10);       
        }
        
    }
    echo "Total number of digits are : ".$count;
?>