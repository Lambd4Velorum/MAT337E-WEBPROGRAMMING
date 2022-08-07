<html><br> <br>  
<TABLE bgcolor=yellow border=5 cellspacing=5 
     cellpadding=8 align=center width=250 height=150>  
     <TR><TH colspan=3 > <B>OGRENCI BILGILERI </B> 
     <TR> 
         <TH align=center><B>Ad
         <TH align=center><B>Soyad 
         <TH align=center><B>Bolum 
<?php
 $dosin=fopen("dos.txt","r");
 $r=0;
 while(!feof($dosin)){
     fscanf($dosin,"%s%s%s\n",$ad,$soyad,$bolum);
     if ($ad=="" or $soyad=="" or $bolum=="") break;
     if ($r%2==0)
          echo "<TR bgcolor=#F09900>";
     else echo "<TR bgcolor=#999900>"; 
     echo "<TD ALIGN=left><b>$ad</b><TD Align=left><b>$soyad</b>
     <TD align=left><b>$bolum</b> ";
     $r++;
     $ad=$soyad=$bolum="";
 }         
?>
</table></html>
