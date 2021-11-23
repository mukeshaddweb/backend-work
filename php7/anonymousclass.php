<?php
   interface PrintMessage {
      public function log(string $message);
   }


   class Application {
      private $printmessage;


      public function getLogger(): PrintMessage {
         return $this->printmessage;
      }


      public function setLogger(PrintMessage $printmessage) {
         $this->printmessage = $printmessage;
        }  
    }
 
 
    $app = new Application;
    $app->setLogger(new class implements PrintMessage {
       public function log(string $message) {
          print($message);
       }
    });
 
 
    $app->getLogger()->log("My first Message");
 ?>
 