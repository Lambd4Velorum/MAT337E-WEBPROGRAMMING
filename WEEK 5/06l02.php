<html><br>
<form action="06l02.php" method="post">
<table border=3 align=center bgcolor=maroon  height=75>       
<tr bgcolor=pink><th> SORGU <th>SIRALAMA <th> 
<tr bgcolor=aqua> 
<td><SELECT name="sorgu" type="text" >
    <OPTION VALUE  ="AD">AD</OPTION>
    <OPTION VALUE ="SOYAD">SOYAD</OPTION> 
    <OPTION VALUE ="BOLUM">BOLUM</OPTION>
    <OPTION VALUE ="NOTU">NOT</OPTION>
</SELECT>
<td><SELECT name="sira" type="text">
    <OPTION VALUE ="KUCUK">KUCUK=>BUYUK</OPTION>
    <OPTION VALUE ="BUYUK">BUYUK=>KUCUK</OPTION>
</SELECT>
<td><input type="submit" name="gonderim" value="Gonder"> 
</table><br>
<?php  extract($_POST);
if ($gonderim){ 
     $fin=fopen("ogrenci.txt","r");    
     $i=0;      
     while(!feof($fin)){
         fscanf($fin,"%s%s%s%d\n",$adi,$soyadi,$bolumu,$notu);
         $data[0][$i]=$adi;
         $data[1][$i]=$soyadi;
         $data[2][$i]=$bolumu;
         $data[3][$i]=$notu;
         $i++;
     }
     $SORT_TYPE=SORT_STRING;
     if ($sorgu=="AD")
         $col=0;
     else if ($sorgu=="SOYAD")
         $col=1;
     else if ($sorgu=="BOLUM")
         $col=2;
     else {
         $col=3; 
         $SORT_TYPE=SORT_NUMERIC;
     }
     if ($sira=="BUYUK")
         $S=SORT_DESC;
     else 
         $S=SORT_ASC;
         
    array_multisort($data[$col],$SORT_TYPE,$S,$data[0],
                         $data[1], $data[2],$data[3]);
         
    echo ("<table bgcolor=yellow border=1 align=center cellpadding=3 
         cellspacing=4>");
    echo "<tr><th>ADI<th>SOYADI<th>BOLUMU<th>NOTU";
    for ($j=0; $j < $i ; $j++){ 
         echo "<tr bgcolor=aqua>";
         for ($k=0; $k < 4 ; $k++){
             echo "<td>".$data[$k][$j]."</td>";
         }
         echo "</tr>";
    }
}
?>
</table></form></html>