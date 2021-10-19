<?php

  // Question : calculate the perimeter and area of a triangle when sides are given.

  
  $side1 =5;
  $side2 =6;
  $side3 = 7;
  
  $S = ($side1 + $side2 + $side3)/2;

  $area = $S*sqrt(($S-$side1)*($S-$side2)*($S-$side3));

  $perimeter = $side1 + $side2 + $side3;

  echo "First side of triangle : ".$side1;
  echo "<br>Second side of triangle : ".$side2;
  echo "<br>Third side of triangle : ".$side3;

  echo "<br><br>Area of the triangle is : ".$area;
  echo "<br>Perimeter of the triangle is : ".$perimeter;
  

?>