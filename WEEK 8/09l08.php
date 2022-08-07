 <?php
   $link=mysqli_connect("localhost", "root","1234","muzaffer") or 
   die ("Could not connect to MySQL or access to database\n");
   $query="select * from sayac";
   $result = mysqli_query ($link,$query) or die("<tr><th>HATALI QUERY");
   $genel_top=mysqli_num_rows($result);
   if ($genel_top < 1) echo "<tr><th>SONUC YOK";
   echo " <img src=sayac.php?SAYFAID=09l08.php  height=0 >";
   include "yazdir.php";
   ?>