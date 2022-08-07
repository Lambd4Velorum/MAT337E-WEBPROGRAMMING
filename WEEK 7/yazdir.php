<?php  extract($_REQUEST);
   $genel_top=mysqli_num_rows($result);
   if (empty($k)) $k=0;
   if ($k==$genel_top) exit;
   $dk=10;
   $query=$query." limit $k,$dk";
   $result = mysqli_query ($link,$query);
   $top_sayi=mysqli_num_rows($result);
   //BASLIK YAZDIRMA
   echo "  <table bgcolor=blue  border=1 cellpadding=1 cellspacing=1 align=center
      >";
   $col_sayisi=mysqli_num_fields($result);
   $i=0;
   echo "<tr bgcolor=yellow>";
   while($i< $col_sayisi) {
        $col_name=mysqli_fetch_field($result);
        echo "<th>$col_name->name</th>"; 
        $i++;
   }
  //DATA YAZDIRMA
   while($row = mysqli_fetch_row($result)) {
        echo "<tr>";
        $i=0;
        while($i< $col_sayisi){
             echo  "<td bgcolor=aqua>$row[$i]</td>"; 
             $i++; 
        }
        echo "</tr>";
   }
   echo "</table>";
   echo "<table bgcolor=aqua border=3 align=center><tr> "; 
   if ($k==0) $n=1; 
   else $n=$k+1;
   if ($top_sayi<$dk) $k=$k+$top_sayi;
   else $k+=$dk;
   if ($k==$genel_top) $DURUM="SON";
   else $DURUM="DEVAM";
   echo "<td bgcolor=yellow ><a href='?k=$k' >[$n-$k] $DURUM</a>";
   echo "</table>";
 ?>
    

