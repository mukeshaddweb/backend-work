<?php
    class vehicle{

        function __construct(){
            echo "vehicle constructor ";
        }
        public function start(){
            echo "vechicle starts...";
        }
    }

    class car extends vehicle{

        function __construct(){
            echo "car constructor  ";

            // calling parent constructor
            parent::__construct();
        }


        public $color = "red";
    }

    $toyota = new car();
    $toyota->start();
?>