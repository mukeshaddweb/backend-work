<?php
   class A {
      private $x = 1;
   }
   $getValue = function() {
      return $this->x;
   };
   $value = $getValue->bindTo(new A, 'A'); 
   print($value());
?>
<?php
   class A {
      private $x = 1;
   }

   $value = function() {
      return $this->x;
   };
   print($value->call(new A));
?>
