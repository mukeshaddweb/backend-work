<?php

// 1. Read an array and print sum of its elements.

    $arr = array(10,10,10,10);

    function sumElement($a){
        $sum = 0;
        for($i = 0; $i < count($a); $i++){
            $sum += $a[$i];
        }
        //printing array
        foreach($a as $element){
            echo $element." ";
        }
        echo "<br>";
        echo "<br><br>The sum is : ".$sum;
    }

    sumElement($arr);
?>