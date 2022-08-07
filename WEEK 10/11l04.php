<?php
class A {
  public $data1, $data2;
  public function __construct($a, $b) {
      $this->data1 = $a;  // INITIALIZE $data1
      $this->data2 = $b;  // INITIALIZE $data2

  }
}

$obj = new A("Hello", "World!"); 
$d1 = $obj->data1;
$d2 = $obj->data2;
print $d1." ".$d2."\n";
print $obj->data1." ".$obj->data2."\n";

?>
