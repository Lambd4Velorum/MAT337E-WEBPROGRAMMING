<?php 
 class A { 
     function __call($name,$arg) { 
        if($name=="FONK") { 
            if(is_int($arg[0])) {
                A::F_int($arg[0]); 
            }
            elseif(is_float($arg[0])) {
                A::F_float($arg[0]); 
            }
            elseif(is_array($arg[0]))
                $this->F_array($arg[0]);
            
            elseif(is_string($arg[0])) 
                $this->F_string($arg[0]); 
        } 
     } 
     private function F_int($x) {
        print "$x bir tamsayıdır.\n"; 
     } 
     private function F_float($x) {
        print "$x bir real sayıdır.\n"; 
     }
     private function F_array($x) {
        print("Dizi elemanları : "); 
        for ($i=0; $i<count($x); $i++)
          print $x[$i]." ";
        print "\n";
     }
     private function F_string($x) { 
        print("\"$x\" bir karakter dizisidir\n"); 
     } 
 } 
 $x = new A(); 
 $x->FONK(397); 
 $x->FONK(3.97);
 $x->FONK (array(3,8,9,12));
 $x->FONK("MEHMET");
 $x->FONK(array("ALI","VELI","HASAN","KEMAL"));
    ?>  
