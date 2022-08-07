<?php
  $fil="02l02.c"; 
  $ar=file($fil); 
  $fa=fopen($fil,"w") or die ("Unable to open file!");
  $s1="int "; $s2="float ";
  foreach ($ar as $row){
      $nrow= str_replace($s1, $s2,$row); 
      fputs($fa,$nrow);
  }
  fclose($fa); 
?>  
