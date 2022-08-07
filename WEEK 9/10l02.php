<?php
    header("Content-type: image/png");
    $genislik=800;  $yukseklik=500;
    $resim=imagecreate($genislik,$yukseklik);
    include "renk.php";
    imagefill($resim,0,0,$gri); 
    $y1=10;
    imagestring($resim,5,300,25,"BAZI GRAFIKLER",$turanj);//baslik 
    imagedashedline($resim,0,100,250,100,$mavi);//Üstteki yatay kesikli cizgi
    imagedashedline($resim,0,300,100,300,$mavi);//Alttaki yatay kesikli cizgi
    imagedashedline($resim,100,500,100,300,$griton);//Kısa olan dusey kesikli cizgi
    imagedashedline($resim,250,100,250,500,$griton);//Uzun olan dusey kesikli cizgi
    imageline($resim, 100,300, 250,100,$turanj);
    imagestring($resim,5,100,300,"A",$mavi); //A yazdirma
    imagestring($resim,5,250,100,"B",$mavi); //B yazdirma
    imagestring($resim,5,0,100,"40",$siyah);
    imagestringup($resim,5,100,500,$y1,$siyah);
    imagerectangle($resim,300,100,450,200, $siyah);
    imagefilledrectangle($resim,500,100 ,600, 200, $yesil);
    imagefilledarc($resim,400,210,200,200,0,60,$kahve,IMG_ARC_PIE); //dilim
    imagefilledarc($resim,400,410,100,100,0,360,$mavi,IMG_ARC_PIE); //daire  
    imagearc($resim,350,310,50,100,0,360,$kirmizi);  //elips
    imagearc($resim,550,310,100,100,0,360,$kirmizi); //cember
    imagefilledrectangle($resim,700,200 ,750, 500, $kirmizi); //cubuk
    Imagepng($resim);
?>
