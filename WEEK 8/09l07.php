<?php  extract($_REQUEST);
    session_start();
    $query=$_SESSION['s1'];
    $link = mysqli_connect("localhost", "root", "1234","muzaffer")
    or die ("Could not connect to MySQL or access to database\n");
    $result = mysqli_query($link,$query)
    or  die ("<table align=center bgcolor=aqua><tr><th> <a href='09l06.php'>
    HATA OLUSTU TEKRAR DENEYINIZ</a> ");
    include "yazdir2.php";
 ?>
    

