<?php
    //file() reads a file into an array
    $arr=file("f1.txt");
    foreach($arr as $satir){ 
         print $satir;
    }
    print "\n\n";
    $arr=file("f1.txt");
    while(list($sayi,$satir)=each ($arr)){
        print "$sayi $satir";
    }
    print "\n"; 
   
    ?>