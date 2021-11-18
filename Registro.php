<!DOCTYPE html>
<html lang="en">

<?php include 'head/head.php';
?>

<body style="background-image: url(img/fondo1.jpg); background-attachment: scroll">

<?php
 include 'navbar/navbar.php';
 ?>
    
        <br><br><br>
        <div class="container card col-md-6" style="border: 0; background:#99F5EF;">

        <div class="container">            

                <form method="post" action="" style="background:#99F5EF;">
                    <br>
                    <h2 class="text-center">Registro de Usuario</h2>
                    <br>
                    <label>Cedula</label>
                    <input class="form-control" type="text" name="cedula"  id="cedula" placeholder="Ingrese la cedula" required>
                    <br>
                    <label>Nombre</label>
                    <input class="form-control" type="text" name="nombre" id="nombre" placeholder="Ingrese su nombre" required>
                    <br>
                    <label>Direccion</label>
                    <input class="form-control" type="text" name="direccion" id="direccion" placeholder="Ingrese su direccion">
                    <br> 
                    <label>Celular</label>
                    <input class="form-control" type="text" name="celular" id="celular" placeholder="Ingrese su celular">
                    <br>
                    <label>Roll</label>
                    <select name="roll" id="roll" class="form-control">
                        <option value="std">STD</option>
                        <?php if(isset($_SESSION["roll"]) && $_SESSION["roll"] == "admin"){?>
                        <option value="admin">ADMIN</option>
                        <?php }?>
                    </select>
                    <br>
                    <label>Email</label>
                    <input class="form-control" type="email" name="email" id="email" placeholder="Ingrese su email" required>
                    <br>
                    <label>Password</label>
                    <input class="form-control" type="password" name="password" id="password" placeholder="Ingrese su contraseña" required>
                    <br>
                                        
                    <br>
                    <!-- <button type="submit" class="btn btn-primary float-right">Crear Cuenta</button> -->
                    <button id="btnRegistrar" onclick="registrosuario();" type="button" class="btn btn-primary">Crear</button>
                
                    <br>
                </form>
            </div>
        </div>

</body>

</html>