<!DOCTYPE html>
<html lang="en">

<?php include 'head.php';


?>


<body style="background-image: url(img/Animated\ Shape.svg); background-attachment: scroll">
    
        <br>
        <div class="container card col-md-6" style="border: 0;">

        <div class="container">
            

                <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                    <br>
                    <h2 class="text-center">Sign Up</h2>
                    <br>
                    <label>Cedula</label> <span class="float-right">ya tienes cuenta? <a href="./login.php">Login</a></span>
                    <input class="form-control" type="text" name="cedula" placeholder="Ingrese la cedula" required>
                    <br>
                    <label>Nombre</label>
                    <input class="form-control" type="text" name="nombre" placeholder="Ingrese su nombre" required>
                    <br>
                    <label>Direccion</label>
                    <input class="form-control" type="text" name="direccion" placeholder="Ingrese su direccion">
                    <br>
                    <label>Celular</label>
                    <input class="form-control" type="text" name="celular" placeholder="Ingrese su celular">
                    <br>
                    <label>Email</label>
                    <input class="form-control" type="email" name="email" placeholder="Ingrese su email" required>
                    <br>
                    <label>Password</label>
                    <input class="form-control" type="password" name="password" placeholder="Ingrese su contraseña" required>
                    <br>
                    <label>Confirme su password</label>
                    <input class="form-control" type="password" name="password2" placeholder="confirme su contraseña" required>
                                        
                    <br>
                    <button type="submit" class="btn btn-primary float-right">Crear Cuenta</button>
                    <br>
                
                    <br>
                </form>
            </div>
        </div>

</body>

</html>