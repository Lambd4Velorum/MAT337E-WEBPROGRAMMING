 <?php 
 abstract class A {
      public $a; 
      function setA($x) { 
         $this->a = $x ;
      } 
 } 

 class B extends A { 
      function display() { 
          print "a: $this->a";
      } 
 }
  //  $ob=new A; // yanlis soyut sınıf için nesne tanımlanamaz
    $ob=new B;
    $ob->setA(6);
    $ob->display();

 ?> 
        