<!DOCTYPE html>
<html lang="es">
<!-- Header -->
<?php include 'head/head.php';?>


<body style="background-image: url(img/fondo1.jpg); background-attachment: scroll">
    <!-- Navbar -->
    <?php include 'navbar/navbar.php';
    if(!isset($_SESSION["active"])){
      header("Location: login.php");
  }    
    ?>
    

    <!-- Pagina principal -->
    <br><br><br>


    <div class="container">
        <div class="row">
          <section class="carousell">
            
          <!--Carousel-->
          <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/marino1.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h2>Mundo Marino</h2>
            <p>El bienestar de los peces da vida al oceano.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/marino2.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
          <h2>Mundo Marino</h2>
            <p>Hermosas Tortugas Marinas.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/marino3.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h2>Mundo Marino</h2>
            <p>Los corales son importantes para el ecosistema marino</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </button>
</div>
<!--Fin Carousel-->
          </section>
      </div><br>

      <section class="cards">
        <!--Cards 1-->
        <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card h-100">
            <img src="img/desecho1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Residuos Plasticos</h5>
              <p class="card-text">Con este tipo de desechos se ven afectadas muchas especies marinas, puesto que estos mismos antes 
                de auto-degradarse generan un daño muy grande en la fauna marina.
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="img/desecho2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Grupos de limpieza</h5>
              <p class="card-text">Estos se encargan de brindar atención mas constante a los residuos contaminantes que 
                el ser humano arroja.
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="img/desecho3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Campañas de limpieza</h5>
              <p class="card-text">Estas fueron creadas para disminuir y a futuro eliminar los residuos en las playas
               creando consciencia en los seres humanos.</p>
            </div>
          </div>
        </div>
      </div><br><br>
      <!--Fin Cards 1-->

      <!--Cards 2-->

      <div class="row row-cols-1 row-cols-md-2">
  <div class="col mb-4">
    <div class="card">
      <img src="img/contaminacion1.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Prohibir el uso de plásticos desechables y adoptar políticas de control de la basura</h5>
        <p class="card-text">Al día de hoy, 14 países caribeños —un tercio de los pequeños estados insulares de la región— prohibieron los plásticos desechables y la espuma de poliestireno.</p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="img/contaminacion2.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Reducir o reciclar el plástico</h5>
        <p class="card-text">Es necesario aplicar aranceles, programas voluntarios y la prohibición a la importación y uso 
          de desechos comunes como botellas, sorbetes y bolsas de plástico desechables, así como contenedores de comida de espuma 
          de poliestireno.</p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="img/contaminacion3.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Reducir el vertido de aguas cloacales sin tratamiento</h5>
        <p class="card-text">Un aspecto crucial es lo que se vierte en mares y océanos. 
          Hay que aumentar el tratamiento, reciclado y reutilización de las aguas residuales. Conectar todos los hogares al 
          sistema de cloacas y reducir la contaminación de los desagües pluviales.</p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="img/contaminacion4.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Controlar la contaminación química e industrial</h5>
        <p class="card-text">Hay que aunar esfuerzos para identificar los focos de contaminación química; controlar el uso y vertido 
          de químicos en la minería artesanal; promover el reciclado de aceite usado en áreas urbanas; incentivar la producción
           de bienes duraderos.</p>
      </div>
    </div>
  </div>
</div>

      <!--Fin Cards 2-->
      </section><br><br>
      
</div>

<footer class="w-100 d-flex align-items justify-content-center flex-wrap" style="background-color:#2B2E33; color:white;">
        <p class="fs-5 px-3 pt-3">Marine Protection. &copy; Todos los derechos reservados 2021</p>
        <div id="iconos">
          <a href="#"><i class="bi bi-facebook"></i></a>
          <a href="#"><i class="bi bi-twitter"></i></a>
          <a href="#"><i class="bi bi-instagram"></i></a>
        </div>
      </footer>



</body>
</html>
    