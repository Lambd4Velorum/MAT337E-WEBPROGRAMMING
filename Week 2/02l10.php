<?php
   $username="gokhan"; $pass="deniz";
   $namesifre=md5($username);
   $passsifre=md5($pass);
   print "$namesifre.\n"; print "$passsifre.\n";
   if ( $namesifre==md5($username) and $passsifre==md5($pass ))
       print "Kullanici adi ve sifre dogru.\n";
   else   print "Kullanici adi veya sifreniz yanlis.\n";
   $str="ali   mehmet       veli hasan";
   sscanf($str,"%s%s%s%s",$a,$b,$c,$d);
   print $a."  ".$b."  ".$c."  ".$d."\n"; 
   $str="ad1=ali+&ad2=mehmet+&ad3=veli+&ad4=hasan";
   parse_str($str);
   print $ad1."  ".$ad2."  ".$ad3."  ".$ad4."\n\n";
   parse_str($str,$ARR);
   while(list($key,$value)=each($ARR))
       print "$key : $value\n" ;
   print "\n";            
?>    
