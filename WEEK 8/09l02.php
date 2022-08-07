<?php
   $link=mysqli_connect("localhost","root","1234","muzaffer") or 
   die ("Could not connect to MySQL or access to database\n");
   $dosya=fopen("ogrenci1.data","r");
   mysqli_query($link,"delete from T1");
   while(!feof($dosya)){
       fscanf($dosya,"%d%s%s%s",$id,$ad,$soyad,$bolum);
       mysqli_query($link,"insert into T1 values($id,'$ad','$soyad','$bolum')") or 
       die ("Not inserting"); 
   } 
   $query="select * from T1";
   $result = mysqli_query ($link,$query) or die("<tr><th>HATALI QUERY");
   $genel_top=mysqli_num_rows($result);
   if ($genel_top < 1) echo "<tr><th>SONUC YOK";
   include "yazdir.php"; 
?>