<?php

session_start();

require_once(__DIR__."/../mdb/mdbUsuario.php");
require_once(__DIR__."/../../model/entidad/Usuario.php");

$cedula = $_POST['nroCedula'];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellido'];
$correo  = $_POST['correo'];
$password = $_POST['password'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$administrador = $_POST['administrador'];


 
$usuario = new Usuario(NULL,$cedula,$nombre,$apellidos,$correo,$password,$direccion,$telefono,null,$administrador,null);
$resultado = registrarUsuario($usuario);  

echo json_encode($resultado);


  
   
//header("Location: ../../Vistas/login.php"); 

 



