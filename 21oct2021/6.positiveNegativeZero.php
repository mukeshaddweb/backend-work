<?php

 // 6. Read an array and count total no. of +ve, -ve and zero elements.

    $arr = array(10,-11,-12,0,342,0,-456,324);

    function number_count($a){
        $positive_count = 0;
        $negative_count = 0;
        $zero_count = 0;
        for($i = 0; $i < count($a); $i++){
            if($a[$i] == 0){
                $zero_count++;
            }elseif($a[$i] > 0){
                $positive_count++;
            }else{
                $negative_count++;
            }
        }
        //printing array
        foreach($a as $element){
            echo $element." ";
        }
        echo "<br>";
        echo "<br><br>There are ${positive_count} positive numbers, ${negative_count} negative numbers and ${zero_count} zeroes in the array.";
        
    }

    number_count($arr);
?>