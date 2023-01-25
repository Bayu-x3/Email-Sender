<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$name = htmlspecialchars($_POST['name']);
 $email = htmlspecialchars($_POST['email']);
  $judul = htmlspecialchars($_POST['judul']);
   $pesan = htmlspecialchars($_POST['pesan']);
$mail = new PHPMailer(true);
try {
    $mail->SMTPDebug = 2;
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'mailersx3@gmail.com';
    $mail->Password   = 'pxjitkcjjweamfnh';
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;
    $mail->setFrom('mailersx3@gmail.com', $name);
    $mail->addAddress($email);
    $mail->isHTML(true);
    $mail->Subject = $judul;
    $mail->Body    = $pesan;
    $mail->AltBody = '';
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
 echo "<script>alert('Email berhasil terkirim!');window.location='index.php';</script>";
 ?>