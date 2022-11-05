<?php
require_once '../vendor/autoload.php';
require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../vendor/phpmailer/phpmailer/src/Exception.php';
require '../vendor/phpmailer/phpmailer/src/SMTP.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

try {
  $formId = $_POST['formId'];;
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $body = '';
  echo 'form id is ...............';
  echo $formId;
  echo "\n";

  $subject = "";
  if ($formId == '1') {
    $subject = "Feedback from Web Home";
    $body = nl2br("You have received a new feedback from ". $name . "\r\n" .PHP_EOL . $phone . "\r\n" .PHP_EOL. $email .PHP_EOL."\r\n" . $message);
  } else {
    $subject = "Message from from Web Home";
    $body = nl2br($name ." would like to get in touch with your from MyPage of your web home ".  "\r\n" .PHP_EOL. $phone . "\r\n" .PHP_EOL.  $email .PHP_EOL.  "\r\n" .PHP_EOL.  $message);
  }

  $mail = new PHPMailer;
  try {
    $mail->isSMTP();

//Enable SMTP debugging
//SMTP::DEBUG_OFF = off (for production use)
//SMTP::DEBUG_CLIENT = client messages
//SMTP::DEBUG_SERVER = client and server messages
    $mail->SMTPDebug = SMTP::DEBUG_CLIENT;

//Set the hostname of the mail server
    $mail->Host = 'smtp.gmail.com';
//Use `$mail->Host = gethostbyname('smtp.gmail.com');`
//if your network does not support SMTP over IPv6,
//though this may cause issues with TLS

//Set the SMTP port number:
// - 465 for SMTP with implicit TLS, a.k.a. RFC8314 SMTPS or
// - 587 for SMTP+STARTTLS
    $mail->Port = 465;

//Set the encryption mechanism to use:
// - SMTPS (implicit TLS on port 465) or
// - STARTTLS (explicit TLS on port 587)
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;

//Whether to use SMTP authentication
    $mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
    $mail->Username = 'conceptive.c@gmail.com';

//Password to use for SMTP authentication
    $mail->setFrom('conceptive.c@gmail.com');
    $mail->Username = 'conceptive.c';
    $mail->Password = 'ivatury.';
    //$mail->isSendmail();
    $mail->isHTML(true);
    $mail->addAddress('kvsubbaram@rediffmail.com');
    $mail->addBCC('varunthepatriot@gmail.com');
    $mail->addBCC('rchnt@gmail.com');
    $mail->Subject = $subject;
    $mail->Body = $body;
    $mail->send();
    echo 'Email sent successfully!';
  } catch (Exception $e) {
    echo $e->getMessage();
    error_log($e->getMessage(), LOG_ERR);
  }
}
catch (Exception $e){
  echo $e ->getMessage();
  echo $e -> getTraceAsString();
}

