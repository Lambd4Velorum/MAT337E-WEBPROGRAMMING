<html><body> <br> 
<form action="08l04.php" method="post"> 
     <table bgcolor=aqua align=center width=250 height=150> 
        <TR><TH COLSPAN=4 > <B>OGRENCI BILGILERI </B> 
        <TR>
           <TD ALIGN="RIGHT" ><B>Ad:</B>
           <TD> <INPUT TYPE="text" NAME="ad" SIZE="20">
        <TR>
           <TD ALIGN="RIGHT"  ><B>Soyad:</B>
           <TD> <INPUT TYPE="text" NAME="soyad" SIZE="20">
        <TR>
           <TD ALIGN="right" ><B>Bolum:</B>
           <TD>    <SELECT NAME="bolum" type="text" align=center> 
                   <OPTION VALUE ="Fizik" align=center>Fizik</OPTION>
                   <OPTION VALUE ="Kimya">Kimya</OPTION>
                   <OPTION VALUE ="Matematik">Matematik</OPTION>
                   </SELECT> 
           <TD>    <input type="submit" name="gonderim" value="Gonder">   
<?php  extract($_POST);
   $link=mysqli_connect("localhost","root","913348","suheyl") or 
      die ("Could not connect to MySQL or access to database\n");
   if (!empty($ad) and !empty($soyad) ){
      mysqli_query($link,"insert into OGRENCI values (NO,'$ad','$soyad',
            '$bolum' )") or die ("Olmadi"); 
      $r=0;
      echo "</table> <br><br>";
      echo "<table bgcolor=aqua align=center width=250 height=100> 
            <TR bgcolor=yellow>
                 <TH ALIGN=center ><B>NO</B>
                 <TH ALIGN=center ><B>AD</B>
                 <TH ALIGN=center><B>SOYAD</B>
                 <TH ALIGN=center><B>BOLUM</B>  ";
      $tumsatirlar=mysqli_query($link,"select * from OGRENCI");
      while($satir=mysqli_fetch_row($tumsatirlar)){
          if ($r%2==0)
              echo "<TR bgcolor=#F09900>";
          else echo "<TR bgcolor=#999900>"; 
          echo "<TD ALIGN=center><b>$satir[0]</b><TD Align=left><b>$satir[1]</b>
          <TD align=left><b>$satir[2]</b><TD align=left><b>$satir[3]</b>            ";
          $r++;
      }
   
   }
   else { echo "</table> <br>";
        echo "<table bgcolor=yellow align=center> <tr><th>LUTFEN AD ve  SOYAD   GIRINIZ ";
   }      
?>
