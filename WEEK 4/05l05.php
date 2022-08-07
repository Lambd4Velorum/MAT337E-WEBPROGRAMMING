 <?php  extract($_POST);
 $dosout=fopen("dos.txt","a+");
 if ($ad!="" and $soyad!=""){
     fwrite($dosout,"$ad $soyad $bolum\n");
 }
?>
