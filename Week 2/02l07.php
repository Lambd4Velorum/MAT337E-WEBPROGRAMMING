<?php
$str1="PHP is a easy language to learn"; 
print substr($str1,9)."\n";
print substr($str1,0,22)."\n"; 
print substr($str1,-17,8)."\n";
print substr($str1,-8)."\n";
print strlen($str1)."\n";
$str2="  PHP   ";
print strlen($str2)."\n";
print strlen(ltrim($str2))."\n";
print strlen(rtrim($str2))."\n";
print strlen(trim($str2))."\n";
print strtoupper($str1)."\n";
print strtolower($str1)."\n";
$s=explode(" ",$str1);
foreach ($s as $element){
    print $element."\n";
}
print implode(" ",$s);
?>    
