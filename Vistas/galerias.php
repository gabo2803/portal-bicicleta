<!DOCTYPE html>
<?php
session_start();

 if($_SESSION['ID_USUARIO']==null)
      header("Location: login.php");
  
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria Montaña</title>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="ext/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/banner.css">
    <link rel="stylesheet" href="css/keyframes.css">
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
    <br><br><br>
          <div class="container_galerias">
            <div class="item">
              <img src="img/galeria_montana/Cannondale Jekyll 29.jpg" alt="" class="item-img">
              <div class="item-text">
                <h3>Cannondale Jekyll 29</h3>
                <p>texto</p>
              </div>
            </div>

            <div class="item">
              <img src="img/galeria_montana/CANYON Exceed CFT LTD.jpg" alt="" class="item-img">
              <div class="item-text">
                <h3>CANYON Exceed CFT LTD</h3>
                <p>texto</p>
              </div>
            </div>

            <div class="item">
              <img src="img/galeria_montana/Commencal Clash Essential.jpg" alt="" class="item-img">
              <div class="item-text">
                <h3>Commencal Clash Essential</h3>
                <p>texto</p>
              </div>
            </div>

            <div class="item">
              <img src="img/galeria_montana/KTM Ultra Sport.jpg" alt="" class="item-img" >
              <div class="item-text">
                <h3>KTM Ultra Sport</h3>
                <p>texto</p>
              </div>
            </div>

            <div class="item">
              <img src="img/galeria_montana/ORBEA ALMA H50.jpg" alt="" class="item-img">
              <div class="item-text">
                <h3>ORBEA ALMA H50</h3>
                <p>texto</p>
              </div>
            </div>

            <div class="item">
              <img src="img/galeria_montana/Santa Cruz 5010 3 C R-Kit.jpg" alt="" class="item-img">
              <div class="item-text">
                <h3>Santa Cruz 5010 3 C R-Kit</h3>
                <p>texto</p>
              </div>
            </div>

            <div class="item">
              <img src="img/galeria_montana/SCOTT SCALE 960.jpg" alt="" class="item-img">
              <div class="item-text">
                <h3>SCOTT SCALE 960</h3>
                <p>texto</p>
              </div>
            </div>

            <div class="item">
              <img src="img/galeria_montana/SCOTT SCALE RC 900.jpg" alt="" class="item-img">
              <div class="item-text">
                <h3>SCOTT SCALE RC 900</h3>
                <p>texto</p>
              </div>
            </div>
            <div class="item">
              <img src="img/galeria_montana/SCOTT SCALE RC 900.jpg" alt="" class="item-img">
              <div class="item-text">
                <h3>SCOTT SCALE RC 900</h3>
                <p>texto</p>
              </div>
            </div>

          </div>
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
  
  <script src="ext/bootstrap/js/jquery.js"></script>       
  <script src="ext/bootstrap/js/bootstrap.min.js"></script>
  <script src="js/index.js"></script>
    
</body>
</html>