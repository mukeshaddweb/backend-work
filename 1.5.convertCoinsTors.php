<?php
    $coins_of50 =23;
    $coins_of25 = 3;
    $coins_of20 = 4;
    $coins_of10 = 5;
    $coins_of5 =2;
    $coins_of2 = 8;
    $coins_of1 = 10;

    $total_Rs = $coins_of50*50 + $coins_of25*25 + $coins_of20*20 + $coins_of10*10 + $coins_of5*5 + $coins_of2*2 + $coins_of1*1;
    

    echo "<br>Coins of 50 : ".$coins_of50."<br>";
    echo "Coins of 25 : ".$coins_of25."<br>";
    echo "Coins of 20 : ".$coins_of20."<br>";
    echo "Coins of 10 : ".$coins_of10."<br>";
    echo "Coins of 5 : ".$coins_of5."<br>";
    echo "Coins of 2 : ".$coins_of2."<br>";
    echo "Coins of 1 : ".$coins_of1."<br>";

    echo "<br>Total money is : ".$total_Rs;

?>