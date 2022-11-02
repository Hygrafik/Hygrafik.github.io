<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Comunidad Salango</title>
    <link href="resources/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="resources/css/mystyle.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/logo.png">

</head>

<body>

    <!--INICIO-->
    <header>
        <div class="collapse bg-nav " id="navbarHeader">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-7 py-4">
                        <h4 class="text-white">Salango</h4>
                        <p class="text-white-50"> Comunidad de gente cálida y amable, donde encontraras una hermosa biodiversidad, Cabañas Familiares, Museo Arqueologico e Historico, riqueza natural y una Gastronomia Deliciosa</p>
                    </div>
                    <div class="col-sm-4 offset-md-1 py-4">
                        <h4 class="text-white">Contacto</h4>
                        <ul class="list-unstyled">
                            <li><a href="https://www.google.com/maps/dir/-1.5906262,-80.842832/Museo+Arqueologico+De+Salango+los+balceros+del+sur+y+calle4+Salango+130315/@-1.5906798,-80.8429607,16z/data=!4m8!4m7!1m0!1m5!1m1!1s0x902e9dc58b47614b:0x309300df1e1c20c0!2m2!1d-80.842831!2d-1.5906111" class="text-warning">Ubicación</a></li>
                            <li><a href="https://comunidadsalango.com/" class="text-warning">Sitio Web</a></li>
                            <li><a href="https://api.whatsapp.com/send?phone=593985543879" class="text-warning">Whatsapp</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar navbar-dark bg-brown py-3 ">
            <div class="container">
                <a href="index.php" class="navbar-brand d-flex align-items-center">
                    <strong class="text-uppercase text-white text-wrap ">Museo Arqueológico Salango</strong>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </header>

    <main>

        <div class="container-fluid bg-brown  pb-4 border-bottom border-danger border-4 border-opacity-75">
            <div class=" container col-xxl-8 px-4 py-5">
                <div class="row flex-lg-row-reverse align-items-center g-5 ">
                    <div class="col-10 col-sm-8 col-lg-6">
                        <img src="img/es.png " class="ming py-lg-5 d-block mx-lg-auto img-fluid">

                    </div>
                    <div class="col-lg-6">
                        <h1 class="display-5 fw-bold lh-1 mb-3 text-white-50">Nuestro museo</h1>
                        <p class="lead text-white ">Expone 245 piezas declaradas patrimoniales culturales, con relatos de 4.500 años de las culturas Valdivia, Machalilla, chorrera-Engoroy, Bahía, Guangala y Manteña.</p>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                            <a href="https://www.google.com/maps/dir/-1.5906262,-80.842832/Museo+Arqueologico+De+Salango+los+balceros+del+sur+y+calle4+Salango+130315/@-1.5906798,-80.8429607,16z/data=!4m8!4m7!1m0!1m5!1m1!1s0x902e9dc58b47614b:0x309300df1e1c20c0!2m2!1d-80.842831!2d-1.5906111" class="btn btn-outline-warning "> MUSEO ARQUEOLÓGICO</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- inicia las culturas -->
     <?php include_once "modals/culturasModals.html" ?> 


        <!-- CULTURA BAHIA I-II -->

        <div class="container-fluid py-5 bg-fondo">
            <div class="container ">
                <div class="row featurette">
                    <div class="col-md-7 ">
                        <h2 class="featurette-heading fw-normal lh-1">Cultura <span class="text-muted">Bahia I - Bahia II </span></h2>
                        <p class="lead">En el campo artístico los Bahía se caracteriza por la producción abundante de figurillas cerámicas, que representan a hombres y mujeres en diversas actitudes presentándose en varios tamaños desde las más pequeñas hasta las de altura considerable o llamadas "gigantes".</p>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-start pb-5 ">
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalBahia">
                                Ver Galeria 3D | AR
                            </button>
                        </div>
                       
                       
                    </div>
                    <div class="col-md-5 ">
                        <img src="img/figurinSilbato.png" class=" size-img featurette-image img-fluid mx-auto ">
                        </img>
                    </div>

                </div>

                <hr class="featurette-divider  ">

                <div class="row featurette">
                    <div class="col-md-7 order-md-2">
                        <h2 class="featurette-heading fw-normal lh-1">Cultura <span class="text-muted"> Guangala</span></h2>
                        <p class="lead"> Los sellos de esta cultura son numerosos y predominantemente planos o planoconvexos; contienen una amplia gama de formas geométricas, que de manera inevitable sugieren los signos de un lenguaje pictográfico.</p>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-start pb-5">
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#manteña">
                                Ver Galeria 3D | AR
                            </button>
                        </div>
                       
                    </div>
                    <div class="col-md-5 order-md-1">
                        <img src="img/guangalaimg.png" class="size-img featurette-image img-fluid mx-auto">
                        </img>

                    </div>
                </div>

                <hr class="featurette-divider">

                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="featurette-heading fw-normal lh-1">Cultura <span class="text-muted"> Chorrera</span></h2>
                        <p class="lead">(1800 a. C. y 300 a. C.) Presenta un desarrollo estético alfarero sorprendente, que se extendió en todo el litoral ecuatoriano, y junto a las culturas Valdivia y Machalilla forman parte del periodo de desarrollo regional que es la base de la identidad cultural de la costa ecuatoriana</p>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-start pb-5">
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                Ver Galeria 3D | AR
                            </button>
                        </div>
                        
                    </div>
                    <div class="col-md-5">
                        <img src="img/chorrera.png" class="size-img featurette-image img-fluid mx-auto">

                    </div>
                </div>

                <hr class="featurette-divider">

                <div class="row featurette">
                    <div class="col-md-7 order-md-2">
                        <h2 class="featurette-heading fw-normal lh-1">Cultura <span class="text-muted"> Machalilla</span></h2>
                        <p class="lead">Dio su nombre a la cultura del formativo allí descubierta por Emilio Estrada. Fue un gran asentamiento prehistórico formando el bastión septentrional del señorío de Salangome. Machalilla, Puerto López y Salango formaron el núcleo de una intensiva actividad naviera, comercial y pesquera.</p>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-start pb-5">
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                Ver Galeria 3D | AR
                            </button>
                        </div>
                        
                    </div>
                    <div class="col-md-5 order-md-1">
                        <img src="img/imgMachalilla.png" class="size-img featurette-image img-fluid mx-auto">

                    </div>
                </div>

                <hr class="featurette-divider">

                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="featurette-heading fw-normal lh-1">Cultura <span class="text-muted">Manteña</span></h2>
                        <p class="lead">(800 d. C. y 1532 d. C.) los manteños hicieron del comercio una de sus principales actividades económicas, de lo que se deduce el dominio del mar y el uso de embarcaciones. La explotación de la concha tiene antecedentes muy antiguos, puesto que en Salango esta actividad aparece desde la época de Valdivia, pasando por Machalilla, Chorrera, Guangala, Bahía, hasta la época Manteña</p>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-start pb-5">
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                Ver Galeria 3D | AR
                            </button>
                        </div>
                       
                    </div>
                    <div class="col-md-5">
                        <img src="img/manteña.png" class="size-img featurette-image img-fluid mx-auto">
                    </div>
                </div>


            </div>
        </div>


       

    </main>
        
    <?php include_once "view/foother.php" ?> 
    <!--FIN-->
    <script type="module" src="resources/js/model-viewer.min.js"></script>
</body>

<script src="resources/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</html>