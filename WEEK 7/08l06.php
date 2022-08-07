<?php  session_start(); $str="";  ?> 
<form action='08l06.php' method='post'> 
<table bgcolor=white  border=2  align=center>
<tr> <td><input  type=text  name=str  value="<?php echo $str ?>"  size=60 > 
<td align=center><input  type=submit mame=gonderim value=gonder size=2  >  
</table ></form> 
<?php    
  
extract($_REQUEST);
if ($str=="H"){ exit;}
echo "<table bgcolor=yellow align=center>" ;
if (empty($str) ) echo "<tr><th>LUTFEN SORGU GIRINIZ!!!";
else { 
    $_SESSION['s1']=$str;
    echo "<table bgcolor=yellow align=center>" ;
    echo "<tr><th><a href='08l07.php'>SONUCLAR ICIN TIKLAYINIZ</a>";
} 
?>

