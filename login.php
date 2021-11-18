<!DOCTYPE html>
<html lang="en">

<?php include 'head/head.php';?>

<body style="background-image: url(img/fondo1.jpg); background-attachment: scroll">

        <div style="padding-top: 8rem;">
        <br>
        <div class="container card col-md-5 justify-content-center align-items-center" style="border: 0;background:#99F5EF;">

        <div class="container">
            
            <form method="post"  id="frmLogin" action="" style="background:#99F5EF;">
                <br>
                <h2 class="text-center">Login</h2>
                <br>
                <label for="email">Email</label> <span class="float-right">no tienes cuenta? <a href="./Registro.php" style="text-decoration:none;">Sign up</a></span>
                <input class="form-control" type="email" name="email" id="email" placeholder="Ingrese su email">
                <br>
                <label for="pass">Password</label>
                <input class="form-control" type="password" name="pass" id="pass" placeholder="Ingrese su contraseña">
                 <br>
                 <!-- <button type="submit" value="login" onclick="return inicioSesion();" class="btn btn-primary float-right">Ingresar</button> -->
                 <button id="btnDonwload" onclick="inicioSesion();" type="button" class="btn btn-primary">Inicio </button>
                 <br> 
                 <br>
             </form>
            
        </div>
        </div>
        </div>
        
</body>

</html>