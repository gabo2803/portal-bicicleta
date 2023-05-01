<?php

session_start();
    
require_once(__DIR__."/../mdb/mdbUsuario.php");
require_once(__DIR__."/../../model/entidad/Usuario.php");
  

    $idUsuario = $_POST['idUsuario'];
    $cedula = $_POST['nroCedula'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellido'];
    $correo  = $_POST['correo'];
    $password = $_POST['password'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];  
    $nom = $_FILES['foto']['name'];     
    $ruta = $_FILES['foto']['tmp_name'];      
    $destino = $_SERVER["DOCUMENT_ROOT"].'/portal_Bici/fotos/'.$nom;
    copy($ruta,$destino);
    $administrador = $_POST['administrador'];         

   
    
    $usuario = new Usuario($idUsuario,$cedula,$nombre,$apellidos,$correo,$password,$direccion,$telefono,$nom,$administrador,null);
    editarUsuario($usuario); 

    //echo json_encode($usuario);  
    
   

    header("Location: ../../Vistas/index.php");
    