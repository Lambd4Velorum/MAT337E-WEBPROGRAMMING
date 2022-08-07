<?php
   $arr1=array(5,7,8,1); $arr2=array(10,11,12);
   $arr3=array_merge($arr1,$arr2);
   $arr4=array(array(11,12,16,14,18,17),
               array(24,25,28,27,25,24),
               array(35,32,31,39,33,32));
   
   for ($i=0;$i<count($arr3); $i++)
       print $arr3[$i]." "; 
       print "\n\n"; 
   while(list($key,$value)=each($arr1))
       print "$key $value\n" ;
   print "\n";
   for ($i=0;$i<3; $i++){
       for ($j=0;$j<6; $j++){
           $m=$arr4[$i][$j];
           print "$m ";
       } 
       print "\n";
   }
   print "\n";
   foreach($arr4 as $row){
      while(list($key,$value)=each($row))
         print "$value " ;
      print "\n";
   }
?>  
