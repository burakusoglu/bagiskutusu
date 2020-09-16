<?php 

require "PHPMailer/src/Exception.php";
require "PHPMailer/src/PHPMailer.php";
require "PHPMailer/src/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Kmail {
  public static function mailSend($subject,$content,$addMail,$addFullName){
        
    $mail = new PHPMailer();
    $mail->isSMTP();

    //Server settings
    // $mail->SMTPDebug = 1;
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'destek.bagiskutusu@gmail.com';                     // SMTP username
    $mail->Password   = 'atilim06.';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    // $mail->setFrom('from@example.com', 'Mailer');
    $mail->SetFrom($mail->Username, 'Bağış Kutusu Yönetim');
    $mail->addAddress($addMail, $addFullName); 
     $mail->CharSet = 'UTF-8';

    // Content
    $mail->isHTML(true);                                
    $mail->Subject = $subject;
    $mail->Body    = $content;

    if($mail->Send()) {
      $error = true;
    } else {
      $error = false;
    }
    return $error;
  }
}

?>