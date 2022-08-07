<?php 
  $link = mysqli_connect("localhost", "root","1234") 
              or die ("Could not connect");
  print "\nMySQL databases:\n";
  $sorgu="show databases";
  $result=mysqli_query($link,$sorgu);
  while($adi=mysqli_fetch_object($result)){
     print $adi->Database."\n";
  }
  print "\nMySQL databases:\n";
  $sorgu="show databases";
  $result=mysqli_query($link,$sorgu);
  while($adi=mysqli_fetch_array($result)){
    print $adi[0]."\n";
  } 
  print "\nMySQL databases:\n";
  $sorgu="SHOW DATABASES";
  $result=mysqli_query($link,$sorgu);
  while($adi=mysqli_fetch_row($result)){
    print $adi[0]."\n";
  }   
  mysqli_close($link);
?>
