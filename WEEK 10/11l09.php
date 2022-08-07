<?php
class Poligon {
   public $uzunluk1, $uzunluk2;
   public function __construct ($a, $b){ 
       $this->uzunluk1=$a; 
       $this->uzunluk2=$b; 
   }
}  
class Dikdörtgen extends Poligon {
   public function alan (){ 
       return ($this->uzunluk1 * $this->uzunluk2); }
   }
class Üçgen extends Poligon {
   public function alan (){ 
       return ($this->uzunluk1 * $this->uzunluk2 / 2); }
   }

  $ob1=new Dikdörtgen(5,8); 
  $ob2=new Üçgen(7,8);
  print $ob1->alan()."\n";
  print $ob2->alan();

?>

