<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("07.04 - Utilizando um componente");

require __DIR__ . "/../vendor/autoload.php";

/*
 * [ instance ] https://packagist.org/packages/phpmailer/phpmailer
 */
fullStackPHPClassSession("instance", __LINE__);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception as MailException;

$phpMailer = new PHPMailer();
var_dump($phpMailer instanceof PHPMailer);

/*
 * [ configure ]
 */
fullStackPHPClassSession("configure", __LINE__);

try {
    $mail = new PHPMailer(true);
    
    // CONFIG
    $mail->isSMTP();
    $mail->setLanguage("br");
    $mail->isHTML(true);
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';// port 587
    $mail->CharSet = 'utf-8';
    
    //AUTH
    $mail->Host = "";// Server
    $mail->Username = ""; //Username
    $mail->Password = "";//Password
    $mail->Port = "";//Ports
    
    //MAIL
    $mail->setFrom("ml.manutencaolira@gmail.com", "Cristovão L. Braga");
    $mail->Subject = "Este é meu envio via componente no FSPHP"; //assunto
    $mail->msgHTML("<h1>Olá mundo!</h1><p>Esse é meu primeiro disparo de e-mail.</p>");
    
    //SEND - PRA ONDE VAI O E-MAIL
    $mail->addAddress("robsonvleite@gmail.com", "Robson Leite");
    $send = $mail->send();
    
    var_dump($send);
    
} catch (MailException $exception) {
    echo message()->error($exception->getMessage());
}