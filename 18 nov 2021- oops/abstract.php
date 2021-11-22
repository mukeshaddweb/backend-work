<?php
 abstract class vehicle{
     public $color;
     abstract function start();
 }

 class car extends vehicle{
     public function start(){
         echo "broom broom <br>";
     }
 }

 $car1 = new car();
 $car1->start();

?>