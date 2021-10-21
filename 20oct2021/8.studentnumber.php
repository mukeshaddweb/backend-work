<?php
    $sub1 = $_GET['hindi'];
    $sub2 = $_GET['english'];
    $sub3 = $_GET['maths'];

    $total = ($sub1 + $sub2 + $sub3);
    $percentage = (($sub1 + $sub2 + $sub3)/3);

    echo "Total is : ".$total;
    echo "<br>Percentage is : ".$percentage."<br>";

    if($percentage >= 60){
        echo "Division = First division<br>";
    }else if($percentage >= 45 && $percentage < 60){
        echo "Division = Second division<br>";
    }else if($percentage >= 35 && $percentage < 45){
        echo "Division = Third division<br>";
    }else{
        echo "Division = Failed";
    }

?>