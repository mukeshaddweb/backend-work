<?php

    // Question : calculate the area of a circle while the circumference is given.

    
    $circumference = 44;
    $pi = 3.14;
    $radius = $circumference/(2*$pi);
    $area = $pi*($radius**2);

    echo "Circumference of the circle : ".$circumference.
         "<br><br>Area of the circle is : ".$area;
?>