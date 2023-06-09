<?php
//En esta clase se implementa el patron de diseño DAO, para separar la capa de acceso
//a datos de la lógica de la aplicación. Aqui se crea una instancia de la clase de la
//conexión para realizar las consultas pertinentes a la base de datos.
//Tambien se llama a las clases planas para guardar la informacion, por ejemplo
//la clase Usuario


//Con require_once se incluye el archivo especificado, en este caso DataSource.php y
//Usuario.php
require_once ("DataSource.php");
require_once (__DIR__."/../entidad/Usuario.php");

class UsuarioDAO {

     //Con este metodo se hace la validacion para saber si el usuario ingresado
     //en el login se encuentra registrado en la base de datos
	 public function autenticarUsuario($correo, $password){

        //Se crea la instancia de DataSource para hacer la conexión
        $data_source = new DataSource();

        //Se llama al metodo ejecutarConsulta para devolver el usuario
        //que cumpla con el correo y contraseña recibidos del login
        $data_table= $data_source->ejecutarConsulta("SELECT * FROM usuario WHERE correo = :correo AND password = :password" , array(':correo'=>$correo,':password'=>$password));

        $usuario=null;
        //Si $data_table retornó una fila, quiere decir que se encontro el usuario en la base de datos
        if(count($data_table)==1){

            //Se guarda la informacion del usuario en un objeto de tipo Usuario
            foreach($data_table as $indice => $valor){
                //Los nombres de los campos corresponden a los nombres que tienen en la
                //base de datos, por ejemplo: id, nombre, correo, password, etc.
                $usuario = new Usuario(
                        $data_table[$indice]["id"],
                        $data_table[$indice]["nroCedula"],
                        $data_table[$indice]["nombres"],
                        $data_table[$indice]["apellidos"],
                        $data_table[$indice]["correo"],
                        $data_table[$indice]["password"],
                        $data_table[$indice]["direccion"],
                        $data_table[$indice]["telefono"],
                        $data_table[$indice]["imagen"],
                        $data_table[$indice]["rol"],
                        $data_table[$indice]["codigo"]

                        );
            }
        }
        //se retorna el objeto usuario, retorna null en el caso de que no encuentre el usuario
        //en la base de datos
        return $usuario;
    }


    public function registrarUsuario(Usuario $usuario){
        $data_source = new DataSource();

        $stmt1 = "INSERT INTO usuario VALUES (NULL,:nroCedula,:nombres,:apellidos,:correo,:password,:direccion,:telefono,null,:rol,null)";

        $resultado = $data_source->ejecutarActualizacion($stmt1, array(
            ':nroCedula' => $usuario->getCedula(),
            ':nombres' => $usuario->getNombres(),
            ':apellidos' => $usuario->getApellidos(),
            ':correo' => $usuario->getCorreo(),
            ':password' => $usuario->getPassword(),
            ':direccion'=>$usuario->getDireccion(),
            ':telefono'=>$usuario->getTelefono(),
            ':rol'=>$usuario->getAdministrador()
            )
        );

        if($resultado){
            return "OK";
        }else{
            return "Error";
        }

      
    }

    public function verUsuarios(){
        $data_source = new DataSource();

        $data_table = $data_source->ejecutarConsulta("SELECT * FROM usuario", NULL);

        $usuario=null;
        $usuarios=array();

        foreach($data_table as $indice => $valor){
            $usuario = new Usuario(
                    $data_table[$indice]["id"],                    
                    $data_table[$indice]["nroCedula"],
                    $data_table[$indice]["nombres"],
                    $data_table[$indice]["apellidos"],
                    $data_table[$indice]["correo"],
                    $data_table[$indice]["password"],
                    $data_table[$indice]["direccion"],
                    $data_table[$indice]["telefono"], 
                    $data_table[$indice]["imagen"],
                    $data_table[$indice]["rol"],                   
                    );
            array_push($usuarios,$usuario);
        }

    return $usuarios;
    }

