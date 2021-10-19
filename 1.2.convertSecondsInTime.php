<?php
    $total_seconds = 6000;

    $seconds = $total_seconds%60;
    $total_minutes = floor($total_seconds/60);

    $minutes = $total_minutes%60;

    $hour = floor($total_minutes/60);
    echo "Total seconds :".$total_seconds;
    echo "<br>Hours :".$hour." ";
    echo "<br>Minutes :".$minutes." ";
    echo "<br>Seconds :".$seconds;

?>