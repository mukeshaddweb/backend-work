<?php
    $total_Rs = 346;
    echo "Total Rs : ". $total_Rs."<br>";
    $coinsof100 = floor($total_Rs/100);
    $remainder = $total_Rs%100;

    $coinsof50 = floor($remainder/50);
    $remainder = $remainder%50;
    
    $coinsof20 = floor($remainder/20);
    $remainder = $remainder%20;

    $coinsof10 = floor($remainder/10);
    $remainder = $remainder%10;

    $coinsof5 = floor($remainder/5);
    $remainder = $remainder%5;

    $coinsof2 = floor($remainder/2);
    $remainder = $remainder%2;

    $coinsof1 = $remainder;

    echo "<br>Coins of 100 : ".$coinsof100."<br>";
    echo "Coins of 50 : ".$coinsof50."<br>";
    echo "Coins of 20 : ".$coinsof20."<br>";
    echo "Coins of 10 : ".$coinsof10."<br>";
    echo "Coins of 5 : ".$coinsof5."<br>";
    echo "Coins of 2 : ".$coinsof2."<br>";
?>