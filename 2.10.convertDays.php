<?php

    // Question : convert given number of days into Months & Days.

    
    $total_days = 367;
    $months = floor($total_days/30);
    $days = $total_days%30;

    echo "Total days: ".$total_days.
         "<br><br>Months : ".$months.
         "<br>Days : ".$days;
    
?>