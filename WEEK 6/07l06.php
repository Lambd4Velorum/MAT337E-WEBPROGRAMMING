<?php 
  $link = mysqli_connect("localhost", "root","1234","db1") 
              or die ("Could not connect");
  mysqli_query($link,"delete from person");
  mysqli_query($link,"insert into person values('Ali','Kurt'),
              ('Faik','Usta'),('Hasan','Guler')") or die("not inserted\n");
 //Print the person table(1)                  
  $tumsatirlar=mysqli_query($link,"select * from person");
  $sayi = mysqli_num_rows($tumsatirlar);      
  $i=0;
  while( $i < $sayi) {
       $satir=mysqli_fetch_row($tumsatirlar);
       print ("$satir[0]  $satir[1] \n");
       $i++;      
  }
  print "\n"; 
  
  //Print the person table(2)                 
  $tumsatirlar=mysqli_query($link,"select * from person");
  while($satir=mysqli_fetch_row($tumsatirlar) ) 
       print ("$satir[0]  $satir[1] \n");
       
  mysqli_close($link);
?>