    public function eliminarUsuario($idUsuario){
        $data_source = new DataSource();

        $stmt1 = "DELETE FROM usuario WHERE id = :idUsuario";

        $resultado = $data_source->ejecutarActualizacion($stmt1, array(
            ':idUsuario' => $idUsuario
            )
        );

      return $resultado;
    }

    public function verUsuarioPorId($idUsuario){
        $data_source = new DataSource();

        $data_table = $data_source->ejecutarConsulta("SELECT * FROM usuario WHERE id = :idUsuario", array(':idUsuario'=>$idUsuario));

        $usuario=null;
        //Si $data_table retornó una fila, quiere decir que se encontro el usuario en la base de datos
        if(count($data_table)==1){
            $usuario = new Usuario(
                $data_table[0]["id"],
                $data_table[0]["nroCedula"],
                $data_table[0]["nombres"],
                $data_table[0]["apellidos"],
                $data_table[0]["correo"],
                $data_table[0]["password"],
                $data_table[0]["direccion"],
                $data_table[0]["telefono"], 
                $data_table[0]["imagen"],
                $data_table[0]["rol"],
    
                );
        }


    return $usuario;
    }

    public function editarUsuario($usuario){
        $data_source = new DataSource();

        $stmt1 = "UPDATE usuario SET nroCedula = :nroCedula, nombres = :nombres, apellidos = :apellidos, correo = :correo, password = :password, direccion = :direccion, telefono = :telefono, imagen = :imagen, rol = :rol, codigo = :codigo WHERE id = :idUsuario";

        $resultado = $data_source->ejecutarActualizacion($stmt1, array(
            
            ':nroCedula' => $usuario->getCedula(),
            ':nombres' => $usuario->getNombres(),
            ':apellidos' => $usuario->getApellidos(),
            ':correo' => $usuario->getCorreo(),
            ':password' => $usuario->getPassword(),
            ':direccion'=>$usuario->getDireccion(),
            ':telefono'=>$usuario->getTelefono(),
            ':imagen'=>$usuario->getDestino(),
            ':rol'=>$usuario->getAdministrador(),
            ':idUsuario'=>$usuario->getId(),
            
            )
        );

      return $resultado;
    }
    public function verUsuarioPorCorreo($correoUsuario){
        $data_source = new DataSource();

        $data_table = $data_source->ejecutarConsulta("SELECT * FROM usuario WHERE correo = :correoUsuario", array(':correoUsuario'=>$correoUsuario));

        $usuario=null;
        //Si $data_table retornó una fila, quiere decir que se encontro el usuario en la base de datos
        if(count($data_table)==1){
            $usuario = new Usuario(
                $data_table[0]["id"],
                $data_table[0]["nroCedula"],
                $data_table[0]["nombres"],
                $data_table[0]["apellidos"],
                $data_table[0]["correo"],
                $data_table[0]["password"],
                $data_table[0]["direccion"],
                $data_table[0]["telefono"], 
                $data_table[0]["imagen"],
                $data_table[0]["rol"]
                );
        }

    return $usuario;
    }

    public function recuperarPassword($p_correo, $p_codigo){
        $data_source = new DataSource();

        $stmt1 = "UPDATE usuario SET codigo = :p_codigo WHERE correo = :p_correo";

        $resultado = $data_source->ejecutarActualizacion($stmt1, array(
            
            ':p_correo' => $p_correo,
            ':p_codigo' => $p_codigo                        
            )
        );

      return $resultado;
    }

    public function resetPassword($fp_code, $fp_password){
        $data_source = new DataSource();

        $stmt1 = "UPDATE usuario set  password = :fp_password WHERE codigo = :fp_code";

        $resultado = $data_source->ejecutarActualizacion($stmt1, array(
            
            ':fp_password' => $fp_password,
            ':fp_code' => $fp_code                        
            )
        );

      return $resultado;

    }


}
