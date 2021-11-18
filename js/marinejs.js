$(document).ready(function() {
    getPremios();
});

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

function registrosuario(){
    let  cont=0;
    let cedula = $('#cedula').val();
    if(cedula != '') {
        cont++;
    }   
    let nombre = $('#nombre').val();
    if(nombre != '') {
        cont++;
    }   
    let direccion = $('#direccion').val();
    if(direccion != '') {
        cont++;
    }   
    let celular = $('#celular').val();
    if(celular != '') {
        cont++;
    }   
    let roll = $('#roll').val();
    if(roll != '') {
        cont++;
    }  
    let email = $('#email').val();
    if(email != '') {
        cont++;
    }  
    let password = $('#password').val();
    if(password != '') {
        cont++;
    }  
    if(cont == 7){
        $.ajax({
            url:'services/Marine/servicio.php',
            type: 'post',
            data: { t:"registroUsuarios",cedula, nombre, direccion, celular, roll, email , password},
            dataType: 'json' ,
            success: function(r) {
                    console.log("aqiu" + r.datos)
                    if(r.error == 0){
                        console.log("haciendo el registro de usuario")
                        window.location.href = "login.php";
                    }
            }
        });
    }else{
        console.log("contador",cont)
        alert("Rellene los campos")
    }

}

function registrodesechos(){
    let  cont=0;
    let nombre = $('#nombre').val();
    if(nombre != '') {
        cont++;
    }   
    let descripcion = $('#descripcion').val();
    if(descripcion != '') {
        cont++;
    }   
    let peso = $('#peso').val();
    if(peso != '') {
        cont++;
    }
    let id = $('#idUss').val();
    if(id != '') {
        cont++;
    }
    
    if(cont == 4){
        $.ajax({
            url:'services/Marine/servicio.php',
            type: 'post',
            data: { t:"registroDesechos",nombre, descripcion, peso, id},
            dataType: 'json' ,
            success: function(r) {
                    console.log("aqiu" + r.datos)
                    if(r.error == 0){
                        console.log("haciendo el registro de desechos");
                        alert("Desecho Insertado");
                    }
            }
        });
    }else{
        console.log("contador",cont)
        alert("Rellene los campos")
    }

}
function getPremios(){
    let id = $('#idUss').val();
    let container = document.querySelector('#contenedor')
    container.innerHTML ='';
    $.ajax({
        url:'services/Marine/servicio.php',
        type: 'post',
        data: { t:"getPremio", id},
        dataType: 'json' ,
        success: function(r) {
            if(r.error == 0 & r.datos.length > 0){
                r.datos.forEach(dato => {
                    container.innerHTML += /*html*/`
                <div class="card avanzado">
                        <div class="card-body">
                            <div class="card-body-item">
                                <div clas="texto-medio">
                                <h5 class="card-title">${dato.nombre}</h5>
                                    <div class="datos">
                                        <div>
                                            <p>${dato.descripcion}</p>
                                        </div>
                                        <div>
                                        <button id="canjear" data-valor="${dato.valor}" data-idcanejar="${dato.id}" data-idusu="${id}" onclick="canjearPremios(this)" type="button" class="btn btn-primary">Canjear</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                `
                })
            }else{
                alert(r.mensaje);
            }
        }
    });
}
function canjearPremios(that){
    let name = $('#name').val();
    let id = $(that).data('idusu');
    let idPremio = $(that).data('idcanejar');
    let valor = $(that).data('valor');
    $.ajax({
        url:'services/Marine/servicio.php',
        type: 'post',
        data: { t:"canjearPremios",id, idPremio,valor},
        dataType: 'json' ,
        success: function(r) {
                if(r.error == 0){
                    alert("haz canejado el premio " + idPremio +" El usuario "+ name);
                    //CARGAR ALERTA Y LUEGO REFRESCAR LA PAGINA
                    getPremios();
                }
        }
    });
}
