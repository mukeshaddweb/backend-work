<?php
    class vehicle{
        public function start(){
            echo "vechicle starts...\n";
        }    
    }

    class car extends vehicle{
        public $color = "red";
        public function start(){
            echo "vroom vroom\n";
        }
    }

    $toyota = new car();
    $toyota->start();

?>