<!DOCTYPE html>
<html lang="es">
<!-- Header -->
<?php include 'head/head.php';
?>



<body style="background-image: url(img/fondo1.jpg); background-attachment: scroll">
    <!-- Navbar -->
    <?php include 'navbar/navbar.php'; 
    if(!isset($_SESSION["active"])){
        header("Location: login.php");
    }
    ?>
    

    <!-- Pagina principal -->
    <br><br><br>


    <div class="container card col-md-6" style="border: 0; background:#99F5EF;">

    <div class="container">
    <form name="frmDesechos" id="frmDesechos" method="post" style="background:#99F5EF;">
                    <br>
                    <h2 class="text-center">Registro de Desechos</h2>
                    <br>
                    <label for="nombre">Nombre</label>
                    <input class="form-control" type="text" name="nombre"  id="nombre" placeholder="Ingrese el nombre" required>
                    <input type="hidden" name="idUss"  id="idUss" value="<?php echo $_SESSION["id"];?>">
                    <br>
                    <label for="descripcion">Descripción</label>
                    <input class="form-control" type="text" name="descripcion" id="descripcion" placeholder="Ingrese la descripción" required>
                    <br>
                    <label for="peso">Peso</label>
                    <input class="form-control" type="text" name="peso" id="peso" placeholder="Ingrese el peso">
                    <br>
                    <button id="btnRegistrarDesecho" onclick="registrodesechos();" type="button" class="btn btn-success">Registrar</button>
                    <br>
                
                    <br>
                </form>
    </div>

</div>




</body>
</html>
    