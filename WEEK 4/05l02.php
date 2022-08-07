<html>
<br><br><br><br> 
<?php
extract($_POST);
function fonk($a,$b,$oper){
    if ($oper=='+' ) return $a+$b; 
    else if ($oper=='-') return $a-$b;
    else if ($oper=='*') return $a*$b;
    else if ($oper=='/') return number_format($a/$b,2);
 }
?>
<FORM  method="post"  action="05l02.php"  >
<table align=center width=300 height=100 bgcolor=pink>
  <tr><th colspan=5 bgcolor=aqua>DORT ISLEM
  <tr><th bgcolor=yellow>OPERAND1<th bgcolor=yellow>OP<th bgcolor=yellow>
     OPERAND2<th bgcolor=yellow align=center>SONUC 
  <tr>
    <td> <INPUT type="text" NAME="a" SIZE="12" value="<?php echo $a ?>" > 
    <td><SELECT NAME="oper" type="text" align=center> 
                   <OPTION VALUE ="+">+</OPTION>
                   <OPTION VALUE ="-">-</OPTION>
                   <OPTION VALUE ="*">*</OPTION> 
                   <OPTION VALUE ="/">/</OPTION>
                   </SELECT>
 
    <td><INPUT type="text"  NAME="b" size="12" value="<?php echo $b ?>" > 
    <td><INPUT type="text" NAME="s" size="18" value="<?php 
         echo fonk($a,$b,$oper) ?>" >
    <td bgcolor=silver>
       <INPUT type="submit" NAME="gonderim" size="5" value="gonder" > 
</table></html>
