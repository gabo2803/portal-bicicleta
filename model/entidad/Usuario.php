<?php

//Esta clase POJO sirve para guardar los datos de un Usuario
//Por ejemplo, un objeto creado a partir de esta clase
//tendrá guardado los datos de un usuario de la tabla Usuarios de la
//base de datos

class Usuario
{
    public $id;
    public $nroCedula;
    public $nombres;
    public $apellidos;
    public $correo;
    public $password;
    public $direccion;
    public $telefono;
    public $destino;
    public $administrador;
  

    public function __construct($id, $nroCedula, $nombres, $apellidos, $correo, $password, $direccion, $telefono, $destino, $administrador){

          $this->id = $id;
          $this->nroCedula = $nroCedula;
          $this->nombres = $nombres;
          $this->apellidos = $apellidos;
		  $this->correo = $correo;
		  $this->password = $password;
          $this->direccion = $direccion;
          $this->telefono = $telefono;
          $this->destino = $destino;
          $this->administrador = $administrador;
         

    }
    
    public function getId(){
        return $this->id;
    }

    public function getCedula()
    {
        return $this->nroCedula;
    }

    public function getNombres()
    {
        return $this->nombres;
    }

    public function getApellidos()
    {
        return $this->apellidos;
    }

    public function getCorreo()
    {
        return $this->correo;
    }

     public function getPassword()
    {
        return $this->password;
    }

    public function getDireccion()
     {
         return $this->direccion;
     }

	 public function getTelefono()
    {
        return $this->telefono;
    }

    public function getDestino()
    {
        return $this->destino;
    }
    public function getAdministrador(){
        return $this->administrador;
    }
    public function getodigo(){
        return $this->codigo;
    }

}
