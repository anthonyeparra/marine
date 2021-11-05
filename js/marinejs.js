// $(document).ready(function() {
// });

function inicioSesion(){
    let usuario = $('#email').val();
    let password = $('#pass').val();
    
    $.ajax({
        url:'services/Marine/servicio.php',
        type: 'post',
        data: { t:"inicioSesion", usuario , password },
        dataType: 'json' ,
        success: function(r) {
                console.log("aqiu" + r)
                if(r.error == 0){
                    console.log("entra al inicio de sesion")
                    window.location.href = "index.php";
                }
        }
    });
}
// C:\xampp\htdocs\marine\services\Marine\servicio.php
function registrosuario(){
    let cedula = $('#cedula').val();
    let nombre = $('nombre').val();
    let direccion = $('direccion').val();
    let celular = $('celular').val();
    let email = $('#email').val();
    let password = $('#pass').val();
    
    $.ajax({
        url: 'ajx/ajxMarine.php',
        type: 'post',
        data: { t: "registroUsuarios",cedula, nombre, direccon, celular, email , password},
        dataType: 'json' ,
        success: function(r) {
                console.log("aqiu" + r.error)
                if(r.error == 0){
                    console.log("haciendo el registro de usuario")
                    window.location.href = "login.php";
                }
        }
    });
}
