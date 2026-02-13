<?php
$i=4;
$titlu="Agenda Web";//se fol in title si in #aboutProject
$demolink="#";
$descriere_about="Realizat cu PHP si baza de date Mysql";//se fol in sectiunea descriere adica #aboutProject
$descriere_detaliata_proiect="Proiectul Agenda Web este realizat in php obiectual si mysql, html, css, javascript. 
                    In primul ecran este solicitata o parola de acces, agenda apartinand unui singur
                     utilizator/grup de utilizatori care doreste sa aiba acces de oriunde la baza de date asociata agendei. Nu a fost necesar in acest proiect sa se faca logarea cu useri si roluri.
                     Se introduc site-urile si canalele asociate site-urilor si exista pagini de cautare/afisare a site-urilor si canalelor din agenda.
                     Agenda web este un site responsive.";
//$imgfull="assets/img/portfolio/proj".$i."/fullsize/"; //cale proj
//$imgthmb="assets/img/portfolio/proj".$i."/thumbnails/";//cale proj
$nr=15;//number of images
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
$imgdescr[11]=$titlu." - 11";
$imgdescr[12]=$titlu." - 12";
$imgdescr[13]=$titlu." - 13";
$imgdescr[14]=$titlu." - 14";
$imgdescr[15]=$titlu." - 15";

$alt=array(1=>"alt1",2=>"alt2",3=>"alt3",
           4=>"alt4",5=>"alt5",6=>"alt6",
           7=>"alt7",8=>"alt8",9=>"alt9",
           10=>"alt10",11=>"alt11",12=>"alt12",
           13=>"alt13",14=>"alt14",15=>"alt15"
);

require("views/proj-master.php");
?>