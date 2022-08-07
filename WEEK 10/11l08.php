<?php
class overloading{
  function __call($method, $args){
     if($method == "söyle"){
         if(count($args) == 0){
             $this->birşeysöyleme();
         }
         elseif(count($args) == 1){
            if(is_array($args[0])){
               $this->cümleArray($args[0]);
            }else{
               $this->bircümle($args[0]);
            }
        }
        elseif(count($args) == 2){
             $this->ikicümle($args[0], $args[1]);
        }
        else{
          return false;
        }
    }
  }
  
  function birşeysöyleme(){
     echo "Söyleyecek bir sözüm yok.\n";
  }
  function bircümle($sentence){
     echo $sentence."\n";
  }
  function ikicümle($birinci,$ikinci){
     echo $birinci . "." . $ikinci . "."."\n";
  }
  function cümleArray($arr){
     foreach($arr as $s){
        $this->bircümle($s .".");
     }
  } 
}
$o = new overloading();
$o->söyle();
$o->söyle("Bir cümle");
$o->söyle("Birinci Cümle","İkinci Cümle");
$o->söyle(array("Merhaba ben Mehmet","Tanişdığımıza memnun oldum","Ben de"));

?>