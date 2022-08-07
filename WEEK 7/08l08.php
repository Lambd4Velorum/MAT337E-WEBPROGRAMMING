<br><html><body>
<form  method="post"  action="08l08.php"  >
   <TABLE border=3 align=center bgcolor=aqua>
      <tr><td  bgcolor=yellow align=right>Adiniz:
          <INPUT type="text" NAME="adi" SIZE="10" value= >
      <tr><td bgcolor=yellow align=right>Sifreniz:<INPUT type="password" 
               NAME="sifresi" SIZE="10"  value=   >
      <tr><td bgcolor=pink align=right><INPUT type="submit" NAME="gonderim" size="3" 
           value=gonder   > 
</form></table></body></html><br>
<?php  extract($_POST); 
echo "<TABLE  align=center bgcolor= yellow> ";
if ($_POST['adi']!="" and $_POST['sifresi']!="" ){
    $link=mysqli_connect("localhost", "root","1234","muzaffer") or die ("Not connected MySQL or accessed database\n");
    if (mysqli_num_rows(mysqli_query($link,"select ad,sifre from USERS where ad='$adi' and
    sifre='$sifresi' "))){
       echo "<tr><th size=9 bgcolor=green align=center>$adi</tr>";
       echo "<tr><th><a href=09l06.php>SITEYE HOSGELDINIZ</a> </tr> ";
    }
    else { $mesaj="YANLIS GIRIS YAPTINIZ";
       echo "<tr><th size=9 bgcolor=\"red\" align=left>$mesaj</tr>";
       echo "<th size=9 bgcolor=aqua align=center> <a href=08l08.php> TEKRAR  
       DENEYINIZ </a>"; 
    }
} 
else echo "<tr><th>ADINIZI ve SIFRENIZI GIRINIZ";
?>
