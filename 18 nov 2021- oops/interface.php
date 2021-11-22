<?php
    interface vehicle{
        public function start();
        public function horn();
    }

    class car implements vehicle{
        public function start(){
            echo "vroom vroom";
        }

        public function horn(){
            echo "car horn";
        }
    }

    $car1 = new car();

    $car1->start();
    echo "<br>";
    $car1->horn();
?>