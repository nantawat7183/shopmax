<?php include "connectdb.php";?>
<?php
$ses_userid = $_POST["email"];
$sql = "SELECT * FROM user WHERE email='".$ses_userid."'";
$objQuery = mysqli_query($conn, $sql);
$objResult = mysqli_fetch_array($objQuery);
$f_name = $objResult["f_name"];
$l_name = $objResult["l_name"];
$password = $objResult["password"];
$email = $objResult["email"];


$to = $email;
$subject = "My subject";
$txt = "รหัสผ่านของคุณคือ".$password;
$headers = "From: nantawat7183@gmail.com";

if(mail($to,$subject,$txt,$headers))

{
	 echo "<!DOCTYPE html>
	<head>
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Kanit|Prompt'>
		<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
		<link rel='stylesheet' href='css/login.css'>
	<body style='padding:350px'>
		<center><h2>ระบบได้ส่งรหัสผ่านไปยังอีเมลล์ของคุณ เรียบร้อยเเล้ว</h2>
		
		<a href='login.php'>กลับสู่หน้าหลัก</a></center>
	</body>
	</head>
</html>";
	

}
else
{
	echo "Email Can Not Send.";
}


// $to_email = "jaruwat.m@kkumail.com";
// $subject = "Simple Email Test via PHP";
// $body = "Hi,nn This is test email send by PHP Script";
// $headers = "From: nantawat7183@gmail.com";

// if (mail($to_email, $subject, $body, $headers)) {
//     echo "Email successfully sent to $to_email...";
// } else {
//     echo "Email sending failed...";
// }



?>