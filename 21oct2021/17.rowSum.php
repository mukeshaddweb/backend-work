<?php
    
    // 17. Read a 2D array and print sum of its individual rows.

    $arr = array(
        array(1,2,3),
        array(4,5,6),
        array(7, 8, 9)
    );
    
    function rowsum($a){
        $first_row = 0;
        $second_row = 0;
        $third_row = 0;

        for($i = 0; $i < count($a); $i++){
            for($j = 0; $j < count($a); $j++){
                if($i == 0){
                    $first_row += $a[$i][$j];
                }
                if($i == 1){
                    $second_row += $a[$i][$j];
                }
                if($i == 2){
                    $third_row += $a[$i][$j];
                }
            }   
        }

        echo "<br>First row sum is : ${first_row}.<br>";
        echo "Second row sum is : ${second_row}.<br>";
        echo "Third row sum is : ${third_row}.<br>";
    }

    print_r($arr[0]);
    echo "<br>";
    print_r($arr[1]);
    echo "<br>";
    print_r($arr[2]);
    echo "<br>";

    rowsum($arr);

?>