<?php
   trait Reader{
      public function add($num1,$num2){
         return $num1+$num2;
      }
   }
   trait writer {
      public function diff($num1,$num2){
         return $num1-$num2;
      }
   }
   class operation {
      use Reader;
      use writer;
      public function calculate($num1,$num2){
         echo "Addition:".$this->add($num1,$num2) ."\n";
         echo "Difference:".$this->diff($num1,$num2);
      }
   }
   $o1 = new operation();
   $o1->calculate(5,3);
?>
