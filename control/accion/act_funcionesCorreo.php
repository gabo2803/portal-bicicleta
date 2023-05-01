<?php

use  PHPMailer \ PHPMailer \ PHPMailer ;
use  PHPMailer \ PHPMailer \ Exception ;


require  $_SERVER["DOCUMENT_ROOT"]. '/portal_Bici/PHPMailer/Exception.php' ;
require  $_SERVER["DOCUMENT_ROOT"]. '/portal_Bici/PHPMailer/PHPMailer.php' ;
require  $_SERVER["DOCUMENT_ROOT"]. '/portal_Bici/PHPMailer/SMTP.php' ;



 
class correo{

    public function sendMail($correoElectronico, $nombre, $codigo)
    {

        $resetPassLink = 'http://localhost/portal_Bici/Vistas/resetPassword.php?fp_code='.$codigo;

        $mailContent = 'Estimad@ '.$nombre.', 
                <br/><br/>Recientemente se envió una solicitud para restablecer una contraseña para su cuenta. Si esto fue un error, simplemente ignore este correo electrónico y no pasará nada.
                <br/>Para restablecer su contraseña, visite el siguiente enlace: <a href="'.$resetPassLink.'">'.$resetPassLink.'</a>
                <br/><br/>Saludos,
                <br/>Para más desarrollos como este vísitame en mi sitio https://www.configuroweb.com, atentamente
                <br/>Mauricio Sevilla
                <br/>https://www.linkedin.com/in/mauricio-sevilla/';    
        

        $mail = new PHPMailer(true);
        $mail->CharSet = "UTF-8";

        try {
            
            $mail->isSMTP();
            $mail->Host = 'smtp.googlemail.com';  //gmail SMTP server
            $mail->SMTPAuth = true;
            $mail->Username = 'correo@gmail.com';   //username
            $mail->Password = 'password';   //password
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;                    //smtp port

            $mail->setFrom('ramirez.maradey@gmail.com', 'Prueba');
            $mail->addAddress($correoElectronico, $nombre);

            $mail->isHTML(true);

            $mail->Subject = 'Recuperación de contraseña - ';
            $mail->Body    =  $mailContent;

            if (!$mail->send()) {
                return false;
            } else {
                return true;
            }
        } catch (Exception $e) {
            return false;
             echo 'Message could not be sent.';
             echo 'Mailer Error: ' . $mail->ErrorInfo;
        }
    }

    public function createRandomCode()
    {
        $chars = "abcdefghijkmnopqrstuvwxyz0123456789";
        srand((double)microtime()*1000000);
        $i = 0;
        $pass = '' ;
    
        while ($i <= 7) {
            $num = rand() % 33;
            $tmp = substr($chars, $num, 1);
            $pass = $pass . $tmp;
            $i++;
        }
    
        return time().$pass;
    }


}
