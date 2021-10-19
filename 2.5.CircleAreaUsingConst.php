<?php

    // Question : calculate the area of a circle. (Use Symbolic Constant)
    
    
    define("PI", "3.14");
    $radius = 7;
    $area = PI*($radius**2);

    echo "Radius of the circle : ".$radius.
         "<br><br>Area of the circle is : ".$area;
?>