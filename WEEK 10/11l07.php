<?php
class A {
   var $x=5;
   public function af1($str){ print"$str function af1'i çağırıyor\n";}         
   public function af2($str) {print"$str function af2'i çağırıyor \n";}
}
class B extends A {
   public function bf($str) { print"$str function bf'i  çağırıyor\n";}
}
class C extends B {
   public function cf1($str) {print"$str function cf1'i çağırıyor\n";}
   public function cf2($str) {print"$str function cf2'i çağırıyor\n "; 
       parent::af2("cf2 içerisinden");
       B::bf(" cf2 içerisinden"); }
 
}

 $a= new A; $b= new B; $c = new C;
 $a->af1("Nesne a");  $a->af2("Nesne a");print "\n";
 $b->af1("Nesne b") ;  $b->af2("Nesne b"); $b->bf("Nesne b"); print "\n";
 $c->af1("Nesne c"); $c->bf("Nesne c"); $c->cf1("Nesne c"); $c->cf2("Nesne c");

 print "$c->x \n";
 
?>