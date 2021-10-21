<?php
    $number = $_GET['num'];
    $fact = 1;
    
    for($i = $number; $i > 1; --$i ){
        $fact = $fact*$i;
    }

    echo "Factorial of the number is : ".$fact;

?>