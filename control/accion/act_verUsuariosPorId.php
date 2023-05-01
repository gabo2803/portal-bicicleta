<?php
    session_start();
    require_once (__DIR__.'/../mdb/mdbUsuario.php');
    
    $idUsuario = $_SESSION['ID_USUARIO'];

    $usuario = verUsuarioPorId($idUsuario);       
    
    echo json_encode($usuario);  
    

   
   