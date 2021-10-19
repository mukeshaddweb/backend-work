<?php

    // Question : calculate the percentage of a student while marks of 5 subjects are given.
    

    //marks are out of 100
    $subject1 = 34;
    $subject2 = 56;
    $subject3 = 78;
    $subject4 = 23;
    $subject5 = 54;
    $total = $subject1 + $subject2 + $subject3 + $subject4 + $subject5;

    $percentage = ($total*100)/500;

    echo "marks in subject 1 is : ".$subject1.
         "<br>marks in subject 2 is : ".$subject2.
         "<br>marks in subject 3 is : ".$subject3.
         "<br>marks in subject 4 is : ".$subject4.
         "<br>marks in subject 5 is : ".$subject5;

    echo "<br><br>Percentage is : ".$percentage."%";

?>