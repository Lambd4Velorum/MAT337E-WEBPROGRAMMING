<?php
$arr=array_fill(0,6,0);
$s=0;
while($s < 6){        
    $rnum=rand(1,49);  
    for ($k=0; $k < 6 ; $k++)
        if ($arr[$k]==$rnum) break;
    if ($k==6) $arr[$s++]=$rnum; 
}
echo "<br> <br> ";
sort($arr);
$k=0; 
echo "<table align=center bgcolor=blue border=2 width=400 height=100>";
      echo "<tr><th bgcolor=yellow   colspan=6><h1> LOTO </th> </tr>";
for ($i=0; $i < 6 ; $i++){  
  if ($k%2==0) echo "<td width=%16 bgcolor=white align=center><h1>$arr[$i]</td>";
  else echo "<td width=%16 bgcolor=silver align=center> <h1> $arr[$i]</td>";
  $k+=1;
}    
?>
</table> 
<form action="06l06.php" method="post">  
      <table align=center bgcolor=#F999999 height=30 border=2 width=60 >         
      <td > <input type="submit" name="gonderim" value="Gonder"> 
      </table> </form> 
