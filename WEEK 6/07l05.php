<?php 
  include "baglan.php";
  //Print column name
  $query=mysqli_query($link,"show tables");
  $line = mysqli_fetch_array($query) or die ("No result");
  while(each($line)){
      list($col_name) =each($line);
      printf("%-10s \n",$col_name);
  }
  //Print column data
  $query=mysqli_query($link,"show tables");
  while($tablo_adi = mysqli_fetch_array($query)){
       printf("%-10s\n",$tablo_adi[0]);
  }
  print("\n");
  //Print column name
  $result=mysqli_query($link,"show databases");
  $line = mysqli_fetch_array($result) or die ("No result");
  while(each($line)){
      list($col_name) =each($line);
      printf("%-10s\n",$col_name);
 }
 //Print column data
  $result=mysqli_query($link,"show databases");
  while($database_adi = mysqli_fetch_array($result)){
       printf("%-10s\n",$database_adi[0]);
  }        
  mysqli_close($link);
?>
