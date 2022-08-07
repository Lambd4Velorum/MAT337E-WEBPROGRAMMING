<?php  function bul( $dizin ){
      if($dh = opendir($dizin)){
          while( ($file = readdir($dh)) !=false ){
               if( $file =="." || $file == "..") continue;
               $path = $dizin."/".$file;
               if( is_dir($path) ){
                    bul($path); }    
               else{
                    if ( !strstr($path,".c")) continue;
                    $s1="switch";
                    $fa=fopen("$path","r");
                    $fb=fopen("cc.txt","a+") or die ("OLMADI");
                    $st=0;
                    while(!feof($fa)){
                        $satir=fgets($fa);
                        $st++;
                      //if (preg_match("/$s1/",$satir)) {
                        if (strstr($satir, "$s1")) {
                            print "$path\n";   
                            print "$st $satir";
                            fputs($fb,"$path  SNO:$st $satir\n");
                        }
                    } //inner while 
               } //else
          } //outer while
          closedir($dh);
      } //if
   }  //bul
  
   bul("/home/username");
?> 
