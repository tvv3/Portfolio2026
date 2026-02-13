<?php
$i=7;
$titlu="Cursuri online";//se fol in title si in #abouProject
$demolink="#";
$descriere_about="Realizat in Laravel 10 cu baza de date Mysql";//se fol in sectiunea descriere adica #aboutProject
$descriere_detaliata_proiect= "Proiectul Cursuri online este realizat in laravel 10 si mysql, html, css, javascript. 
                    In primul ecran este solicitata o parola de acces. Sunt disponibile 2 parole una pentru accesul ca administrator si una pentru accesul ca vizitator.
                    Administratorul introduce cursurile, capitolele, notele si site-urile asociate. Exista posibilitatea de cautare dupa un cuvant cheie in tot continutul cursurilor/capitolelor/notelor/site-urilor.
                    Vizitatorul are la dispozitie un site responsive pentru a cauta si citi cursurile introduse de administrator. ";
                
//$imgfull="assets/img/portfolio/proj".$i."/fullsize/"; //cale proj
//$imgthmb="assets/img/portfolio/proj".$i."/thumbnails/";//cale proj
$nr=6;//number of images
$imgdescr[1]=$titlu." - 1";
$imgdescr[2]=$titlu." - 2";
$imgdescr[3]=$titlu." - 3";

$imgdescr[4]=$titlu." - 4";
$imgdescr[5]=$titlu." - 5";
$imgdescr[6]=$titlu." - 6";

$alt=array(1=>"alt1",2=>"alt2",3=>"alt3",4=>"alt4",5=>"alt5",6=>"alt6");

require("views/proj-master.php");
?>