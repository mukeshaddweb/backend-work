<?php
    class vehicle{
        public function start(){
            echo "vechicle starts...\n";
        }
        public static $total;
        public static function setTotal($stotal){
            self::$total=$stotal;
        }
        public static function getTotal(){
            return self::$total;
        }
    }

    class car extends vehicle{
        public $color = "red";
        public function start(){
            echo "vroom vroom\n";
        }

        public function vehicle_start(){
            parent::start();
        }
    }

    $toyota = new car();
    $toyota->start();
    $toyota->vehicle_start();
    vehicle::$total = 25;
    $total = vehicle::getTotal();
    echo "old total :".$total;
    
    vehicle::setTotal(35);
    echo vehicle::getTotal();

?>