<?php
 $str1="PHP onemli bir Web yazilim dilidir";
 $str="Web";  
 if (strstr($str1,$str)) print " \"$str\" katari bulundu\n";
 else print " \"$str\" katari bulunamadi.\n";
 $email="altintasm@itu.edu.tr";
 print strpos($email,"@")."\n";
 if ( strpos($email,"@")> 0)
      print "Dogru EMAIL adresi.\n";
 else   print "Yanlis EMAIL adresi.\n";

 if ( substr_count($email,"@")==1 and substr_count($email,".") > 0 )
       print "Dogru EMAIL adresi.\n";
 else   print "Yanlis EMAIL adresi.\n";
 $str="PHP'nin ogrenimi kolaydir. PHP kullanarak MySQL'e ulasmak mumkundur.
      HTML icerisine PHP komutlari yazilabilir.";
 if (preg_match("/PHP/",$str)) print "PHP\n";      
 print preg_match("/PHP/",$str)."\n";  
 $str=preg_replace("/PHP/","ASP",$str);print $str."\n";
 $str=str_replace("ASP","PHP",$str);
 print $str."\n";
       
?>    
