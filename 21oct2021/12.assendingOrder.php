<?php
    
    // 12. Read an array and print it in ascending order.(SORTING)
    
    $arr = array(5, 7, 18, 25, 6, 1);

    function printArray($a){
        for($i = 0; $i<count($a); $i++){
            echo $a[$i]." ";
        }
    }

    function aOrder($a){
        for($i = 0; $i <count($a); $i++){
            for($j = 0; $j <count($a)-1 ; $j++){
                if($a[$j]>$a[$j+1]){
                    $temp = $a[$j+1];
                    $a[$j+1] = $a[$j];
                    $a[$j] = $temp;
                }
            }
        }
        echo "<br>Array in incresing order:";
        printArray($a);
    }

    printArray($arr);
    aOrder($arr);
?>