<?php
    class A {
         public $marka="RENO";
         public function mark() {
             return $this->marka;
        }
    }
    class B extends A {
         public function model($mod) {
             print A::mark()." ".$mod."\n";
        }
    }
    $oto = new B;
    print $oto->mark()."\n";
    $oto->model("Megan");
    
?> 