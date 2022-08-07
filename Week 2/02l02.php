<?php
   $renkler=array("red","orange","yellow","blue");
   $renkler[]="green";    
   $renk[]="red"; $renk[]="orange"; $renk[]="yellow"; $renk[]="blue"; 
   $kisi=array("Adi"=>"Mehmet","Soyadi"=>"Unlu","Bolumu"=> "Fizik");  
   for ($i=0; $i<count($renkler); $i++)
       print "$renkler[$i] ";
   print "\n\n";
   while(list($key,$value)=each($renk))
       print "$key $value\n" ;
          
   print "\n"; 
   while(list($key,$value)=each($kisi))
       print "$key : $value\n" ;
   print "\n";
   
   foreach($kisi as $key=>$value)
      print "$key : $value\n" ;
?>  
