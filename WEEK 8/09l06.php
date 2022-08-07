<?php   session_start(); $sira=""; ?>
<form action="09l06.php" method="post"> 
<table bgcolor=white  border=2  align=center>
<tr><th>SORGU NO<td><input  type="text"  name=sira   value="<?php echo $_SESSION['sir']; ?>"  
 size=2 > 
<td align=center><input  type="submit" name=gonderim value= "gonder" 
    size=2  >
 </table ></form>
<table bgcolor=white  border=2  align=center>
<?php
  extract($_POST);
  extract($_REQUEST);
  $_SESSION['sir']=$sira;
  $fb=fopen("queryf1","r");
  $i=1;
  if ($sira){
      while(!feof($fb)){
         $query=fgets($fb,300);
         if ($sira>27) exit;
         if ($sira==$i){ 
            $_SESSION['s1']=$query;
            break;
         }   
         $i++;
      } 
      echo "<tr><td><input type=text size=120 value=\"$query\" >" ;
      echo "</table>";
      echo " <img src=sayac.php?SAYFAID=09l06.php height=0 > ";
      echo "<table bgcolor=yellow align=center size=30>";
      echo "<tr><th> <a href='09l07.php'>SONUCLAR ICIN TIKLAYINIZ</a> ";
  }
?>
