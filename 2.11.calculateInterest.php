<?php

    // Question : calculate the Simple Interest and Compound Interest.

    
    $p = 450;   //in rupees
    $r = 10;    //in percentage
    $t = 3;     //in years
    
    $SI = ($p*$r*$t)/100;

    $CI = ($p*(((100 + $r)/100)**$t)) - $p;

    echo "Principal : ".$p.
         "<br>Rate : ". $r.
         "%<br>Time :".$t." years";

    echo"<br><br>Simple Interest is : ".$SI.
        "<br>Compound Interest is : ".$CI; 

?>