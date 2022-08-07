<html>
<br><br><br><br>
<?php
extract($_POST);
function fonk($a){
    if ($a=="") return "";     
    if($a< 0)  {echo "Negatif sayi olamaz";}
    else{ $faktor=1;
       for ($i=1 ; $i <=$a ; $i++) $faktor*=$i;
       return  number_format ($faktor,0); 
    }
} 
?>
<form  method="post"  action="05l04.php"  >
   <TABLE border=3 align=center bgcolor=blue>
       <tr><th colspan=3 bgcolor=yellow ><h3>FAKTORIYELI HESAPLANACAK SAYI 
       <tr>
          <td bgcolor=yellow><INPUT type="text" NAME="a" SIZE="5" value="<?php 
              echo $a ?>" > 
          <td bgcolor=yellow><INPUT type="text" NAME="b" SIZE="60" value="<?php 
             echo fonk($a) ?>" >
          <td bgcolor=yellow><INPUT type="submit" NAME="gonderim" size="3" 
          value="gonder" > 
</table></form></html>
