<?php
   $link=mysqli_connect("localhost","root","1234","muzaffer") or 
   die ("Could not connect to MySQL or access to database\n");
   $sonuc=mysqli_query($link,"select * from T4 ");
   if ($sonuc) mysqli_query($link,"drop table T4 ") ;
   mysqli_query($link,"create table T4 select AD,SOYAD from T1 limit 0,15") or 
   die ("Table not created"); 

   $query="select * from T4";
   $result = mysqli_query ($link,$query) or die("<tr><th>HATALI QUERY");
   $genel_top=mysqli_num_rows($result);
   if ($genel_top < 1) echo "<tr><th>SONUC YOK";
   include "yazdir.php"; 
 ?>