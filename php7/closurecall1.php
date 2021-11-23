<?php
   class A {
      private $x = 1;
   }

   $value = function() {
      return $this->x;
   };
   print($value->call(new A));
?>