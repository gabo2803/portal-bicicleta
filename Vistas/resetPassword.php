<!DOCTYPE html>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar password</title>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="ext/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styleform.css">
    <link rel="stylesheet" href="css/banner.css">
    <link rel="stylesheet" href="css/keyframes.css">
    <!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

</head>
<body >
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3 class="d-flex justify-content-center">Recuperar password</h3>				
			</div>
			<div class="card-body">
				<form id="login-form" action="../control/accion/act_actualizarUsusarioConCodigo.php" method="POST">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" id="password" name="password" class="form-control" placeholder="contraseña" >
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" id="repetirPassword" name="repetirPassword" class="form-control" placeholder="Repetir contraseña" >
					</div>
                    <input type="hidden" id="fp_code" name="fp_code" placeholder="Código del Usuario" value="<?php echo $_REQUEST['fp_code']; ?>">
					
					<div class="form-group d-flex justify-content-center">
						<input type="submit" name="resetSubmit" value="Resetea Contraseña" class="btn float-none login_btn" >
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



<!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script> -->
<script src="ext/bootstrap/js/jquery.js"></script>       
<script src="ext/bootstrap/js/bootstrap.min.js"></script>
<!-- <script src="js/codigo.js"></script> -->
</body>
</html>