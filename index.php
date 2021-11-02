<!DOCTYPE html>
<html lang="es">
<?php 
require_once "class/marine.php";
//Variable de sesion
session_start(); 
// $nombre = $_SESSION['nombre'];
//session_destroy();
?>
<!-- Header -->
<?php include 'head/head.php';?>


<body style="background-image: url(img/Animated\ Shape.svg); background-attachment: scroll">
    <!-- Navbar -->
    <?php include 'navbar/navbar.php';?>
    <?php echo "<h1>".var_dump($_SESSION)."</h1>"?>

    <!-- Pagina principal -->
    <br><br><br>

    <div class="container card col-md-10" style="border: 0;">

        <div class="row">
            <div class="col-md-2">
                <div class="card-img" style="width: 10rem; padding-top: 1rem; padding-bottom: 1rem;">
                    <img src="img/Logo.png" class="rounded" alt="Logo">
                </div>
            </div>
            <div class="col">
                <h1 class="text-center text-uppercase" style="padding-top: 5rem;">Change Marine <?php echo $nombre; ?></h1>

            </div>
        </div>
    </div>
    <br>
    <div class="container card col-md-10" style="border: 0;">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <br>
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/imagen00.jpg" alt="change">
                        </div>

                        <div class="carousel-item">
                            <img src="img/imagen01.jpg" alt="tortuga">
                        </div>

                        <div class="carousel-item">
                            <img src="img/imagen02.jpg" alt="pez">
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <br>
                
                <!--Card grup-->
                <div class="card-group">
                    <div class="card">
                        <img src="img/ayuda.jpg" class="card-img-top" alt="ayuda">
                        <div class="card-body">

                            <p class="card-text text-justify">Una botella de plástico tarda en degradarse 500 años. Hay
                                que mostrar respeto
                                medioambiental, llamar la atención a quienes contaminan las costas y también, si
                                se encuentra con algún residuo, lo ideal es que contribuya a recogerlo.</p>

                        </div>
                    </div>
                    <div class="card">
                        <img src="img/bolsa.jpg" class="card-img-top" alt="bolsa">
                        <div class="card-body">

                            <p class="card-text text-justify">El plástico tarda hasta 500 años en desintegrarse. Usar
                                bolsas de tela evitará
                                que consumas un aproximado de 30 de estos recipientes cada mes.</p>

                        </div>
                    </div>
                    <div class="card">
                        <img src="img/playa.jpg" class="card-img-top" alt="playa">
                        <div class="card-body">

                            <p class="card-text text-justify">Apoyar a organizaciones que luchan contra la contaminación
                                para proteger el
                                hábitat y la fauna marina. Este apoyo puede ser económico o también podría ser
                                voluntariado.</p>

                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div class="col-md-1"></div>
    </div>
    </div>




</body>
</html>
    