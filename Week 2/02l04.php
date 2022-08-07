<?php
  $kisiler=array(array("Mehmet","Kucuk",23),
               array("Hasan","Unlu",21),
               array("Kemal","Koymen",22));
   
   foreach($kisiler as $row){
      while(list($key,$value)=each($row))
         print "$value " ;
      print "\n";
   }
   print "\n";
   for ($i=0;$i<3; $i++){
       for ($j=0;$j<3; $j++){
           $m=$kisiler[$i][$j];
           print "$m ";
       } 
       print "\n";
   }
   print "\n";   
?>  
