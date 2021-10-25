<?php

// 2. Read an array and print its reverse.

    $arr = array(10,11,12,13);

    function sumElement($a){

        //printing array
        foreach($a as $element){
            echo $element." ";
        }
        echo "<br>";
        $sum = 0;
        echo "reverse array : ";
        for($i = count($a)-1; $i >= 0; $i--){
            echo  $a[$i]." ";
        }
        
    }

    sumElement($arr);
?>