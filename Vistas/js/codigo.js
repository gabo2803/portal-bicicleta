$('#login-form').submit(function(e){
    e.preventDefault();
    var us = $("#usuario").val();
    var pas = $("#password").val();
    if(us==""||pas==""){
        Swal.fire({
            type:'warning',
            title:'Debe ingresar usuario y/o password',
        });
    }

 });