<?php

    // Question : calculate the Gross Salary when Basic Salary is given. The allowances HRA(%) ,DA (%), PF and Medical are also given. Add the HRA and DA in the Basic Salary but deduct PF and Medical from the Salary.

    
    $basic_salary = 1500;
    $da = $basic_salary*0.4;  //40 percent DA
    $hra = $basic_salary*0.2; //20 percent HRA
    $pf = 500;
    $medical = 100;


    $gross_salary = $basic_salary + $da + $hra - $pf - $medical;
    
    echo "Basic salary is : ".$basic_salary."<br>";
    echo "DA is : ".$da.
         "<br>HRA is : ".$hra.
         "<br>PF is :".$pf.
         "<br>Medical is : ".$medical;
    echo "<br><br>Gross salary is : ".$gross_salary."<br>";
?>