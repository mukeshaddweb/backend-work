<?php
    $coins_of50 =20;
    $coins_of25 = 44;
    $coins_of20 = 50;
    $coins_of10 = 10;
    $coins_of5 =40;
    $coins_of2 = 100;
    $coins_of1 = 200;

    $total_Rs = $coins_of50/2 + $coins_of25/4 + $coins_of20/5 + $coins_of10/10 + $coins_of5/20 + $coins_of2/50 + $coins_of1/100;
    

    echo "<br>Coins of 50 : ".$coins_of50."<br>";
    echo "Coins of 25 : ".$coins_of25."<br>";
    echo "Coins of 20 : ".$coins_of20."<br>";
    echo "Coins of 10 : ".$coins_of10."<br>";
    echo "Coins of 5 : ".$coins_of5."<br>";
    echo "Coins of 2 : ".$coins_of2."<br>";
    echo "Coins of 1 : ".$coins_of1."<br>";

    echo "<br>Total money is : ".$total_Rs;

?>