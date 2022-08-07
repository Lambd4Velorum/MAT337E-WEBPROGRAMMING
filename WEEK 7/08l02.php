<?php  
   $link=mysqli_connect("localhost","root","1234","muzaffer") or 
      die ("Could not connect to MySQL or access to database\n");
   $dosya=fopen("empfile","r");
   mysqli_query($link,"delete from EMP");
   while(!feof($dosya)){
       fscanf($dosya,"%d%s%s",$kod,$adi,$soyadi);
       mysqli_query($link,"insert into EMP values($kod,'$adi','$soyadi')") or die ("mysqli_error($link)"); 
   }
   $query="select * from EMP";
   $result = mysqli_query ($link,$query) 
   or die ("<tr> <th> HATALI QUERY ");
   $genel_top=mysqli_num_rows($result);
   if ($genel_top < 1) echo "<tr><th>SONUC YOK";
   include "yazdir.php";  
?>