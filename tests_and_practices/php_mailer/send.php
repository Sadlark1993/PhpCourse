<?php

use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
require 'secret.php';

$email = new PHPMailer(true);

$email->isSMTP();
$email->Host = SECRET_SERVER;
$email->SMTPAuth = true;
$email->Username = SECRET_USER;
$email->Password = SECRET_PASS;
//$email->SMTPSecure = 'ssl';
$email->Port = 587;

$email->setFrom(SECRET_EMAIL);

$email->addAddress('claudio.zi.junior@gmail.com');
$email->isHTML(true);
$email->Subject = 'Email de teste';
$email->Body = 'corpo do email. Testando...';

$email->send();

echo "\nEmail enviado\n\n";
