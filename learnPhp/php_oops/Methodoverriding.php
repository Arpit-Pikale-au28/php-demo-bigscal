<?php
   class Robot {

      public function greet() {
           echo "Hi I am Robot";
      }
   }
   class Android extends Robot{
        
       public function greet(){
           $greeting = parent::greet();
           return  $greeting. " from Android";
       }
   }

$obj1 = new Android();
echo $obj1->greet();
?>