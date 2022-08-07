<?php
$adress1="name@example.com.tr";
$adress2="name  example    com   tr"; 
 $arr=preg_split("/[@.]/",$adress1);
while ( list ($key , $value)=each($arr))
     print "$key $value"."\n"; 
print "\n";

$arr=preg_split('/ /',$adress2);
while ( list ($key , $value)=each($arr)){
     if ($value=="") continue;
     $str[]=$value;
     print "$key $value"."\n";
}     
print "\n";
while ( list ($key , $value)=each($str)){
     print "$key $value"."\n";
}     

?>    
