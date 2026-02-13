<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Portofoliul</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
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
                        <li class="nav-item"><a class="nav-link" href="index.php#acasa-top">Acasa</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php#about">Despre noi</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php#services1">Tehnologii</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php#portfolio-section1">Portofoliu</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php#contact1">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead" id="acasa-top">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold">Portofoliul</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 mb-5">Proiecte personale de web development (PHP) si aplicatii desktop (C#)</p>
                        <div class="d-flex justify-content-center">
                        <a class="btn btn-primary btn-xl" href="#about">Afla mai multe</a>
                        <a class="btn btn-dark btn-xl mx-lg-2" href="https://youtu.be/CPVgosSvtHk">Demo</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="page-section bg-primary" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">Check it out!</h2>
                        <hr class="divider divider-light" />
                        <p class="text-white-75 mb-4">O parte dintre proiectele descrise sunt disponibile si pe contul de github.</p>
                        <a class="btn btn-light btn-xl" href="#services">Detalii proiecte</a>
                        
                    </div>
                </div>
            </div>
        </section>
        <!-- Services-->
        <section class="page-section" id="services1">
            <div class="container px-4 px-lg-5">
                <h2 class="text-center mt-0">Tehnologii folosite</h2>
                <hr class="divider" />
                
                <div class="row gx-4 gx-lg-5">
                     <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <!--div class="mb-2"><i class="bi-gem fs-1 text-primary"></i></div-->
                            <h3 class="h4 mb-2 mycolor">Databases</h3>
                            <p class="text-muted mb-0">Mysql si Sqlite</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <!--div class="mb-2">
                            </div-->
                            <h3 class="h4 mb-2 mycolor">PHP</h3>
                            <p class="text-muted mb-0">PHP core si Laravel 6,8,9,10,11</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <!--div class="mb-2"><i class="bi-globe fs-1 text-primary"></i></div-->
                            <h3 class="h4 mb-2 mycolor">C#</h3>
                            <p class="text-muted mb-0">.NET, C#, Windows Forms</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <!--div class="mb-2"><i class="bi-heart fs-1 text-primary"></i></div-->
                            <h3 class="h4 mb-2 mycolor">Front-end</h3>
                            <p class="text-muted mb-0">HTML5, CSS3, Javascript, Vue js</p>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-5">
                 <a class="btn btn-primary btn-xl" href="#portfolio">Imagini proiecte</a>
                </div>    
            </div>
        </section>
        <!-- Portfolio-->
        <section class="page-section" id="portfolio-section1">
        <div id="portfolio">
            <div class="container-fluid py-3">
                <div class="row g-1"> <!--g-0-->
                      <!--7-9-->
                    <div class="col-lg-4 col-sm-6">
                        <div class="portfolio-box"  title="Project Cursuri online">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/7.jpg" alt="..." />
                            <div class="portfolio-box-caption p-3">
                                <div class="project-category text-white-50">Laravel 10</div>
                                <div class="project-name">Cursuri online <br> <text class="btnDetalii" onclick="gotoproj(7)">Detalii</text></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="portfolio-box"  title="Project Pontaj">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/8.jpg" alt="..." />
                            <div class="portfolio-box-caption p-3">
                                <div class="project-category text-white-50">Laravel 11</div>
                                <div class="project-name">Pontaj si management de proiect <br> <text class="btnDetalii" onclick="gotoproj(8)">Detalii</text></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="portfolio-box"  title="Project Task Management v7c">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/9.jpg" alt="..." />
                            <div class="portfolio-box-caption p-3">
                                <div class="project-category text-white-50">Laravel 11 api si vue js 3 frontend</div>
                                <div class="project-name">Task Management v7c <br> <text class="btnDetalii" onclick="gotoproj(9)">Detalii</text></div>
                            </div>
                        </div>
                    </div>
                    <!--end 7-9-->
                   
                    <div class="col-lg-4 col-sm-6">
                        <div class="portfolio-box"  title="Project Agenda Web">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/4.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">PHP OOP & MYSQl</div>
                                <div class="project-name">Agenda Web <br> <text class="btnDetalii" onclick="gotoproj(4)">Detalii</text></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="portfolio-box"  title="Project Agenda C#">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/5.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">C# & Sqlite</div>
                                <div class="project-name">Agenda C# <br> <text class="btnDetalii" onclick="gotoproj(5)">Detalii</text></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="portfolio-box"  title="Project Sudoku">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/6.jpg" alt="..." />
                            <div class="portfolio-box-caption p-3">
                                <div class="project-category text-white-50">C#</div>
                                <div class="project-name">Sudoku <br> <text class="btnDetalii" onclick="gotoproj(6)">Detalii</text></div>
                            </div>
                        </div>
                    </div>
            
                    <!--1-3-->
                     <div class="col-lg-4 col-sm-6">
                        <div class="portfolio-box" title="Project Sala Gym">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/1.jpg" alt="alt1" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Laravel 6</div>
                                <div class="project-name">Sala Gym <br> <text class="btnDetalii" onclick="gotoproj(1)">Detalii</text></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="portfolio-box" title="Project Sala Gym 8" id="imgfull2">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/2.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Laravel 8</div>
                                <div class="project-name">Sala Gym 8 <br> <text class="btnDetalii" onclick="gotoproj(2)">Detalii</text></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="portfolio-box"  title="Project Delivery App">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/3.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Laravel 9</div>
                                <div class="project-name">Delivery App <br> <text class="btnDetalii" onclick="gotoproj(3)">Detalii</text></div>
                            </div>
                        </div>
                    </div>
                    <!--end 1-3 -->
                      <div class="col-lg-4 col-sm-6">
                        <div class="portfolio-box"  title="Pesaje Frutas v4">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/10.jpg" alt="..." />
                            <div class="portfolio-box-caption p-3">
                                <div class="project-category text-white-50">C# & Sqlite</div>
                                <div class="project-name">Pesaje Frutas v4 <br> <text class="btnDetalii" onclick="gotoproj(10)">Detalii</text></div>
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
        </section>
        <!-- Call to action-->
        <section class="page-section bg-dark text-white">
            <div class="container px-4 px-lg-5 text-center">
                <h2 class="mb-4">Viziteaza github repository acum!</h2>
                <a class="btn btn-light btn-xl" href="https://github.com">Github Repo</a>
            </div>
        </section>
        <!-- Contact-->
        <section class="page-section" id="contact1">
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
                        <i class="bi bi-envelope-fill fs-2 mb-3 text-muted"></i> <!--bi-phone-->
                        <div></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2025</div></div>

            <div class="container px-4 px-lg-5 pt-2"><div class="small text-center text-muted">Credit goes to <a href="https://themewagon.com/themes/free-bootstrap-5-html-5-personal-portfolio-website-template-creative/" class="mycolor">Themewagon </a>
            </div></div>
        </footer>
        <!-- Bootstrap core JS-->
        <!--script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script-->
        <script src="node_modules/mydist2022/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="node_modules/mydist2022/simplelightbox/dist/simple-lightbox.min.js"></script>
        <!--https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js-->
        <!-- Core theme JS-->
        <script src="js/scripts1.js"></script>
       
    </body>
</html>
