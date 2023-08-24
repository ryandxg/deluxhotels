<?php

require 'include/PHPMailer.php';
require 'include/SMTP.php';
require 'include/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer();

$mail->isSMTP();
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = "true";
$mail->SMTPSecure = "tls";
$mail->Port = "587";
$mail->Username = "programmingpage1@gmail.com";
$mail->Password = "GODISGREATEST@1.";
$mail->setFrom("programmingpage1@gmail.com");

$mail->Subject = 'DELUX HOTEL';
$mail->addCustomHeader('Content-type: text/html; charset=iso-8859-1');
$mail->Body = "signup";
$mail->addAddress("ooluwa587@gmail.com");

  if($mail->send())
  {
  echo "success";
  }
  else
  {
  echo "mailing failed";
  }

?>