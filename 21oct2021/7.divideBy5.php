<?php

// 7. Read an array and count no. of eliment which are divisible by 5.

    $arr = array(10,11,12,15,342,21,455,325);

    function divideBy5($a){
        $count = 0;
        
        for($i = 0; $i < count($a); $i++){
            if($a[$i]%5 == 0){
                $count++;
            }
        }
        //printing array
        foreach($a as $element){
            echo $element." ";
        }
        echo "<br>";
        echo "<br><br>There are ${count} numbers in the array that are divisible by 5.";
        
    }

    divideBy5($arr);
?>