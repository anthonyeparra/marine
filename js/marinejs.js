// $(document).ready(function() {
// });

function inicioSesion(){
    let usuario = $('#email').val();
    let password = $('#pass').val();
    
    $.ajax({
        url: 'ajx/ajxMarine.php',
        type: 'post',
        data: { op: 1, usuario , password },
        dataType: 'json' ,
        success: function(r) {
                console.log("aqiu" + r.error)
                if(r.error == 0){
                    console.log("entra al inicio de sesion")
                    window.location.href = "index.php";
                }
            //
        }
    });
}
