<?php
   $link=mysqli_connect("localhost","root","1234","muzaffer") or 
     die ("Could not connect to MySQL or access to database\n");
   mysqli_query($link,"drop table EMP");
   mysqli_query($link,"create table EMP (ID int not null,
                AD varchar (15) not null,
                SOYAD varchar (15) not null,
                primary key (ID) ) " ) or die ("olmadi");
       echo ("EMP table yaratildi\n");

   mysqli_query($link,"drop table PAY");
   mysqli_query($link,"create table PAY (ID int not null,
                UCRET int not null,
                BOLUM varchar (12) not null,
                MEDENI varchar(7)  not null,
                primary key (ID ) )" ) or die ("olmadi");
       echo ("PAY table yaratildi\n");
   
   mysqli_query($link,"drop table OGRENCI");
   mysqli_query($link,"create table OGRENCI (NO int not null auto_increment,
                AD varchar (15) not null,
                SOYAD varchar (15) not null,
                BOLUM varchar (12) not null,
                primary key (NO) ) " ) or die ("olmadi");
       echo ("OGRENCI table yaratildi\n");
   ?>