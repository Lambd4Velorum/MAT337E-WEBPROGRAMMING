<html>  
<br><br><br><br>
<?php  extract($_POST);
   $arr=explode(" ", $a);
   if ($s==1)
      sort ($arr);
   else rsort($arr);   
?>
<form method="post" action="06l01.php" >
 <table width=600 height=60 align=center bgcolor=aqua> 
 <tr bgcolor=yellow><th >DIZI ELEMANLARI<th>SIRALAMA<th>SIRALANMIS DIZI<th>
 <tr> 
      <td><INPUT type="text" NAME="a" SIZE="30" value="<?php echo $a ?>" > 
      <td> <SELECT NAME="s" type="text" align=center> 
                   <OPTION VALUE ="1">KUCUK=>BUYUK</OPTION>
                   <OPTION VALUE ="0">BUYUK=>KUCUK</OPTION>
           </SELECT>  
      <td> <INPUT type="text"  size="30" value="<?php for ($i=0; 
              $i< count($arr); $i++)
            echo "$arr[$i] "; ?>" >
      <td> <INPUT type="submit" NAME="gonderim" size="5" value="gonder" > 
 </tr></form></html>