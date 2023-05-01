<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva</title>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="ext/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/banner.css">
    <link rel="stylesheet" href="css/keyframes.css">
</head>
<body>
    <header>
        <nav class=" navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <a class="navbar-brand" href="#">Menu</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class=" collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="registro.php">Registrarse</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   Galerias
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="galeria_montana.php">Bicicletas de Montaña</a>
                    <a class="dropdown-item" href="galeria_ruta.php">Bicicletas de Rutas</a>
                    <a class="dropdown-item" href="galeria_niño.php">Bicicletas de Niños</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Algo mas aqui!</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="#" >Rutas</a>
                </li>
              </ul>              
            </div>
          </nav>
    </header>
    
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