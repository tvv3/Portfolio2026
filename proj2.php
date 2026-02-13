<?php
$i=2;
$demolink="#";
$titlu="Sala Gym 8";//se fol in title si in #abouProject
$descriere_about="Realizat in Laravel 8 cu baza de date Mysql";//se fol in sectiunea descriere adica #aboutProject
$descriere_detaliata_proiect="Proiectul Laravel Sala Gym implementeaza in versiunea 8 a framework-ului Laravel managementul unei sali de gimnastica, imbunatatind versiunea anterioara (6). 
                    Pe pagina principala apar mentionate abonamentele si preturile (static). Exista pagina antrenorilor in care apare imaginea si descrierea acestora. 
                    Cele doua pagini sunt vizibile oricui. Pagina de client este accesibila doar dupa logarea cu un cont de client.
                    Paginile de administrare, administrare angajati, inregistrare angajat nou sunt disponibile doar pentru administrator.
                    Imaginile folosite in proiect pentru testare au fost luate de pe site-ul de fotografii gratuite pexels 
                    si nu apar in printscreen-urile de mai jos. 
                    Pentru a crea un cont de admin se foloseste optiunea register si apoi se schimba drepturile(rolurile) in admin din phpmyadmin.
                    Pentru a inregistra un angajat se foloseste un cont de administrator si se opereaza in register angajati.
                    Pentru a inregistra un client se foloseste optiunea register care creeaza implicit un cont de user de tipul client.";
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