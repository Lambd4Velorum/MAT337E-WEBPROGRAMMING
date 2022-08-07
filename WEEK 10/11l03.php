<?php
// __set and __get metodlarını kullanarak henüz tanımlanmamış degişkenleri 
// izlemek ve değer atamak
class A { 
    function __get($name) { 
         print(" $name isimli değişkene ulaşmak\n"); 
    }
    function __set($name,$val) { 
       print(" $name isimli Değişkene, $val değeri atamak\n");
      // if ($name=="x")
           $this->x=$val;
      // if ($name=="y")
           $this->y=$val;  
    } 
    function hesapla(){
         return ($this->x*$this->y)."\n";
    }   
} 
   $ob = new A();
   $ob->x;          //calling function __get   
   $ob->x=3;        //calling function __set
   $ob->y;          //calling function __get
   $ob->y=5;        //calling function __set
   print $ob->hesapla(); 

 ?> 
