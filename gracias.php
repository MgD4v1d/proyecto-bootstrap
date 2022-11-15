<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="title" content="iFly Rutas">
    <meta content="all" name="robots" />
    <link rel="canonical" href="http://www.ifly.com.mx/" />
    <meta name="keywords" content="Paseo, yucatán, alturas, zona turistica, vuelos, aviones, cenotes, las coloradas">
    <meta name="author" content="iFly">
    <meta name="description" content="En iFly Rutas, deja que nuestros experimentados pilotos te den un paseo desde las alturas por las hermosas zonas turisticas de yucatán.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:title" content="iFly Rutas">
    <meta property="og:description" content="En iFly Rutas, deja que nuestros experimentados pilotos te den un paseo desde las alturas por las hermosas zonas turisticas de yucatán.">
    <meta property="og:image" content="">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="">
    <meta property="twitter:title" content="iFly Rutas">
    <meta property="twitter:description" content="En iFly Rutas, deja que nuestros experimentados pilotos te den un paseo desde las alturas por las hermosas zonas turisticas de yucatán.">
    <meta property="twitter:image" content="">

    <title>iFly Rutas</title>


    <!-- Bootstrap CSS && CUSTOM CSS -->
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/ifly-rutas.css">
    <link rel="stylesheet" href="./css/responsive.css">
    <link rel="stylesheet" href="./css/fontawesome/all.min.css">


</head>

<body id="gracias">
    <?php include_once('includs/analytics.php') ?>


    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-12 col-lg-11">
                    <h1>
                        ¡MUCHAS GRACIAS!
                    </h1>
                    <p>
                        Tu información ha sido enviado con éxito.<br>
                        Pronto nos pondremos en contacto contigo.
                    </p>
                    <div class="btn-enlaces-thank-you btn-default btn-outline center-block">ESPERA UN MOMENTO POR FAVOR. <span id="countspiner"></span></div>
                </div>
            </div>
        </div>
    </section>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="./js/jquery.min.js"></script>
    <script src="./js/popper.js"></script>
    <script src="./js/bootstrap.min.js"></script>


    <script>
        const spiner = document.querySelector('#countspiner');
        spiner.innerHTML = '<i class="fa fa-spinner fa-spin"></i>';

        let totalTime = 5;
        const url= './';

        const updateReloj = () => {
            if(totalTime === 0){
                window.location = url;
            }else{
                totalTime -=1;
                setTimeout('updateReloj()', 1000);
            }
        }

        window.onload = updateReloj();


    </script>

</body>

</html>