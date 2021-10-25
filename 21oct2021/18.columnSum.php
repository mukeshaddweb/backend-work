<?php

// 18. Read a 2D array and print sum of its individual columns.

    $arr = array(
        array(1,2,3),
        array(4,5,6),
        array(7,8,9)
    );
    
    function columnsum($a){
        $first_column = 0;
        $second_column = 0;
        $third_column = 0;

        for($i = 0; $i < 3; $i++){
            for($j = 0; $j < 3; $j++){
                if($j == 0){
                    $first_column = $first_column + $a[$i][$j];
                }
                if($j == 1){
                    $second_column = $second_column + $a[$i][$j];
                }
                if($j == 2){
                    $third_column = $third_column + $a[$i][$j];
                }
            }   
        }

        echo "<br>First column sum is : ".$first_column;
        echo "<br>Second column sum is : ".$second_column;
        echo "<br>Third column sum is : ".$third_column;
    }

    print_r($arr[0]);
    echo "<br>";
    print_r($arr[1]);
    echo "<br>";
    print_r($arr[2]);
    echo "<br>";

    columnsum($arr);

?>