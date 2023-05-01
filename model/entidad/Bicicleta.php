<?php

//Esta clase POJO sirve para guardar los datos de un Bicicleta
//Por ejemplo, un objeto creado a partir de esta clase
//tendrá guardado los datos de una Bicicleta de la tabla Bicicleta de la
//base de datos

class Bicicleta
{
    public $id;
    public $tipoBicicleta;
    public $modelo;
    public $talla;
    public $peso;
    public $precio;
    public $marca;
    public $descripcion;
    public $tamRueda;

    public function __construct($id, $tipoBicicleta, $modelo, $talla, $peso, $precio, $marca, $descripcion,$tamRueda){

          $this->id = $id;
          $this->tipoBicicleta = $tipoBicicleta;
          $this->modelo = $modelo;
          $this->talla = $talla;
		  $this->peso = $peso;
		  $this->precio = $precio;
          $this->marca = $marca;
          $this->telefono = $descripcion;
          $this->destino = $tamRueda;

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

}
