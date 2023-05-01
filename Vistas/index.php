<!DOCTYPE html>
<?php
//session_start();

 if($_SESSION['ID_USUARIO']==null)
      header("Location: login.php");
  
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="ext/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/banner.css">
    <link rel="stylesheet" href="css/keyframes.css">    
    <link rel="stylesheet" href="plugin/sweetalert/dist/sweetalert2.min.css">
    
</head>
<body>
    <header>
        <nav class="germ_navbar navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <a class="navbar-brand" href="#">Menu</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class=" collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
                </li>                
                <li class="nav-item ">
                  <a class="nav-link " href="galerias.php"  >
                   Galerias
                  </a>                  
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="#" >Rutas</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php if($_SESSION['ID_USUARIO']!=null) echo $_SESSION['NOMBRE_USUARIO']  ; ?></span>                  
                  </a>                  
                  <div class="dropdown-menu color" aria-labelledby="navbarDropdown">
                  <a class="editar dropdown-item" >Editar</a>
                  <a class="dropdown-item" href="../control/accion/act_logout.php" >Salir</a>                  
                  </div>
                  
                </li>
                <li ><?php echo '<img src="../fotos/'.$_SESSION['FOTO_USUARIO'].'" width="30" heigth="40">'; 
                ?>                
                </li>
              </ul>              
            </div>
          </nav>
    </header>
    <!-- Modal -->
<div class="modal fade" id="modalEditarUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header ">
        <h5 class="modal-title" id="ModalEditarLabel">Editar usuario</h5> 
        <div style="padding:7px 0;" class="justify-content-center row">
        <div class="col-md-8 "><?php echo '<img src="../fotos/'.$_SESSION['FOTO_USUARIO'].'" width="100" heigth="100">'; 
                ?></div>
        </div>       
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="../control/accion/act_editarUsuarios.php" method="post" enctype="multipart/form-data">
      <div class="modal-body">
             <div class="container-fluid">
                <div style="padding:7px 0;" class="justify-content-center row">
                <div class="col-md-8"><input placeholder="NroCedula" type="text" class="form-control" name="nroCedula"></div>
                </div>
                <div style="padding:7px 0;" class="justify-content-center row">
                <div class="col-md-8"><input placeholder="Nombre" type="text" class="form-control" name="nombre"></div>
                </div>
                <div style="padding:7px 0;" class="justify-content-center row">
                <div class="col-md-8"><input placeholder="Apellido" type="text" class="form-control" name="apellido"></div>
                </div>                                            
                <div style="padding:7px 0;" class="justify-content-center row">
                <div class="col-md-8"><input placeholder="Correo" type="email" class="form-control" name="correo"></div>
                </div>
                <div style="padding:7px 0;" class="justify-content-center row">
                <div class="col-md-8"><input placeholder="Contraseña" type="password" class="form-control" name="password"></div>
                </div>                
                <div style="padding:7px 0;" class="justify-content-center row">
                <div class="col-md-8"><input placeholder="Telefono" type="text" class="form-control" name="telefono"></div>
                </div>
                <div style="padding:7px 0;" class="justify-content-center row">
                <div class="col-md-8"><input placeholder="Direccion" type="text" class="form-control" name="direccion"></div>
                </div>
                <div style="padding:7px 0;" class="justify-content-center row">                
                <div class="rol col-md-8">
                <select class=" form-control" name="administrador">
                    <option>Elegir rol</option>
                    <option value="1">Administrador</option>
                    <option value="0">Usuario</option>
                </select>
                </div>
                </div>
                <div style="padding:7px 0;" class="justify-content-center row">
                <div class=" ol-md-8"><input placeholder="Foto" type="file" class="form-control" name="foto"   ></div>
                </div>
                
                <input type="hidden" placeholder="idUsuario" type="texto" class="form-control" name="idUsuario">
              
                <div class="justify-content-center row">
                    <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary btn-sm">Guardar</button>
                </div>
            </div>
       

      </div>
     
      </form>
    </div>
  </div>
</div>
<!-- end modal -->
    <section>
        <div class="cont_banner">
            <div class="sombra">
                <h1>Ciclo Samaria</h1>
                <p>Aqui podras encontra todo tipo de bicicletas.</p>
                <hr>
                <div class="cont_banner_link">                    
                    <a class="banner_link_1" href="../control/accion/act_verUsuarios.php">Reserva</a>
                    <a class="banner_link_2" href="#">Rutas</a>
                </div>
              
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row cont_sec_1">
                <div class="col-md-9">
                    <h2><b>Presentacion</b></h2>
                    <p><i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit quibusdam ratione minus quisquam distinctio. Modi!</i></p>
                    <hr>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non maxime similique corrupti eius repellat sapiente ipsam voluptatum facere explicabo temporibus minima, dolore dolorem nisi placeat ipsa officiis inventore impedit. Maxime.  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis sapiente possimus hic perspiciatis minus excepturi commodi aliquid omnis dolor incidunt!</p>
                </div>
                <div class="cont_sec_1_link col-md-3 text-center">
                    <a href="#" class="btn btn-secondary btn-md">Visita Nuestra Pagina</a>
                </div>  


            </div>
        </div>
    </section>
    <footer>
      <div class="contenedor-footer">
          <div class="content-foo">
              <h4>Telefono</h4>
              <p>3455678</p>
          </div>
          <div class="content-foo">
              <h4>Email</h4>
              <p>cicliscocolomia@uci.co</p>
          </div>
          <div class="content-foo">
              <h4>Telefono</h4>
              <p>3455678</p>
              
          </div>
      </div>
      <h2 class="ultimo-titulo">&copy; Gabriel Ramirez | Unimagdalena</h2>
  </footer>
<script src="plugin/SweetAlert/dist/sweetalert2.all.min.js"></script> 
<script src="ext/bootstrap/js/jquery.js"></script>       
<script src="ext/bootstrap/js/bootstrap.min.js"></script>
<script src="js/Usuarios.js"></script>


</body>
</html>