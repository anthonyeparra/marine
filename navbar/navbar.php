<?php
    // session_start();
    // echo var_dump($_SESSION);

    // $nombre = $_SESSION['nombre'];
    // echo "aqui ". $nombre ."<br>" ;
    // echo  $_SESSION['active'];

echo '
<!--Navbar-->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">
            <img src="img/Logo4.png" width="30" height="30" class="d-inline-block align-top rounded" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php"> Inicio </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">  </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Backup.php"> Copia de Seguridad </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="premios.php"> Premios </a>
            </ul>
            <ul class="navbar-nav">
                <!--Navbar text with an inline element-->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle navbar-brand mb-0 h1" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       ' . "ANTHONY" . '
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="salir.php">Cerrar sesión</a>
                      <!--<div class="dropdown-divider"></div>-->
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    ';?>