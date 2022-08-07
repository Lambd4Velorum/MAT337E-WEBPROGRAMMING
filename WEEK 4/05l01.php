<?php
 $arr1=array(array(3,7,6,4,8,7),
             array(3,5,8,7,5,4),
             array(4,2,1,9,3,2));
          
 echo "<table bgcolor=aqua align=center border=3 >" ;
 echo "<tr bgcolor=yellow ><th colspan=6 align=center> MATRIX ELEMANLARI";
 echo "<tr>";   
 for ($i=0;$i<3; $i++){
    for ($j=0;$j<6; $j++){
      $m=$arr1[$i][$j];
      echo "<td width=40 align=center>$m</td>";
    } 
    echo "</tr>";
 }
 echo "</table>";
 echo "<br>";

 $arr2["Ali"]=28;  $arr2["Hasan"]=48;  $arr2["Ayse"]=37;
 echo "<table bgcolor=aqua align=center border=2 >" ;
 echo "<tr bgcolor=yellow><th>AD<th align=center> YAS"; 
 foreach($arr2 as $name => $age)
     echo"<tr> <td>$name <td align=center> $age</tr>";  
     
 echo "</table>"; 
 ?>    
