<?php
   $link=mysqli_connect("localhost","root","1234","muzaffer") or 
   die ("Could not connect to MySQL or access to database\n");
   mysqli_query($link,"drop table T1");
   mysqli_query($link,"create table T1 (ID int not null,
                AD varchar (15) not null,
                SOYAD varchar (15) not null,
                BOLUM varchar (12) not null,
                primary key (ID) ) " ) or die ("Could not create table");
   mysqli_query($link,"drop table T2");
   mysqli_query($link,"create table T2 (ID int not null,
                MAT  int  not null,
                FIZ int  not null,
                primary key (ID) ) " ) or die ("Could not create table");
   mysqli_query($link,"drop table T3");
   mysqli_query($link,"create table T3 (ID int not null,
                LISE varchar  (15) not null,
                YDIL varchar (15) not null,
                primary key (ID) ) " ) or die ("Could not create table");
   mysqli_query($link,"drop table sayac");
   mysqli_query($link,"create table sayac( 
                ID varchar(25)   not null,
                SAYI int(11) default '0' not null,
                TARIH char(11)   not null ) " ) or die ( "Could not create table\n" );                   
   ?>