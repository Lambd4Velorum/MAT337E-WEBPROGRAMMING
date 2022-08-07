<?php
  $kisiler=array(array("Ad"=>"Mehmet","Soyad"=>"Kucuk"),
               array("Ad"=>"Hasan","Soyad"=>"Unlu"),
               array("Ad"=>"Kemal","Soyad"=>"Koymen"));
   
   foreach($kisiler as $row){
      while(list($key,$value)=each($row))
         print "$key: $value " ;
      print "\n";
   }
   foreach($kisiler as $row){
      while(list($key,$value)=each($row))
         print "$value " ;
      print "\n";
   }
 
?>  
