<h5>test mail</h5>
<?php
// include "connectdb.php";
date_default_timezone_set('Asia/Bangkok');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// $mail = new PHPMailer(true);

// try {
//     //Server settings
//     $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
//     $mail->isSMTP();                                            // Send using SMTP
//     $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
//     // $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
//     $mail->Username   = 'jaruwat11541@gmail.com';                     // SMTP username
//     $mail->Password   = 'jaruwat11541';                               // SMTP password
//     $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
//     // $mail->SMTPSecure = 'tls';
//     $mail->Port       = 587;                                    // TCP port to connect to

//     //Recipients
//     $mail->setFrom('jaruwat11541@gmail.com', 'Mailer');
//     $mail->addAddress('jaruwat.m@kkumail.com', 'Joe User');     // Add a recipient
//     // $mail->addAddress('ellen@example.com');               // Name is optional
//     // $mail->addReplyTo('jaruwat11541@gmail.com', 'Information');
//     // $mail->addCC('cc@example.com');
//     // $mail->addBCC('bcc@example.com');

//     // Attachments
//     // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//     // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

//     // Content
//     $mail->isHTML(true);                                  // Set email format to HTML
//     $mail->Subject = 'Here is the subject';
//     $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
//     $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

//     $mail->send();
//     echo 'Message has been sent';
// } catch (Exception $e) {
//     echo "fail";

// }
?>
<?php

/**
 * This example shows making an SMTP connection with authentication.
 */
 
//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Asia/Bangkok');
 
// require 'vendor/PHPMailer/PHPMailerAutoload.php';
 
//Create a new PHPMailer instance
$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
//Set the hostname of the mail server
$mail->Host = "smtp.gmail.com";
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->SMTPAuth   = true;
$mail->Port = 587;
//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication
$mail->Username = "jaruwat11541@gmail.com";
//Password to use for SMTP authentication
$mail->Password = "jaruwat11541";
//Set who the message is to be sent from
$mail->setFrom('jaruwat11541@gmail.com', 'Tony jone');
//Set who the message is to be sent to
$mail->addAddress('jaruwat.m@kkumail.com', 'itoffside');
//Set the subject line
$mail->Subject = 'itOffside.com test email';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('content.html'), dirname(__FILE__));
$mail->msgHTML("Test email by itoffside.com");
 
//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}

?>