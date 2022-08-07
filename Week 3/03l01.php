<?php
    $f1=fopen("f1.txt","r");
    $f2=fopen("f2.txt","w");
    $f3=fopen("f3.txt","w");
    $f4=fopen("f4.txt","w");
    while(!feof($f1)){
       fscanf($f1 ,"%s %s %s\n",$ad,$soyad,$bolum);
       fwrite($f2 ,"$ad $soyad $bolum\n");
       fprintf($f3,"%-10s %-10s %-10s\n",$ad,$soyad,$bolum);
    }    
    fclose($f1); fclose($f2);
    $f2=fopen("f2.txt","r");
    while(!feof($f2)){
       $rec=fgets($f2,"80");
       print "$rec";
       fputs($f4,$rec);
    }
    print "\n";   
    $f1=fopen("f1.txt","r");      
    while( ( $ch=fgetc($f1) ) !=false){
        print "$ch";
    }
?>  
