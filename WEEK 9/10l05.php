<?php
$ay=array(" ","Ocak","Şubat","Mart","Nisan","Mayıs","Haziran","Temmuz",
             "Ağustos","Eylül","Ekim","Kasım","Aralık");
$gun=array("Pazar","Pazartesi","Salı","Çarşamba","Perşembe","Cuma",
               "Cumartesi");
$tarih=date("j n w");
print ($tarih)." -> j -> Ayın Kaçı, n-> Kaçıncı Ay, w -> Haftanın kaçıncı günü "."\n";
print date("j")." ".$ay[date("n")]." ".date("Y")." ".$gun[date("w")]."\n";
//getdate fonksiyonunun parametreleri
$tarih=getdate();
print_r ($tarih);
//getdate fonksiyonuna göre tarih yazdırma
print $tarih["mday"]." ".$tarih["month"]." ".$tarih["year"]." ".$tarih["weekday"]."\n";
//date fonksiyonuna göre tarih yazdırma
$tarih=date("d F Y l");
print_r ($tarih);

?>    
