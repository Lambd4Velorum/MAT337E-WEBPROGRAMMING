<?php 
   $link=mysqli_connect("localhost","root","1234","muzaffer") or 
   die ("Could not connect to MySQL or access to database\n");
   $dosya=fopen("ogrenci3.data","r");
   mysqli_query($link,"delete from T3");
   while(!feof($dosya)){
       fscanf($dosya,"%s%s%s",$id,$lise,$ydil);
       mysqli_query($link,"insert into T3 values($id ,'$lise','$ydil')") or 
       die ("Not inserting"); 
   }
   $query="select * from T3";
   $result = mysqli_query ($link,$query) or die("<tr><th>HATALI QUERY");
   $genel_top=mysqli_num_rows($result);
   if ($genel_top < 1) echo "<tr><th>SONUC YOK";
   include "yazdir.php"; 
    
?>