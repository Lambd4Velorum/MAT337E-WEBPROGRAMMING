<?php 
  $link = mysqli_connect("localhost", "root","1234") 
              or die ("Could not connected");
  $r1="drop database db1";
  if (mysqli_query($link,$r1)) print "Database dropped\n";
  else print "Database could not dropped\n";
  $r2="create database db1" ; 
  if (mysqli_query($link,$r2)) print "Dababase created\n";
  else print  "Database could not created\n";  
  mysqli_select_db ($link,"db1") or die ("Could not select database\n");
  mysqli_close($link);
?>
