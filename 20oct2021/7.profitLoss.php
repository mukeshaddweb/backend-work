<?php
    $cost_price = $_GET['cost'];
    $sell_price = $_GET['sell'];

    if($cost_price == $sell_price){
        echo "No profit No loss";
    }elseif($cost_price < $sell_price){
        echo "Profit is : ".($sell_price-$cost_price);
    }elseif($cost_price > $sell_price){
        echo "Loss is : ".($cost_price-$sell_price);
    }

?>