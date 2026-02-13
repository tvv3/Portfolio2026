<?php
$i=10;
$titlu="Cantarire Fructe(Pesaje Frutas)";//se fol in title si in #abouProject
$demolink="https://youtu.be/-keychB1-sY";
$descriere_about="Realizat in c# windows forms si baza de date sqlite. Interfata in limba spaniola.";//se fol in sectiunea descriere adica #aboutProject
$descriere_detaliata_proiect="Proiectul Cantarire Fructe (Pesaje Frutas) este realizat in c# cu baza de date sqlite in limba spaniola. In aceasta aplicatie se genereaza baza de date goala intr-un ecran in care ne autentificam fictiv cu admin si parola admin123 si la care avem acces doar daca baza de date sqlite nu exista. Dupa crearea bazei de date ne autentificam cu userul admin creat si avem acces la toate ecranele aplicatiei mai putin la cel de creare baza de date. Putem crea fructele si utilizatorii cu rolurile: user, supervizor, manager si admin. In ecranul de cantarire apare in prezent un buton de simulare cantarire (vizibil in demo) dar exista implementat si butonul de preluare greutate de la un cantar conectat cu usb. Pentru teste insa se foloseste butonul de simulare cantarire. Se alge din combo tipul de fruct se apasa butonul simulare cantarire si se adauga in lista cu butonul Salveaza (Guardar). La salvarea in lista se genereaza si eticheta in folderul pdf si se poate si printa automat eticheta in functie de parametrii cu care apelam formularul de cantarire. Exista drepturi pentru supervizor si manager in ecranul de corectii cu care se poate corecta cantitatea unei cutii, se reface eticheta pdf si se poate reprinta o eticheta. Tot aici se poate sterge o cutie salvata de user (culegator) in ecranul de cantarire, singurul la care are acces culagatorul (rol = user/usuario). Exista posibilitatea de a afisa totalurile ca numar de cutii si numar de kg pentru fiecare tip de fruct atat la ecran cat si export in csv. De asemenea se pot exporta maxim 50000 de linii cu cutii in format csv pentru o perioada aleasa ca parametru ( altfel apare eroare si trebuie micsorata perioada).";
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