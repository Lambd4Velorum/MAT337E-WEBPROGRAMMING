<?php
printf ("date(\"Y-M-D\") -> %s \n",date("Y-M-D"));
printf ("date(\"Y-m-d\") -> %s \n",date("Y-m-d"));
printf ("date(\"d-m-Y\") -> %s \n",date("d-m-Y"));
printf ("date(\"D-M-Y\") -> %s \n",date("D-M-Y"));
printf ("date(\"d-m-Y l g:i:s\") -> %s \n",date("d-m-Y l g:i:s "));
printf ("date(\"d/m/Y l g:i:s\") -> %s \n",date("d/m/Y l g:i:s")) ;
$ileritarih=mktime(0,0,0,date("m")+4,date("d")+2,date("Y"));
print date("d m Y l H:i:s",$ileritarih)."\n";
printf ("date(\"Y\") -> %s \n",date("Y"));
printf ("date(\"y\") -> %s \n",date("y")) ;
printf ("date(\"F\") -> %s \n",date("F")) ;
printf ("date(\"M\") -> %s \n",date("M")) ;
printf ("date(\"m\") -> %s \n",date("m")) ;
printf ("date(\"l\") -> %s \n",date("l")) ;
printf ("date(\"D\") -> %s \n",date("D")) ;
printf ("date(\"d\") -> %s \n",date("d")) ;
printf ("date(\"w\") -> %s \n",date("w")) ;
?>    
