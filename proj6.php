<?php
$i=6;
$titlu="Sudoku";//se fol in title si in #abouProject
$demolink="https://youtu.be/O5UfITz0EjU";
$descriere_about="Realizat in C#";//se fol in sectiunea descriere adica #aboutProject
$descriere_detaliata_proiect="Proiectul Sudoku este realizat in C# si windows forms. Initial grila este goala. Se apasa pe unul dintre cele 2 butoane 
                     pentru a obtine o grila partiala care trebuie completata. O data cu grila partiala se salveaza intr-o variabila grila completa si ulterior 
                     la apasarea unei cifre (cu butoanele 1-9 sau prin introducerea de la tastatura) daca in solutia finala cifra este corecta pe acea pozitie se 
                     coloreaza in albastru inchis, altfel cifra se coloreaza in rosu. Grila partiala initiala va bloca casutele completate automat astfel incat ele vor fi disabled.
                     Prin apasarea butonului 'Afiseaza Solutia' se completeaza toata grila conform utimei solutii asociate grilei partiale afisate pe ecran.
                     Pentru a folosi butoanele 1-9 sau stergerea cu butonul X trebuie selectata intai, prin click, casuta cu pozitia in grila si apoi click pe butonul
                     respectiv. Algoritmul folosit determina intai o grila completa de sudoku si apoi incearca sa gaseasca o grila partiala asociata solutiei complete care sa aiba 
                     un anumit numar de cifre completate si care sa fie rezolvabila. Daca nu se gaseste intr-un anumit numar de pasi 
                     (aprox un minut) solutiile - partiala si completa - atunci grila va ramane goala si trebuie apasat iar pe butonul care genereaza grila.
                     In casute este permisa doar scrierea unei cifre de la 1 la 9.";
//$imgfull="assets/img/portfolio/proj".$i."/fullsize/"; //cale proj
//$imgthmb="assets/img/portfolio/proj".$i."/thumbnails/";//cale proj
$nr=6;//number of images
$imgdescr=[];
$alt=[];
for($j=1; $j<=$nr;$j++)
{
$imgdescr[$j]=$titlu." - ".$j;
$alt[$j]="alt".$j;
}

require("views/proj-master.php");
?>