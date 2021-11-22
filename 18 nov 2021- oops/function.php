<?php
    class vehicle{
        private $a;
        private $b;
        function __construct($a, $b){
            $this->a = $a;
            $this->b = $b;
        }

        function getA(){
            return $this->a;
        }

        function getB(){
            return $this->b;
        }

        function sum($c = 0, $d = 0){
            return $c+$d;
        }
    }

    $vehicle1 = new vehicle(4,5);
    $a=$vehicle1->getA();
    $b=$vehicle1->getB();
    echo $vehicle1->sum($a, $b);
    
?>