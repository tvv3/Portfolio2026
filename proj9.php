<?php
$i=9;
$titlu="Task Management v7c";//se fol in title si in #abouProject
$demolink="https://youtu.be/Y0h793UoxhE";
$descriere_about="Realizat in Laravel 11 API cu baza de date Mysql si front end separat in vue js 3";//se fol in sectiunea descriere adica #aboutProject
$descriere_detaliata_proiect="Proiectul Task Management v7c contine partea de api (v7b) in laravel 11 cu useri, roluri, taskuri, comentarii si echipe pentru fiecare task si autorizare, autentificare prin Sanctum cookies si o parte separata pentru frontend in Vue js 3 (v7c). Api-ul va rula pe localhost port 8000 iar vue js pe localhost port 3000.";
//$imgfull="assets/img/portfolio/proj".$i."/fullsize/"; //cale proj
//$imgthmb="assets/img/portfolio/proj".$i."/thumbnails/";//cale proj
$nr=10;//number of images
$imgdescr[1]=$titlu." - 1";
$imgdescr[2]=$titlu." - 2";
$imgdescr[3]=$titlu." - 3";

$imgdescr[4]=$titlu." - 4";
$imgdescr[5]=$titlu." - 5";
$imgdescr[6]=$titlu." - 6";

$imgdescr[7]=$titlu." - 7";
$imgdescr[8]=$titlu." - 8";
$imgdescr[9]=$titlu." - 9";

$imgdescr[10]=$titlu." - 10";

$alt=array(1=>"alt1",2=>"alt2",3=>"alt3",4=>"alt4",5=>"alt5",6=>"alt6",7=>"alt7",8=>"alt8",9=>"alt9",10=>"alt10");

require("views/proj-master.php");
?>