<?php

    //Question : calculate the volume and surface area of a sphere.


    $pi = 3.14;
    $radius = 5;
    $volume = (4*$pi*($radius**3))/3;
    $surface_area = 4*$pi*($radius**2);

    echo "Radius of the sphere : ".$radius.
         "<br>Volume of the sphere is : ".$volume.
         "<br>Surface Area of the sphere is : ".$surface_area;
?>