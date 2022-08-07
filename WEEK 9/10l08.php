<?php  
    setcookie("kullanici","ali",time()+5);
    echo $_REQUEST["kullanici"]."<br>";
    echo $_COOKIE["kullanici"]."<br>";
?>
