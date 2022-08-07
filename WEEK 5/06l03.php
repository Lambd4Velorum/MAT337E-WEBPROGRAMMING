<html><br><br>
<form action="06l03.php" method="post">
<table width=50 align=center bgcolor=blue><tr bgcolor=yellow>
       <th  colspan=3>AD, SOYAD, BOLUM ve NOT'A GORE SORGU</tr>
   <tr bgcolor=aqua><th align=center >SECIM<th align=center>DATA <th>
   <tr><td><SELECT name="sorgu" type="text" >
       <OPTION VALUE="AD">AD</OPTION>
       <OPTION VALUE ="SOYAD">SOYAD</OPTION>
       <OPTION VALUE ="BOLUM">BOLUM</OPTION>
       <OPTION VALUE ="NOTU">NOT ARALIGI</OPTION>
       </SELECT><br> 
       <td><input type="text" name="data" >             
       <td><input type="submit" name="gonderim" value="Gonder">
</table> <br> <br>
<?php extract($_POST); 
  function baslik(){
     echo " <table bgcolor=blue border=1 align=center cellpadding=3 cellspacing=5>
   <tr bgcolor=yellow><th bgcolor=pink>ADI<th bgcolor=lime>SOYADI
   <th bgcolor=aqua>BOLUMU<th bgcolor=999900>NOTU </tr> " ; 
   }
  function data(){
     global $adi,$soyadi,$bolumu,$notu,$renk;
     echo "<tr bgcolor=$renk><td>$adi<td>$soyadi<td>$bolumu<td align=right>$notu</tr>";
}
$fin=fopen("ogrenci.txt","r");
 $s=0;
while(!feof($fin)){
    fscanf($fin,"%s%s%s%d\n",$adi,$soyadi,$bolumu,$notu);
    if ($sorgu=="AD"){
        if ($adi==$data){
            $renk="pink";
            if ($s==0){
                baslik();
                data(); $s=1;} 
            else data();
    }}   
    else if ($sorgu=="SOYAD"){ 
        if ($soyadi==$data){ 
            $renk="lime";
            if ($s==0){
                baslik();
                data(); $s=1;} 
            else data();
            
    }}    
    else if ($sorgu=="BOLUM"){
        if ($bolumu==$data){ 
            $renk="aqua";
            if ($s==0){
                baslik();
                data(); $s=1;} 
            else data();
    }}
    else  if ($sorgu=="NOTU"){
        $ara=explode("-",$data);
        if ($notu >=$ara[0] and $notu <=$ara[1]){
            $renk=999900;
            if ($s==0){
                baslik();
                data(); $s=1;} 
            else data();
    }}
        
}
?>
</table></form></html>
