$(document).ready(function(){
    $(".editar").on("click",function(){
        let idUsuario = 10;   

        $.ajax({
            type: "POST",
            data: {idUsuario: parseInt(idUsuario, 10)},
            url: "../control/accion/act_verUsuariosPorId.php",
            success: function(data){
                let usuario = JSON.parse(data)
             
                $("#modalEditarUsuario").modal('show');                
                $("#modalEditarUsuario input[name='nroCedula']").val(usuario.nroCedula)
                $("#modalEditarUsuario input[name='nombre']").val(usuario.nombres)
                $("#modalEditarUsuario input[name='apellido']").val(usuario.apellidos)
                $("#modalEditarUsuario input[name='correo']").val(usuario.correo)
                $("#modalEditarUsuario input[name='password']").val(usuario.password)
                $("#modalEditarUsuario input[name='direccion']").val(usuario.direccion)
                $("#modalEditarUsuario input[name='telefono']").val(usuario.telefono) 
                 
                $("#modalEditarUsuario input[name='administrador']").val(usuario.administrador)
                $("#modalEditarUsuario input[name='foto']").val(null)
                $("#modalEditarUsuario input[name='idUsuario']").val(usuario.id)  

              
          }})

    })
    function Consultar() {
        $.ajax({            
            url: "../control/accion/act_verUsuarios.php",
            success: function(result){
                console.log(Response);
                var html = "";
            /* $.each(response, function(index, data) {
                html += "<tr>";
                html += "<td>" + data.nombres + "</td>";
                html += "<td>" + data.apellidos + "</td>";
                html += "<td>" + data.fechaNacimiento + "</td>";
                html += "<td>" + data.direccion + "</td>";
                html += "<td>" + data.telefono + "</td>";
                html += "<td>";
                html += "<button class='btn btn-warning' onclick='ConsultarPorId(" + data.idPersona + ");'><span class='fa fa-edit'></span> Modificar</button>"
                html += "<button class='btn btn-danger' onclick='Eliminar(" + data.idPersona + ");'><span class='fa fa-trash'></span> Eliminar</button>"
                html += "</td>";
                html += "</tr>";
            });
            document.getElementById("datos").innerHTML = html;
            $('#tablaPersona').DataTable(); */
            
         
        }})
    
           
        
    }

    

});

function insertarDatosUsuarioEnModal(){
    
}