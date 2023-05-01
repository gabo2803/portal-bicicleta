<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="ext/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styleform.css">
    <link rel="stylesheet" href="plugin/SweetAlert/dist/sweetalert2.min.css">
    <!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card-reg">
			<div class="card-header d-flex justify-content-center">
				<h3>Registrarse en Bicisamaria</h3>
				<div class="d-flex justify-content-end social_icon">                
				<!-- <img src="..." alt="..." class="img-rounded"> -->
				</div>
			</div>				
			<div class="card-body">
            <form action="../control/accion/act_registrarUsuarios.php" method="post">
                <div class="input-group form-group">						
                <input placeholder="NroCedula" type="text" class="form-control" id="nroCedula" name="nroCedula">						
				</div>
                <div class="input-group form-group">						
                <input placeholder="Nombre" type="text" class="form-control" id="nombre" name="nombre">						
				</div>
                <div class="input-group form-group">						
                <input placeholder="Apellido" type="text" class="form-control" id="apellido" name="apellido">						
				</div>
                <div class="input-group form-group">						
                <input placeholder="Correo" type="email" class="form-control" id="correo" name="correo">						
				</div>
                <div class="input-group form-group">						
                <input placeholder="Contraseña" type="password" class="form-control" id="password" name="password">						
				</div>
                <div class="input-group form-group">						
                <input placeholder="Telefono" type="text" class="form-control" id="telefono" name="telefono">						
				</div>
                <div class="input-group form-group">						
                <input placeholder="Direccion" type="text" class="form-control" id="direccion" name="direccion">						
				</div>
                <div class="input-group form-group">						
                <select class=" form-control" id="administrador" name="administrador">
                    <option>Elegir rol</option>
                    <option value="1">Administrador</option>
                    <option value="0">Usuario</option>
                </select>						
				</div>
                <div class="justify-content-center row">
                    <button type="button" class="btn btn-primary btn-sm" >Cancelar</button>
                    <button type="submit" class="btn btn-primary btn-sm" onclick="Guardar();">Guardar</button>
                </div>




            </form>	
            
			</div>
            <div class="card-footer">
				<div class="d-flex justify-content-center links">
					Regresar al Inicio<a href="login.php">Iniciar</a>
				</div>				
			</div>	
		</div>
	</div>
</div>
<script src="js/login.js"></script>
<script src="plugin/SweetAlert/dist/sweetalert2.all.min.js"></script>  
  <script src="ext/bootstrap/js/jquery.js"></script>       
  <script src="ext/bootstrap/js/bootstrap.min.js"></script>
  <script src="js/login.js"></script>
    
</body>
</html>