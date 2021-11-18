<?php
    require_once "class/marine.php";
    $clase = new Marine();
    session_start();
    $admin = false;
    //if(!$_SESSION["active"]) header('Location: login.php');
    // require_once "../class/marine.php";
    if(isset($_SESSION["roll"]) && $_SESSION["roll"] == "admin") $admin = true;
    if(isset($_SESSION["active"])){
   ?>

<script src="librerias/bootstrap4/bootstrap.min.js"></script>

<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">
            <img src="img/Logo4.png" width="30" height="30" class="d-inline-block align-top rounded" alt="">
        </a>
        <div class="collapse navbar-collapse"  id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php"> Inicio </a>
                </li>
                <?php if($admin){?>
                <li class="nav-item">
                    <a class="nav-link" href="panel_usuarios.php">Control Usuario</a>
                </li>
                <?php }?>
                
                <li class="nav-item">
                    <a class="nav-link" href="registrar_desechos.php">Registrar Desechos</a>
                </li>
                <?php if(!$admin){ ?>
                <li class="nav-item">
                    <a class="nav-link" href="canjear.php"> Canjear premios </a>
                </li>
                <?php }else{?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                        Reportes
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Usuarios</a>
                        <a class="dropdown-item" href="#">Premios</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <?php }?>
                </ul>

      <form class="d-flex">
      <ul class="navbar-nav mr-auto">
      <li class="nav-item">
          </li>
          <li class="nav-item">
          <a class="nav-link" href="procesos/cerrarSession.php">Cerrar sesión</a>
          </li>
                </ul>
    </form>    
        </div>
    </nav>
    <?php }?>
