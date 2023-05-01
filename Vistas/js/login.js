var url = "../../control/accion/act_registrarUsuarios.php";

$(document).ready(function() {
   MostrarAlerta("Éxito!", "Datos guardados con éxito", "success");
})


function Guardar() {
    

    $.ajax({
        url: url,
        data: {
            "nroCedula" : document.getElementById('nroCedula').value,
            "nombre" : document.getElementById('nombre').value,
            "apellido" : document.getElementById('apellido').value,
            "correo" : document.getElementById('correo').value,
            "password" : document.getElementById('password').value,
            "direccion" : document.getElementById('direccion').value,
            "telefono" : document.getElementById('telefono').value,
            "administrador" : document.getElementById('administrador').value            
        },
        type: 'POST',
        dataType: 'json'
    }).done(function(response) {
        if (response == "OK") {
            MostrarAlerta("Éxito!", "Datos guardados con éxito", "success");
        } else {
            MostrarAlerta("Error!", response, "error");
        }
        
    }).fail(function(response) {
        console.log(response);
    });
}

function MostrarAlerta(titulo, descripcion, tipoAlerta) {
    Swal.fire(
        titulo,
        descripcion,
        tipoAlerta
    );
}