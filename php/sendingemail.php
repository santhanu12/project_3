<?php 
use PHPMailer\PHPMailer\PHPMailer;

use PHPMailer\PHPMailer\Exception;

require '../phpmailer/src/Exception.php';
require '../phpmailer/src/PHPMailer.php';
require '../phpmailer/src/SMTP.php';
class mail{

    public static function sendemail($subject,$email,$email_itm){
        $mail= new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host='smtp.gmail.com';
        $mail->SMTPAuth='true';
        $mail->Username='santhanuchakrapani21@gmail.com';
        $mail->Password='rsiz zfun jhcy pxck';
        $mail->SMTPSecure='ssl';
        $mail->Port=465;
    
        $mail->SetFrom('santhanchakrapani21@gmail.com');
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->Subject=$subject;
        $mail->Body=$email_itm;
        $mail->send();
    
    }
}

?>