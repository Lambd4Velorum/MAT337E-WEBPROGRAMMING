<?php
   $link=mysqli_connect("localhost","root","1234","muzaffer") or 
   die ("Could not connect to MySQL or access to database\n");
   $dosya=fopen("ogrenci2.data","r");
   mysqli_query($link,"delete from T2");
   while(!feof($dosya)){
       fscanf($dosya,"%d%d%d",$id,$mat,$fiz);
       mysqli_query($link,"insert into T2 values($id ,$mat, $fiz)") or die ("Not inserting"); 
   }
   $query="select * from T2";
   $result = mysqli_query ($link,$query) or die("<tr><th>HATALI QUERY");
   $genel_top=mysqli_num_rows($result);
   if ($genel_top < 1) echo "<tr><th>SONUC YOK";
   include "yazdir.php"; 
  
?>