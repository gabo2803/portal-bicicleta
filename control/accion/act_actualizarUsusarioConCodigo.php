<?php

    session_start();

    require_once(__DIR__."/../mdb/mdbUsuario.php");
	require_once(__DIR__."/../../model/entidad/Usuario.php");
  
   if(isset($_POST['resetSubmit'])){
       $fp_code = '';
       if(!empty($_POST['password']) && !empty($_POST['repetirPassword']) && !empty($_POST['fp_code'])){
            $fp_code = $_POST['fp_code'];
            $password = $_POST['password'];  
        //password and confirm password comparison
            if($_POST['password'] !== $_POST['repetirPassword']){
              
                echo 'Confirme que la contraseña debe coincidir con la contraseña.'; 
            }else{
                //update data with new password
                $update =  resetPassword($fp_code, $password);
                if($update==0){
                   
                     echo  'La contraseña de su cuenta se ha restablecido correctamente. Inicia sesión con tu nueva contraseña.';
                     header("Location: ../../Vistas/login.php"); 
                }else{
                   
                    echo 'Se produjo algún problema, por favor intente nuevamente.';
                }
            }
        }else{
        
        echo 'Todos los campos son obligatorios, complete todos los campos.'; 
          }
   }
    
  
  
 









