<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$jsonData = file_get_contents("php://input");
$data = json_decode($jsonData, true);

function test($data){
    $mail = new PHPMailer(true);

    try {

        // $mail->SMTPDebug = 3;
        $mail->CharSet = 'UTF-8';
        $mail->Encoding = 'base64';
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => true,
                'allow_self_signed' => true
            )
        );
        $mail->isSMTP();
        $mail->Host     = 'smtp.ionos.fr';
        $mail->SMTPAuth = true;
        $mail->Username = 'contact@majs.fr';
        $mail->Password = 'Lemonstre3004!';
        $mail->SMTPSecure = 'ssl';
        $mail->Port     = 465;

        $mail->setFrom('contact@majs.fr', 'majs');
        // $mail->addReplyTo('reply@example.com', 'SenderName');

        $mail->addAddress("contact@majs.fr");

         $mail->Subject = 'subject';

         $mail->isHTML(true);

         $data2 = '';

        foreach($data['form']['data'] as $inputs){
            $data2.= $inputs[0].':'.$inputs[1].'<br>';
        };

        $mailContent = ' 
        <html> 
        <head> 
            <title>Titre</title> 
        </head> 
        <body> 
            <h1>Contact</h1>
            <pre>'.$data2.'</pre>
        </body> 
        </html>';
         $mail->Body = $mailContent;

         $mail->send();
         echo "L'email a été envoyé avec succès";
     } catch (Exception $e) {
         echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
     }
}

test($data); 