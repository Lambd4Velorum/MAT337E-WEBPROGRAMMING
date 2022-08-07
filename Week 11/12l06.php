<?php 
  class A { 
      var $a; 
      function setX($x) { 
          $this->a = $x; 
      } 
      function getX() { 
          return $this->a; 
      }
  } 
   $o1 = new A; 
   $o1->setX(4); 
   $o2 = clone $o1;
   print $o1->getX()."\n";
   print $o2->getX()."\n";
   $o1->setX(5); 
   print $o1->getX()."\n";
   print $o2->getX()."\n";
   if($o1->getX() != $o2->getX()) print("5 4'e ESIT DEGIL\n"); 
 ?>