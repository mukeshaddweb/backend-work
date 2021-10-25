<?php

// 8. Read an array and perform LINEEAR Search.

    $arr = array(12,1,123,145,3,-6,3);
    $element = 3;

    function linearSearch($a, $num){
        
        for($i = 0; $i < count($a); $i++){
            if($num == $a[$i]){
                echo "<br>${num} found at the position ".($i+1)." in the array.<br>";
            }
        }
        //printing array
        foreach($a as $element){
            echo $element." ";
        }
        echo "<br>";
        
    }

    linearSearch($arr, $element);
?>