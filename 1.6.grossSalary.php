<?php
    $basic_salary = 1500;
    $da = $basic_salary*0.4;
    $hra = $basic_salary*0.2;

    $gross_salary = $basic_salary + $da + $hra;
    echo "Basic salary is : ".$basic_salary."<br>";
    echo "Gross salary is : ".$gross_salary."<br>";
?>