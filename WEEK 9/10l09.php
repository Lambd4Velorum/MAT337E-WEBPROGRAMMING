 <?php
extract($_REQUEST);
if ($sil==1){
     echo ($_COOKIE['kullanici'])."<br>";
     echo "cookie SILINIYOR  <br>";
     unset($_COOKIE['kullanici']);
     echo "cookie SILINDI<br>";
     echo ($_COOKIE['kullanici'])."<br>";
     exit();
}   
setcookie("kullanici","ali",time()+100);
if ($_COOKIE["kullanici"]){
     echo "Bu cookinin adi : ".$_COOKIE['kullanici'];
     echo "<br>Bu cookie silmek icin <a href=?sil=1> siliniz</a>";
}                            
  
  
?>
