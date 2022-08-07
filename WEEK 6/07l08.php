
<br>
<?php  extract($_REQUEST);
  include "baglan.php";
  echo "  <table bgcolor=blue  border=1 cellpadding=5 cellspacing=3 
  align=center >";
  $result=mysqli_query($link,"describe $tablo");
  if (!$result) {echo "<tr> <th align=center bgcolor=red>$tablo ISIMLI BIR TABLO YOK" ; 
  exit();}
  //Print column names  
  echo "<tr><th align=center colspan=6 bgcolor=pink>$tablo TABLOSU</th>";
  $line = mysqli_fetch_array($result) or die ("Sonuc Yok");
  echo "<tr bgcolor=yellow>";
  while(each($line)){
       list($col_name, $col_value) =each($line);
       echo "<th>$col_name</th>";
  }
 //Print data in columns 
  $result=mysqli_query($link,"describe $tablo");  
  while($line = mysqli_fetch_array($result)){
       echo "<tr>";
       while(each($line)){
            list($col_name, $col_value) =each($line);
            echo  "<td bgcolor=aqua>$col_value</td>";
       }
       echo "</tr>";
  }
  print "</table>";
  mysqli_close($link);
?>
