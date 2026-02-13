<?php
$i=5;//proj id
$titlu="Agenda C#";//se fol in title si in #abouProject
$demolink="#";
$descriere_about="Realizat cu C# si baza de date SQLITE.";//se fol in sectiunea descriere adica #aboutProject
$descriere_detaliata_proiect="Proiectul Agenda este realizat in C# si baza de date SQLITE. In ecranul principal se salveaza site-urile cu posibilitatea alegerii dintr-o tabela de categorii (form separat). Se vizualizeaza site-urile introduse intr-un grid cu paginare si exista posibilitatea de a cauta / filtra site-urile.";
//$imgfull="assets/img/portfolio/proj".$i."/fullsize/"; //cale proj
//$imgthmb="assets/img/portfolio/proj".$i."/thumbnails/";//cale proj
$nr=12;//number of images
$imgdescr=[];
$alt=[];
for($j=1; $j<=$nr;$j++)
{
$imgdescr[$j]=$titlu." - ".$j;
$alt[$j]="alt".$j;
}

require("views/proj-master.php");
?>