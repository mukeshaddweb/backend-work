<?php
    
    // 15. Read an array and find out how many elements are prime.

    $arr = array(5, 7, 18, 25, 6, 57);

    function isPrime($num){
        for($i = 2; $i <= $num/2; $i++){
            if($num%$i == 0){
                return 0;
            }
        }
        return 1;
    }

    function primeCount($a){
        $count = 0;
        for($i = 0; $i < count($a); $i++){
            echo $a[$i]." ";
            if(isPrime($a[$i])){
                $count++;
            }
        }
        echo "<br>";
        return $count;
    }

    // print_r($arr);
    $total_prime = primeCount($arr);
    echo "There are total ${total_prime} prime numbers in the array.";
?>