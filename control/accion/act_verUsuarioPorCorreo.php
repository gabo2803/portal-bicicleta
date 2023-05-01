<?php
    session_start();
    require_once (__DIR__.'/../mdb/mdbUsuario.php');
    require_once ('act_funcionesCorreo.php');

    

   if (isset($_POST["email"]) && trim($_POST["email"] != '')){

        $correo  = $_POST['email'];       

        $usuario = verUsuarioPorCorreo($correo);       
                 
        
        if($usuario != null){

            $funcion_correo = new correo();
            $correo = $usuario->getCorreo();           
            $codigo = $funcion_correo->createRandomCode();                       
            $resultado = recuperarPassword($correo,  $codigo);             
            

            if($resultado==0){
                
               $funcion_correo->sendMail($correo, $usuario->getNombres(), $codigo);

                $mensaje = 'Se ha enviado un correo electrónico con las instrucciones para el cambio de tu contraseña. Por favor verifica la información enviada.';
                //$this->render('login/recover', 'Recuperar Contraseña', array('mensaje' => $mensaje), false);
                echo $mensaje;

            }else{
                $mensaje = 'No se recuperar la cuenta. Si los errores persisten comuniquese con el administrador del sitio.';
                    //render('login/recover', 'Recuperar Contraseña', array('mensaje' => $mensaje), false);
                    //echo $mensaje;
                    echo $mensaje;
            }        
       

        }else{
            //Si el usuario no existe se vuelve a mostrar el login
           // header("Location: ../../Vistas/login.php");  
           echo 'usuario no encontrado'; 
               
        }                  
         
    }else{
        /*  $mensaje = 'El campo de correo electrónico es requerido.';
            $this->render('login/recover', 'Recuperar Contraseña', array('mensaje' => $mensaje), false);   */ 
            echo 'Ingresar correo valido ';
    }

 
    