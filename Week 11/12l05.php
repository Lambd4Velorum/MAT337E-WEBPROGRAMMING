 <?php 
    interface I1 { 
        function F1(); 
    } 
    interface I2 { 
        function F2(); 
    } 
    class A implements I1, I2 { 
        function F1() { 
           print "F1 islemleri\n";
        } 
        function F2() { 
           print "F2 islemleri\n"; 
        } 
    } 
    class B extends A { 
        function F3() { 
           print "F3 islemleri\n";
        } 
    }
    $obA=new A;
    $obA->F1();
    $obA->F2();
    $obB=new B;
    $obB->F1();
    $obB->F2();
    $obB->F3();
    ?>