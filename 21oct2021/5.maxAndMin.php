<?php

    // 5. Read an array and find out max and min.

    $arr = array(23,21,5,6,76,4);
    function maxNmin($a){
        $max = $a[0];
        $min = $a[0];
        for($i = 0; $i < count($a); $i++){
            if($max<$a[$i]){
                $max = $a[$i];
            }
            if($min>$a[$i]){
                $min = $a[$i];
            }
        }
        //printing array
        foreach($a as $element){
            echo $element." ";
        }
        echo "<br>";
        echo "<br><br>Max is ${max}.<br><br>Min is ${min}.";
    }

    maxNmin($arr);
?>
