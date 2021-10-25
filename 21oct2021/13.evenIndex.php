<?php

// 13. Read an array and print sum of elements stored at even indexes.

    $arr = array(10,11,12,15,342,21,455,325);

    function evenIndexSum($a){
        $sum = 0;
        
        for($i = 0; $i < count($a); $i++){
            if($i%2 == 0){
                $sum += $a[$i];
            }
        }
        //printing array
        foreach($a as $element){
            echo $element." ";
        }
        echo "<br>";
        echo "<br><br>Sum of elements at even index is : ${sum}";
        
    }

    evenIndexSum($arr);
?>