<?php 
  $link = mysqli_connect("localhost", "root","1234","muzaffer") 
              or die ("Could not connect");
  print "Tables in muzaffer:\n";
  $sorgu=mysqli_query($link,"show tables");
  while($tablo_adi=mysqli_fetch_array($sorgu)){
    print $tablo_adi[0]."\n";
  }
  print "\nTables in db1:\n";
  mysqli_select_db ($link,"db1") or die ("Could not select database\n");
  $sorgu=mysqli_query($link,"show tables");
  while($tablo_adi=mysqli_fetch_row($sorgu)){
    print $tablo_adi[0]."\n";
  }
  mysqli_close($link);
?>
