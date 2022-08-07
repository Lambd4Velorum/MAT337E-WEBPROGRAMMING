<?php
 $link = mysqli_connect("localhost", "root", "1234");
 if (!$link) {
      die("Could not connect to MySQL server: " . mysqli_connect_errno());
 }
$db_selected = mysqli_select_db( $link,"db1");
if (!$db_selected) {
        die("Could not set db1: " . mysqli_error($link)."\n");
 }
//Print the column names in person table 
$sorgu = mysqli_query($link,"select * from person") or die ("Error\n");
$sayi=mysqli_num_fields($sorgu);
$i=0;
while($i< $sayi) {
      $sutun=mysqli_fetch_field($sorgu);
      print $sutun->name."\n";
      $i++;
}
?>
