<?php
$str1="Bay Murat Demirci";
print $str1."\n"; 
$str2= substr_replace($str1,"Erdem",-7);
print $str2."\n";
$str2= substr_replace($str1,"Yaşar",4,5);
print $str2."\n";
if (strstr($str1,"Murat")){     //case sensitive
   $s=strstr($str1,"Murat");
    print $s."\n";
}
if (stristr($str1,"murat")){
   $s=stristr($str1,"murat");
    print $s."\n";
}
print substr($str1,-7,5)."\n";
$str3="Linux'u seviyorum, cunku Linux daha guvenli bir isletim sistemidir";
$ystr3=str_replace("Linux","Windows",$str3);
print $ystr3."\n";
$str=addslashes($str3);
print $str."\n";
$str=stripslashes($str);
print $str."\n";
?>    
