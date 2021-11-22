<?php
    class vehicle{
        public function start(){
            echo "vechicle starts...";
        }
    }

    class car extends vehicle{
        public $color = "red";
    }

    $toyota = new car();
    $toyota->start();
?>