<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="title" content="Constructora Alfa y Omega">
    <meta content="all" name="robots" />
    <link rel="canonical" href="http://www.alfayomega.com.mx/" />
    <meta name="keywords" content="">
    <meta name="author" content="Alfa&Omega">
    <meta name="description" content="">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:title" content="Constructora Alfa y Omega">
    <meta property="og:description" content="">
    <meta property="og:image" content="">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="">
    <meta property="twitter:title" content="Constructora Alfa y Omega">
    <meta property="twitter:description" content="">
    <meta property="twitter:image" content="">

    <title>Constructora ALFA y OMEGA</title>


    <!-- Bootstrap CSS && CUSTOM CSS -->
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/alfayomega.css">
    <link rel="stylesheet" href="./css/responsive.css">
    <link rel="stylesheet" href="./css/fontawesome/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.0/css/lightgallery-bundle.min.css" integrity="sha512-nUqPe0+ak577sKSMThGcKJauRI7ENhKC2FQAOOmdyCYSrUh0GnwLsZNYqwilpMmplN+3nO3zso8CWUgu33BDag==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <?php include_once ('includs/analytics.php')?>


    <header class="header-one">
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-header" id="mainNav" data-scroll-header>
        <div class="container">
            <a class="navbar-brand" href="./"><img src="images/logo.png" alt="" width="90"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto align-items-lg-center">
                    <li class="nav-item">
                        <a class="nav-link" href="./">Inicio</a>
                    </li>
                    <li class="nav-item linea-separadora">|</li>
                    <li class="nav-item">
                        <a class="nav-link" href="#quienes-somos" data-scroll>Quiénes somos</a>
                    </li>
                    <li class="nav-item linea-separadora">|</li>
                    <li class="nav-item">
                        <a class="nav-link" href="#servicios" data-scroll>Servicios</a>
                    </li>
                    <li class="nav-item linea-separadora">|</li>
                    <li class="nav-item">
                        <a class="nav-link" href="#galeria" data-scroll>Galería</a>
                    </li>
                    <li class="nav-item linea-separadora">|</li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contacto" data-scroll>Contacto</a>
                    </li>
                    <li class="nav-item linea-separadora">|</li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" target="_blank" onclick="clickEventWhats()">
                            <span class="fa-stack fa-1x">
                              <i class="fa fa-circle fa-stack-2x icon-background-header"></i>
                              <i class="fab fa-whatsapp fa-stack-1x icon-color-header"></i>
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" target="_blank">
                            <span class="fa-stack fa-1x">
                              <i class="fa fa-circle fa-stack-2x icon-background-header"></i>
                              <i class="fab fa-facebook-f fa-stack-1x icon-color-header"></i>
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" target="_blank">
                            <span class="fa-stack fa-1x">
                              <i class="fa fa-circle fa-stack-2x icon-background-header"></i>
                              <i class="fab fa-instagram fa-stack-1x icon-color-header"></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>



    <section id="banner" class="banner">
        <div class="container">
            <div class="row"> 

            </div>
        </div>
    </section>







    <section id="contacto" class="contacto">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 col-lg-8 align-self-center">
                    <div class="row d-flex justify-content-center">
                        <div class="col-12 col-md-12 col-lg-12">
                            <div class="row mb-4">
                                <div class="col-12 col-md-12 col-lg-12 align-self-center">
                                    <ul class="fa-ul">
                                        <li>
                                            <a href="#" target="_blank">
                                                <span class="fa-li"><i class="fas fa-map-marker-alt"></i></span>
                                                Calle 9 no. 362 colonia Villas del Sol
                                            </a>
                                        </li>
                                        <li>
                                            <a href="mailto:c.ao@outlook.com" target="_blank" onclick="clickEventEmail()">
                                                <span class="fa-li"><i class="fas fa-envelope"></i></span>
                                                c.ao@outlook.com
                                            </a>
                                        </li>
                                        <li>
                                            <a href="tel:9811119032" target="_blank" onclick="clickEventCall()">
                                                <span class="fa-li"><i class="fas fa-mobile-alt"></i></span>
                                                (981) 111-9032
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <?php
                            include('includs/formulario_footer.php');
                            ?>
                            <div class="privacidad-link d-flex justify-content-center">
                                <a href="privacidad" target="_blank">*Aviso de privacidad</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4">
                  

                    <img src="images/img-01-footer.webp" class="mx-auto d-block mb-4" alt="">

                    <!-- <div class="social-media">
                        <ul>
                            <li>
                                <a href="https://wa.link/dhu40y" target="_blank" onclick="clickEventWhats()">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/iFlyAviacion/" target="_blank">
                                    <i class="fab fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/iflyaviacion/" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div> -->

                </div>
            </div>
        </div>
    </section>

    <!-- <section id="end"></section> -->


    <!-- Scroll-up -->

    <div class="scroll-up">
        <a id="scroll-up"><i class="fas fa-arrow-up"></i></a>
    </div>


        <!-- Btn Whats -->
        <div class="btn-float">
            <a href="#" target="_blank" onclick="clickEventWhats()" class="my-float" alt="Contacta con un asesor" title="Contactanos"><i class="fab fa-whatsapp"></i></a>
        </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="./js/jquery.min.js"></script>
    <script src="./js/popper.js"></script>
    <script src="./js/bootstrap.min.js"></script>

    <script src="./js/main.min.js"></script>
    <script src="./js/plugins.js"></script>
    <script src="./js/gallery.js"></script>

    <script src="https://www.google.com/recaptcha/api.js"></script>
</body>

</html>