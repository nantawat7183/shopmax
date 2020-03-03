<?php
// include "connectdb.php";
date_default_timezone_set('Asia/Bangkok');

$address="";
$or_id="";
$name="";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
try {
    //Server settings
    $mail->SMTPDebug = 2;                      // Enable verbose debug output
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
    $mail->Username   = 'nantawat7183@gmail.com';                     // SMTP username
    $mail->Password   = '0992087183';                               // SMTP password
    // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->SMTPSecure = "tls";
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('jaruwat11541@gmail.com', 'Mailer');
    $mail->addAddress('jaruwat.m@kkumail.com', 'Joe User');     // Add a recipient

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
<?php
// $ses_userid = $_POST["email"];
// $sql = "SELECT * FROM user WHERE email='".$ses_userid."'";
// $objQuery = mysqli_query($conn, $sql);
// $objResult = mysqli_fetch_array($objQuery);
// $f_name = $objResult["f_name"];
// $l_name = $objResult["l_name"];
// $password = $objResult["password"];
// $email = $objResult["email"];


// $to = $email;
// $subject = "My subject";
// $txt = "รหัสผ่านของคุณคือ".$password;
// $headers = "From: nantawat7183@gmail.com";

// if(mail($to,$subject,$txt,$headers))

// {
// 	 echo "<!DOCTYPE html>
// 	<head>
// 		<meta name='viewport' content='width=device-width, initial-scale=1'>
// 		<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Kanit|Prompt'>
// 		<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
// 		<link rel='stylesheet' href='css/login.css'>
// 	<body style='padding:350px'>
// 		<center><h2>ระบบได้ส่งรหัสผ่านไปยังอีเมลล์ของคุณ เรียบร้อยเเล้ว</h2>
		
// 		<a href='login.php'>กลับสู่หน้าหลัก</a></center>
// 	</body>
// 	</head>
// </html>";
	

// }
// else
// {
// 	echo "Email Can Not Send.";
// }

?>