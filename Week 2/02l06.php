<?php
  function yaz($arr){
     while(list($key,$value)=each($arr))
       print "$key $value\n" ;
       print "\n" ;
  }
  
  $fiyatlar=array("masa"=>"100","koltuk"=>"75","sandalye"=> "50");
  print "\nsort by values:\n"; 
  asort($fiyatlar);
  yaz($fiyatlar);
  print "sort by keys:\n";
  ksort($fiyatlar);
  yaz($fiyatlar);
  print "reverse sort by values:\n";
  arsort($fiyatlar);
  yaz($fiyatlar);
  print "reverse sort by keys:\n";
  krsort($fiyatlar);
  yaz($fiyatlar);
  
?>  
