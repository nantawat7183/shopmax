<?php include "connectdb.php"; ?>


<?php

$email=$_POST['email'];
$strSQL = "SELECT * FROM user WHERE email= '{$email}'";
$objQuery = mysqli_query($conn, $strSQL);
$objResult = mysqli_fetch_array($objQuery);
$f_name = $objResult["f_name"];
$l_name = $objResult["l_name"];        
$email = $objResult["email"];
$password = $objResult["password"];


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
try {
    //Server settings
    // $mail->SMTPDebug = 2;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->SMTPOptions = array(
     'ssl' => array(
      'verify_peer' => false,
      'verify_peer_name' => false,
      'allow_self_signed' => true,
    ),
   );
    // $mail->Mailer = "smtp";
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
      $mail->Username   = 'shopmaxshopping123@gmail.com';                     // SMTP username
    $mail->Password   = '0972075037';                               // SMTP password
    // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->SMTPSecure = "tls";
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('shopmaxshopping123@gmail.com', 'Shopmax');
    $mail->addAddress($email);       // Add a recipient

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = "<h2><b>เรียน {$f_name}{$l_name}</b></h2><br> รหัสผ่านของคุณ : <a href='localhost/shopmax/login.php'>{$password}</a>";
    

    $mail->send();
    echo "<!DOCTYPE html>
    <head>
      <meta name='viewport' content='width=device-width, initial-scale=1'>
      <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Kanit|Prompt'>
      <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
      <link rel='stylesheet' href='css/login.css'>
    <body style='padding:100px'>
      <center><h2>ระบบได้ส่งอีเมลไปยังอีเมลคุณเรียบร้อยเเล้ว</h2>
      
      <a href='login.php'>เข้าสู่ระบบ</a></center>
    </body>
    </head>
  </html>";
  } catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
  ?>