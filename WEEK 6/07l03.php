<?php 
  $link = mysqli_connect("localhost", "root","1234","db1") 
              or die ("Could not connected");
  mysqli_query($link,"drop table person");
  $tablo="create table person (
         adi char(10) not null,
         soyadi  char(10) not null )";
  
  if (mysqli_query($link,$tablo)){ 
        print "person table created\n\n";}
  else { print "person table not created\n";}
  
  //Column names
  $result=mysqli_query($link,"describe person");
  $line = mysqli_fetch_array($result) or die ("No result");
  while(each($line)){
      list($col_name, $col_value) =each($line);
      printf("%-10s",$col_name);
  }
  print "\n\n";
  
  //Column data
  $result=mysqli_query($link,"describe person");
  while($line = mysqli_fetch_array($result)){
      while(each($line)){
          list($col_name, $col_value) =each($line);
          printf("%-10s",$col_value);
      }
      print "\n";
  } 
    
  mysqli_close($link);
?>
