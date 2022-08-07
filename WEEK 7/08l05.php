<?php
 $link = mysqli_connect("localhost","root", "1234","muzaffer") or 
      die ("Could not connect to MySQL or access to database\n");
  $query="select * from T1";
  $result = mysqli_query($link,$query) or die ("Data Girilmedi!...");
  include "yazdir.php";
 
 ?>
    

