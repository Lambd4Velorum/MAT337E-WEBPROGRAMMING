<?php
//Exceptionlar hata bulmak için kullanılan metodlar olup Java , C++ ve
// PHP 5 gibi programlama dillerinde  mevcuttur. Hata durumları  
// "try" - "catch" kullanılarak tespit edilir.
  class A { 
      function divide($x,$y) { 
          if($y==0) throw new exception("zero divide is not allowed\n"); 
          return $x/$y; 
      } 
  } 

    $x = new A(); 
    try { 
       print $x->divide(6,2)."\n";
       print $x->divide(8,0);    
    } catch (exception $ex) { 
       print $ex->getMessage(); 
       print "\n";
    } 
    ?> 