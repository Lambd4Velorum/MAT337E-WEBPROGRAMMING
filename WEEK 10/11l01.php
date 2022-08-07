<?php
class A {
    public $x,$y,$sonuc;
    public function atama($a,$b) { 
         $this->x=$a;
         $this->y=$b;  
    } 
    public function hesapla(){
         $this->sonuc= ($this->x*$this->y);
    }  
    public function yazdir(){
         print $this->sonuc."\n";
    }
     
} 
  $ob = new A; 
  $ob->atama(3,5);
  $ob->hesapla(); 
  $ob->yazdir(); 

?> 
