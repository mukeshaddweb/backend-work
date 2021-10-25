<?php
    
    // 16. Read a 2D array and print sum of its elements.
    
    $arr = array(
        array(1,2,3),
        array(4,5,6),
        array(7, 8, 9)
    );
    // print_r($arr[0]);
        function twoDsum($a){
            $sum = 0;
            for($i = 0; $i<count($a); $i++){
                for($j=0; $j<count($a[$i]); $j++){
                    $sum += $a[$i][$j];
                }
            }
            return $sum;
        }

        print_r($arr[0]);
    echo "<br>";
    print_r($arr[1]);
    echo "<br>";
    print_r($arr[2]);
    echo "<br>";

        $sum = twoDsum($arr);
        echo "The sum of elemets in the two D array is : ${sum}.";
    ?>
    