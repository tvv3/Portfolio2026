<?php
$i=8;
$titlu="Pontaj si management de proiect";//se fol in title si in #abouProject
$demolink="#";
$descriere_about="Realizat in Laravel 11 cu baza de date Mysql";//se fol in sectiunea descriere adica #aboutProject
$descriere_detaliata_proiect="Proiectul Pontaj si Management de Proiect este realizat in laravel 11 si mysql, html, css, javascript. 
                    In primul ecran este solicitat accesul cu user si parola. Sunt definite mai multe conturi de utilizator de tip administrator sau user, 
                    dintre care doar cel din urma poate avea si proiecte asociate si deveni in acest fel si manager.
                    Administratorii pot introduce utilizatorii aplicatiei de ambele tipuri, pot modifica parola personala sau a altui cont de user/admin,
                    pot introduce si edita proiecte, asignandu-le un manager dintre conturile de tip user deja existente.
                    Exista rapoarte disponibile la nivel de admin, user sau manager.
                    Un manager poate crea taskuri pe care apoi le asigneaza unei echipe de unu sau mai multi angajati (orice user non admin are asociat un angajat).
                    Apoi userii din echipa pot crea taskuri zilnice (pontaje) mentionand si timpul in minute asociat unui task.
                    Pentru a se putea urmari mai usor raportul activitatii, se pot defini la nivel de task versiuni unice 
                    numerotate de la 1 la n astfel incat la un moment dat o singura persoana sa lucreze la acel task si daca intr-o zi 2 persoane lucreaza 
                    la taskul respectiv, a doua persoana va trebui sa defineasca intai in sistem versiunea n+1 cea curenta si apoi sa lucreze pe ea, urmand sa treaca ulterior in pontaj ca a lucrat pe versiunea n+1.";
//$imgfull="assets/img/portfolio/proj".$i."/fullsize/"; //cale proj
//$imgthmb="assets/img/portfolio/proj".$i."/thumbnails/";//cale proj
$nr=9;//number of images
$imgdescr[1]=$titlu." - 1";
$imgdescr[2]=$titlu." - 2";
$imgdescr[3]=$titlu." - 3";

$imgdescr[4]=$titlu." - 4";
$imgdescr[5]=$titlu." - 5";
$imgdescr[6]=$titlu." - 6";

$imgdescr[7]=$titlu." - 7";
$imgdescr[8]=$titlu." - 8";
$imgdescr[9]=$titlu." - 9";



$alt=array(1=>"alt1",2=>"alt2",3=>"alt3",4=>"alt4",5=>"alt5",6=>"alt6",7=>"alt7",8=>"alt8",9=>"alt9");

require("views/proj-master.php");
?>