<?php
  $link=mysqli_connect("localhost","root","1234","muzaffer") or 
     die ("Could not connect to MySQL or access to database\n");
  $dosya=fopen("payfile","r");
  mysqli_query($link,"delete from PAY");
  while(!feof($dosya)){
      fscanf($dosya,"%d%d%s%s",$kod,$ucret,$bolum,$medeni);
      mysqli_query($link,"insert into PAY values($kod, $ucret,'$bolum',
     '$medeni')") or die ("ERROR!\n") ;
  }
  $query="select * from PAY";
  $result = mysqli_query ($link,$query) or die ("<tr> <th> HATALI QUERY ");
  $genel_top=mysqli_num_rows($result);
  if ($genel_top < 1) echo "<tr><th>SONUC YOK";
  include "yazdir.php";
  
?>