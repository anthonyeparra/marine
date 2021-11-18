<?php
require_once "../class/marine.php";
Marine::cerrarSesion();
header("Location: ../login.php");
