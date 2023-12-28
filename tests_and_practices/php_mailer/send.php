<?php

use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
//include 'secret.php';

$email = new PHPMailer(true);

$email->isSMTP();
$email->Host = 'smtplw.com.br';
$email->SMTPAuth = true;
$email->Username = 'megalinklinhares';
$email->Password = 'Mega123@@2020';
//$email->SMTPSecure = 'ssl';
$email->Port = 587;

$email->setFrom('no_reply@megalink.net.br', 'MEGALINK');

$email->addAddress('claudio.zi.junior@gmail.com');
$email->isHTML(true);
$email->Subject = '[EMAIL TESTANDOOO]   Email de teste';
$email->Body = 'corpo do email. Testando...';

$email->send();

echo "\nEmail enviado\n\n";
