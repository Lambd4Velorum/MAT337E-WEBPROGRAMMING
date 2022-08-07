 <?php 
    class A { 
        function __call($ad,$arg) {
            $say=count($arg) ;
          
            if ($say==3) 
                print("\nÇağrıldı - $ad: $arg[0] , $arg[1] , $arg[2] ");
            else if ($say==2)  
                print("\nÇağrıldı - $ad: $arg[0] , $arg[1]" ); 
            else if ($say==1)  
                print("\nÇağrıldı - $ad: $arg[0] " ); 
            else
                print("\nÇagrildi - $ad:");      
        } 
    } 

    $x = new A(); 
    $x->FONK1(5,"ORHAN","KEMAL"); 
    $x->FONK2(10,"SEVIM","UNLU");
    $x->FONK3(15,"YASAR","ZEYBEK");
    $x->FONK4("YASAR","ZEYBEK");
    $x->FONK5("YASAR");
    $x->FONK6();
 ?>  
