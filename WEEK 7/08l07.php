<?php  extract($_REQUEST);
    session_start();
    $query=$_SESSION['s1']; ?>
    
<form action="08l07.php" method="post"> 
<table bgcolor=white  border=2  align=center>
<tr> <td><input  type="text"  name= "str"  value="<?php echo $query ?>" size=60 > 
<td align=center><input  type="submit" mame=gonderim value= "gonder"  size=2  >  
</table ></form>
  <?php
  echo "<table bgcolor=aqua align=center><tr>";
  $link=mysqli_connect("localhost", "root","1234","muzaffer") or 
      die ("Could not connect to MySQL or access to database\n");
  $result=mysqli_query($link,$query) or die (" <th> HATALI QUERY: <a href='08l06.php' >TEKRAR DENEYINIZ</a> ");
  $genel_top=mysqli_num_rows($result);
  if ($genel_top < 1) echo "<tr><th>SONUC YOK";
  if ($k==$genel_top) {
      echo "<tr> <th ><a href='08l06.php' >SORGUYA DEVAM</a>";
  }  
  include "yazdir.php";
  ?>
   
    

