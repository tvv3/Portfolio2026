<?php
/*
$titlu="Sala Gym";//se fol in title si in #aboutProject
$descriere_about="Realizat in Laravel 6 cu baza de date Mysql";//se fol in sectiunea descriere adica #aboutProject
$descriere_detaliata_proiect="O parte dintre proiectele descrise sunt disponibile si pe contul de github.";
$imgfull="assets/img/portfolio/fullsize/"; //cale proj
$imgthmb="assets/img/portfolio/thumbnails/";//cale proj
$nr=6;//number of images
$imgdescr[1]="Sala Gym 1";
$imgdescr[2]="Sala Gym 2";
$imgdescr[3]="Sala Gym 3";

$imgdescr[4]="Sala Gym 4";
$imgdescr[5]="Sala Gym 5";
$imgdescr[6]="Sala Gym 6";

$alt=array(1=>"alt1",2=>"alt2",3=>"alt3",4=>"alt4",5=>"alt5",6=>"alt6");
*/

if ((!isset($nr))||(!isset($i))) exit();
$imgfull="assets/img/portfolio/proj".$i."/fullsize/"; //cale proj
$imgthmb="assets/img/portfolio/proj".$i."/thumbnails/";//cale proj
if ((!isset($demolink))) $demolink="#";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Proiectul - <?php echo $titlu;?></title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="../assets/favicon.ico">
        <!-- Bootstrap Icons-->
        <!--link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" /-->
        <link href="node_modules/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet"/>
        <!-- Google fonts-->
        <!--link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" /-->
        <!-- SimpleLightbox plugin CSS-->
        <!--link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" /-->
        <link href="node_modules/mydist2022/simplelightbox/dist/simple-lightbox.min.css" rel="stylesheet">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles1.css?v=<?php echo time();?>" rel="stylesheet" />
        <!-- extra css-->
        <link href="css/styles2.css?v=<?php echo time();?>" rel="stylesheet" />
       
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.php#acasa-top">Portofoliul</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="index.php#acasa-top">Inapoi</a></li>
                        <li class="nav-item"><a class="nav-link" href="#headerProject">Pagina proiect</a></li>
                        <li class="nav-item"><a class="nav-link" href="#aboutProject">Descriere proiect</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Galerie</a></li>
                        <!--li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li-->
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead" id="headerProject">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold">Proiectul <?php echo $titlu;?></h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 mb-5" ><?php echo $descriere_about;?></p>
                         <div class="d-flex justify-content-center">
                        <a class="btn btn-primary btn-xl" href="#aboutProject">Detalii proiect</a>
                        <a class="btn <?php if ($demolink=="#") echo "btn-dark2"; else echo "btn-dark"; ?> btn-xl mx-lg-2" href="<?php echo $demolink;?>">Demo</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="page-section bg-primary" id="aboutProject">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">Check it out!</h2>
                        <hr class="divider divider-light" />
                        <p class="text-white-75 mb-4" style="text-align:justify;text-indent:20px;"><?php echo $descriere_detaliata_proiect;?></p>
                        <a class="btn btn-light btn-xl" href="#portfolio">Imagini proiect</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services-->
        
        <!-- Portfolio-->
        <div id="portfolio">
            <div class="container-fluid py-3">
                <div class="row g-1">
                    <?php 
                     for($i=1; $i<=$nr; $i++)
                     {
                         
                        if ($nr!=1) echo '<div class="col-lg-4 col-sm-6"> ';
                        else
                            echo '<div class="col-lg-12 col-sm-12"> ';
                        echo 
                        ' <a class="portfolio-box" href='.$imgfull.$i.'.jpg>
                            <img class="img-fluid" src='.$imgthmb.$i.'.jpg alt="'.$alt[$i].'" />
                            <div class="portfolio-box-caption '.(($i==6)?'p-3':'').'">
                                <div class="project-category text-white-50">'.$titlu.'</div>
                                <div class="project-name"> '.$imgdescr[$i].' </div>
                            </div>
                        </a>
                    </div>';
                     }

                     ?>
                </div>
            </div>
        </div>
        <!-- Call to action-->
        <section class="page-section bg-dark text-white">
            <div class="container px-4 px-lg-5 text-center">
                <h2 class="mb-4">Viziteaza github acum!</h2>
                <a class="btn btn-light btn-xl" href="https://github.com/tvv3">Github Repo!</a>
            </div>
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2026</div></div>

            <div class="container px-4 px-lg-5 pt-2"><div class="small text-center text-muted">Credit goes to <a href="https://themewagon.com/themes/free-bootstrap-5-html-5-personal-portfolio-website-template-creative/" class="mycolor">Themewagon </a></div></div>
        </section>
        <!-- Contact-->
        <!--section class="page-section" id="contact">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-0">Contacteaza-ma!</h2>
                        <hr class="divider" />
                        <p class="text-muted mb-5">Pentru mai multe detalii puteti sa ma contactati!</p>
                    </div>
                </div>
                
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-4 text-center mb-5 mb-lg-0">
                        <i class="bi bi-envelope-fill fs-2 mb-3 text-muted"></i> 
                        <div></div>
                    </div>
                </div>
            </div>
        </section--> 
        <!--bi-phone-->
        <!-- Footer-->
        <!--footer class="bg-light py-5">
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2026</div></div>

            <div class="container px-4 px-lg-5 pt-2"><div class="small text-center text-muted">Credit goes to <a href="https://themewagon.com/themes/free-bootstrap-5-html-5-personal-portfolio-website-template-creative/" class="mycolor">Themewagon </a>
            </div></div>
        </footer-->
        <!-- Bootstrap core JS-->
        <!--script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script-->
        <script src="node_modules/mydist2022/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="node_modules/mydist2022/simplelightbox/dist/simple-lightbox.min.js"></script>
        <!--https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js-->
        <!-- Core theme JS-->
        <script src="js/scripts1.js"></script>
       
    </body>
</html>
