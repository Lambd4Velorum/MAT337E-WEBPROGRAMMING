<?php
    header("Content-type: image/png");
    $resim=imagecreate(200,200);
    include "renk.php";
    imagefill($resim,0,0,$kirmizi);
    imagefilledrectangle($resim,50,50 ,150, 150, $sari); 
    Imagepng($resim);
    Imagedestroy($resim); 
  
?>
