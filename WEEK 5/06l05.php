 <form action="06l05.php" method="post">  
 <table align=center height=10 border=2 width=100> 
   <tr><th colspan=3 bgcolor=yellow> RANDOM SAYILAR 
   <tr bgcolor=pink> <th>ILK<th>SON<th>ADET
   <tr> <td><input type=text name="n1" size=8 value="<?php echo $n1 ?>"> 
        <td><input type=text name="n2" size=8 value="<?php echo $n2 ?>">
        <td><input type=text name="n" size=8 value="<?php echo $n ?>"> 
   <tr bgcolor=#F507070 align=center><td colspan=2><td><input type="submit" name="gonderim" 
          value="Gonder">     </table>
<?php   
extract($_POST);
if ($gonderim){
        if ($n1=="" or $n2=="" or $n=="") exit(0);
        $s=0;
         while($s<$n){   
             $rnum=rand($n1,$n2);
             for ($m=0; $m < count($arr) ; $m++)   
                  if ($arr[$m]==$rnum) break;
             if ($m==count($arr)) $arr[$s++]=$rnum;
         }
         echo "<br> <br> ";
         sort ($arr);
         $k=0;
 echo "<table align=center bgcolor=blue border=2 width=200 height=10 >";
 echo "<tr cellspacing=1 cellpading=1 > <th bgcolor=yellow colspan= 10 > <pre><h2>  R A N D O M  S A Y I L A R </th>";
     for ($i=0; $i < $s ; $i++){  
         if ($k%10==0){echo "</tr>"; }
         if ($k%2==0) echo " <td align=center bgcolor=white><h2>$arr[$i]</td>";
         else echo "<td align=center bgcolor=silver><h2>$arr[$i]</td>";
         $k+=1;
     }  
}
?> 
    
