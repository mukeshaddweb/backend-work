<?php
    class vehicle{
        public $type;
        public $brand;

        public function setType($type){
            $this->type = $type;
        }
        public function setBrand($brand){
            $this->brand = $brand;
        }
        public function getType(){
            return $this->type;
        }
    }

    $car1 = new vehicle();
    $car1->setType('car');
    $car1->setBrand('toyota');

    echo $car1->getType();
?>