
<?php
function bul($dizin){
    $dh = opendir($dizin) or  print ("Olmadi\n ");
    while( ($file = readdir($dh)) !=false  ){
         // Skip '.' and '..'
        if( $file =="." || $file == "..") continue;
        $path = $dizin."/".$file;
        if( is_dir($path) ){
            bul($path);
        }    
        else{
            if (strstr($path, ".php"))
                 print $path."\n";
        }//else
    }//while
    closedir($dh);
}//bul
 bul("/home/username/");
  
?> 
