<?php
class A {
  public $x=6;
  const data1 = "Hello";
  static  $data2 = "World!";
}

 $obj = new A(); 
 print  $obj->x."\n";      
 $d1 = A::data1;  
 $d2 = A::$data2;  
 print $d1." ".$d2."\n";
?>
