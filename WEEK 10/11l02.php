<?php
class A {
    public $x,$y,$sonuc;
    public function __construct($a,$b) { 
         $this->x=$a;
         $this->y=$b;  
    } 
    public function hesapla(){
         $this->sonuc= ($this->x*$this->y);
    }  
    public function yazdir(){
         print $this->sonuc."\n";
    }
    public function __destruct(){
      $this->sonuc;
    }    
} 
  $ob = new A(3,5); 
  $ob->hesapla(); 
  $ob->yazdir();


?> 
