 <?php
     $say=array_fill(0,9,0);
     $sum1=array_fill(0,9,0); 
     $sum2=array_fill(0,9,0);
     $bol_adi=array("Matematik","Elektrik","Maden","Kimya","Tekstil","Fizik",
                 "Isletme","Bioloji","Elektronik" );
     $dosya=fopen("sinif.txt","r");
     while(!feof($dosya)){
         fscanf($dosya,"%d%s%s%s%d%d",$no,$ad,$soyad,$bolum,$sinav1,$sinav2);
         for ($i=0; $i < 9 ; $i++)
            if ( $bol_adi[$i] == $bolum ){
                $say[$i]+=1;
                $sum1[$i]+=$sinav1;
                $sum2[$i]+=$sinav2;
                break;
            }
     }
     echo ("<table border=1 cellspacing=1 cellpadding=4 align=center
               bgcolor=silver >") ;
     echo("<tr bgcolor=yellow><th>Bolum Adi<th>Sayi<th>Sinav1 Ort<th>Sinav2 Ort");  
     for ($i=0; $i < 9 ; $i++){
         if ( $say[$i]==0) continue;
         $ort1= number_format($sum1[$i]/$say[$i],2);
         $ort2= number_format($sum2[$i]/$say[$i],2);
         echo("<tr bgcolor=aqua><td>$bol_adi[$i]<td align=right>$say[$i]<td align=right>
         $ort1<td align=right>$ort2 " );
     }
     echo("</table>");
 ?>
