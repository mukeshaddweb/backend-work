<?php
    class vehicle{
        public $type;
        public $brand;
        public $color;

        function __construct($type, $brand, $color){
            $this->type = $type;
            $this->brand = $brand;
            $this->color = $color;
        }

        public function getType(){
            return $this->type;
        }
        public function getbrand(){
            return $this->brand;
        }
        public function getcolor(){
            return $this->color;
        }
    }

    $vehicle1 = new vehicle('car', 'toyota', 'red');
    echo "this is a ".$vehicle1->color." ".$vehicle1->brand." ".$vehicle1->type.".";

    
?>