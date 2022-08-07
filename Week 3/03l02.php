<?php
    $f1=fopen("f4.txt","r");
    for ($i=0; $i< 250 ; $i++){
       $arr[$i]=0;
    }
    while( ( $ch=fgetc($f1) ) !=false){
        $i=ord($ch);   //Returns the ASCII value of a character
        $arr[$i]+=1;
    }
    for ($i=65; $i< 250 ; $i++){
        if ($arr[$i]==0) continue;
        $ch=chr ($i);  //Returns a character from the ASCII value
        print "$ch  $arr[$i]\n";
   }      
     
?>  
