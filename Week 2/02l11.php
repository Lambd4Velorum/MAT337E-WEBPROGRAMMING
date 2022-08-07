
<?php
$string = "Yeni  ders   yılı    hayırlı   olsun";
$token = strtok($string, " ");
while ($token != false){
    print "$token\n";
    $st1[]=$token;
    $token = strtok(" ");
}
print "\n";  
for ($i=0; $i<count($st1); $i++)
    print "$st1[$i]\n";

print "\n";  

$str=explode(" ",$string); 
for ($i=0; $i<count($str); $i++){
    if ($str[$i]=="") continue;
    print $str[$i]."\n";
    $st2[]=$str[$i];
}
print "\n\n";  
for ($i=0; $i<count($st2); $i++)
    print "$st2[$i]\n";
print "\n";
?>