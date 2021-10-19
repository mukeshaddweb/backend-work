<?php

    // Question : calculate the roots of a quadratic equation.

    
    //x^2 - x - 6 = 0  = (x + 2)(x - 3)

    $a = 1;
    $b = -1;
    $c = -6;
    $rootvalue = sqrt(($b*$b) - (4*$a*$c));
    $first_root = ($rootvalue - $b)/(2*$a);
    $second_root = (-$rootvalue - $b)/(2*$a);

    echo "equation : x^2-x-6=0 <br>First root is : ".$first_root.
         "<br>Second root is : ".$second_root;


?>