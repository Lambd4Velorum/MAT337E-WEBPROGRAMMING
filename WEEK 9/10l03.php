 <?php
extract($_REQUEST);
header("Content-type: image/png");
$genislik=700;  $yukseklik=450;
$resim=imagecreate($genislik,$yukseklik);
include "renk.php";
imagefill($resim,0,0,$gri);  
$dosya=fopen($fil,"r");
while(!feof($dosya)){
    fscanf($dosya,"%d%d\n",$x,$y);
    $X[]=$x; $Y[]=$y;
}
$XMAX=max($X);  $YMAX=max($Y); 
imagestring($resim,5,300,1,"XY GRAFIGI",$turanj);//baslik 
$fl=0;
for ($i=0; $i < count($X) ; $i++){
    $x=(($genislik-7) * ($X[$i]/$XMAX ));
    $y=(($yukseklik+1) - ($yukseklik/$YMAX * $Y[$i]));
    imagedashedline($resim,0,$y,$x,$y,$griton); //yatay kesikli cizgi
    imagedashedline($resim,$x,$yukseklik,$x,$y,$griton); //dusey kesikli cizgi
    if ($fl==0) {$xeski=$x; $yeski=$y; $fl=1;} 
    imageline($resim, $xeski, $yeski, $x, $y,$turanj); //cizgi
    imagestring($resim,2,2,$y,$Y[$i],$siyah);//Y ekseni scaling
    imagestringup($resim,2,$x+2,$yukseklik-4,$X[$i],$siyah);//X ekseni scaling
    $xeski = $x;
    $yeski = $y;
} 
imagerectangle($resim,0,0 , $genislik-2, $yukseklik-2, $siyah);
Imagepng($resim);
?>
