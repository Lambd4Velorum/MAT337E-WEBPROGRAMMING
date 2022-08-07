<?php
    $f1=fopen("f1.txt","r");
    $fboyut=filesize("f1.txt");
    //The fread() reads from an open file.
    $tumdosya=fread($f1,$fboyut);
    $dizi=explode("\n",$tumdosya);
    foreach($dizi as $satir){ 
        list($ad,$soyad,$bolum)=explode(" ",$satir);
        print "$ad $soyad $bolum\n";
    }
    fclose($f1); 

 ?>