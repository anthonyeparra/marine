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

    <input type="hidden" name="idUss"  id="idUss" value="<?php echo $_SESSION["id"];?>">
    <input type="hidden" name="name"  id="name" value="<?php echo $_SESSION["nombre"];?>">
    <div class="container" id="contenedor">
    </div>



</body>
</html>
    