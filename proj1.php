<?php
$i=1;
$titlu="Sala Gym";//se fol in title si in #aboutProject
$demolink="#";
$descriere_about="Realizat in Laravel 6 cu baza de date Mysql";//se fol in sectiunea descriere adica #aboutProject
$descriere_detaliata_proiect="Proiectul Laravel Gym implementeaza in versiunea 6 a framework-ului Laravel managementul unei sali de gimnastica. 
                    Pe pagina principala apar mentionate abonamentele si preturile (static). Exista pagina antrenorilor in care apare imaginea si descrierea acestora. 
                    Cele doua pagini sunt vizibile oricui. Pagina de client este accesibila doar dupa logarea cu un cont de client.
                    Paginile de administrare, administrare angajati, inregistrare angajat nou sunt disponibile doar pentru administrator.
                    Imaginile folosite in proiect pentru testare au fost luate de pe site-ul de fotografii gratuite pexels 
                    si nu apar nici in printscreen-urile de mai jos, nici in github repo.";
//$imgfull="assets/img/portfolio/proj".$i."/fullsize/"; //cale proj
//$imgthmb="assets/img/portfolio/proj".$i."/thumbnails/";//cale proj
$nr=6;//number of images
$imgdescr[1]="Sala Gym - 1";
$imgdescr[2]="Sala Gym - 2";
$imgdescr[3]="Sala Gym - 3";

$imgdescr[4]="Sala Gym - 4";
$imgdescr[5]="Sala Gym - 5";
$imgdescr[6]="Sala Gym - 6";

$alt=array(1=>"alt1",2=>"alt2",3=>"alt3",4=>"alt4",5=>"alt5",6=>"alt6");

require("views/proj-master.php");
?>