<?php
function bul( $dizin ){
     global $top;
     if($dh = opendir($dizin)){
           while( ($file = readdir($dh)) != false  ){
               if( $file =="." || $file == "..") continue;
               $path = $dizin."/".$file;
               if( is_dir($path) ){
                       bul($path);
               }    
               else{
                    if (strstr($path,".php")){
                        $byt=filesize("$path");
                        print "$path : $byt byte"."\n"; 
                        $top+=$byt;
                    }//if              
               } //else
           } // while
           closedir($dh);
     } //if
}  //bul
bul("/home/username/");
print "Toplam: $top byte "."\n";
?> 
