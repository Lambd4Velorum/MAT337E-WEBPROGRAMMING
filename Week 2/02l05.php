<?php
  function yaz($arr){
      for ($i=0;$i<count($arr); $i++)
          print $arr[$i]." "; 
      echo "\n\n";
  }
  $arr1=array(5,7,8,1); $arr2=array(12,15,9);
  $arr3=array_merge($arr1,$arr2);
  $str=array("Zafer","Yavuz","Omer","Ali","Bahri");
  yaz($arr3);            
  sort($arr3,SORT_NUMERIC);
  yaz($arr3);
  rsort($arr3);
  yaz($arr3);
  sort($arr3,SORT_STRING);
  yaz($arr3);
  sort($str,SORT_STRING);
  yaz($str);
  sort($str);
  yaz($str);
  rsort($str,SORT_STRING);
  yaz($str);
?>  
