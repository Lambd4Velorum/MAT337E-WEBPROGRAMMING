<html>
<br><br><br> 
<?php
extract($_POST);
function fonk($a,$b,$oper){
   if ($a=="") return "";
   if ($oper==1)
        return pow($a,$b);
   else
        return pow($a,1.0/$b);
   }
?>
<form  method="post"  action="05l03.php"  >
<table align=center width=300 height=100 bgcolor=pink>
  <tr><th bgcolor=yellow colspan=5>KOK VEYA UST BULUR 
  <tr bgcolor=aqua><th>SAYI<th>DEGREE<th>SECIM<th>SONUC
  <tr>
      <td><INPUT type=text NAME=a SIZE=12 value="<?php echo $a ?>" > 
      <td><INPUT type="text" NAME="b" size="8" value="<?php echo $b ?>" > 
      <td><SELECT NAME="oper" type="text" align=center> 
              <OPTION VALUE ="1">UST</OPTION>
              <OPTION VALUE ="0">KOK</OPTION>
          </SELECT>  
      <td><INPUT type="text" NAME="d" size="18" value="<?php 
           echo fonk($a,$b,$oper) ?>" >
      <td><INPUT type="submit" NAME="gonderim" size="3" value="gonder" > 
</table></form></html>
