<?php
    
    // 10. Read two array of same dimension and swap their elements.
    
    $arr = array(1,2,3,4);
    $brr = array(10,20,30,40);

    function printArray($a){
        for($i = 0; $i<count($a); $i++){
            echo $a[$i]." ";
        }
    }
    echo "Before swapping<br>";
    echo " = first array <br>".printArray($arr);
    echo " = second array ".printArray($brr);

    function swapArray(&$a, &$b){
        for($i = 0; $i < count($a); $i++){
            $helper = $a[$i];
            $a[$i] = $b[$i];
            $b[$i] = $helper;
        }
    }

    swapArray($arr, $brr);
    echo "<br><br>After swapping<br>";
    echo " = first array <br>".printArray($arr);
    echo " = second array ".printArray($brr);
?>