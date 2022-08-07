<?php 
  class A { 
      private $private_x;
      public $x=9;
      public function public_A() { 
          print("It is public method\n"); 
      } 
      protected function protected_A() { 
          print("It is protected method\n");
          $this->private_A(); 
          print "private_x = $this->private_x\n" ;
            
      } 
      private function private_A() { 
          print("It is private method\n");
          $this->private_x = 3; 
      } 
  } 
  class B extends A { 
      public function display() { 
         $this->protected_A(); 
         $this->public_A();  
         A::public_A();      
     //  $this->private_A();  YANLIS
      } 
  } 

   $obA = new A(); 
   $obA->public_A();
   // print $obA->private_x; YANLIS 
   // $obA->protected_A();   YANLIS  
   // $obA->private_A();     YANLIS 
    $obB = new B(); 
    $obB->display(); 
    ?>
      