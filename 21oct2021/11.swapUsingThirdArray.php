<?php
    
    // 11. Read two array of same dimension and swap their elements index by index into third.
    
    $arr = array(1,2,3,4);
    $brr = array(10,20,30,40);

    $temp = array();

    function printArray($a){
        for($i = 0; $i<count($a); $i++){
            echo $a[$i]." ";
        }
        echo "<br>";
    }
    function swapArray(&$a, &$b, &$t){
        $t = $a;
        $a = $b;
        $b =$t;
    }
    echo "first array:";
    printArray($arr);
    echo "second array:";
    printArray($brr);

    swapArray($arr, $brr, $temp);
    echo "arrays after swapping:<br>";

    echo "first array:";
    printArray($arr);
    echo "second array:";
    printArray($brr);
    
    
?>