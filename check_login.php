
<?php

include "connectdb.php";
session_start();

//mysqli_select_db("mydatabase");

$email = $_POST['email'];
$password = $_POST['password'];

$strSQL = "SELECT * FROM user WHERE email = '$email' and password = '$password' ";
$objQuery = mysqli_query($conn, $strSQL);
$objResult = mysqli_fetch_array($objQuery);


if(!$objResult)
{
echo  "<!DOCTYPE html>
		<head>
			<meta name='viewport' content='width=device-width, initial-scale=1'>
			<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Kanit|Prompt'>
			<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
			<link rel='stylesheet' href='css/login.css'>
		<body style='padding:350px'>
			<center><h2>ชื่อผู้ใช้งานหรือรหัสผ่านผิด!!</h2>
			
			<a href='login.php'>กลับสู่หน้าหลัก</a></center>
		</body>
		</head>
	</html>";
}
else
{

//$_SESSION["status"] = $objResult["status"];
//session_write_close();
if($objResult["status"] == "Admin")
{
echo "<!DOCTYPE html>
		<head>
			<center><h2 style='padding:350px'>สวัสดี ADMIN กำลังเข้าสู่ระบบ กรุณารอสักครู่...</h2></center>
			<meta name='viewport' content='width=device-width, initial-scale=1'>
			<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Kanit|Prompt'>
			<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
			<link rel='stylesheet' href='css/login.css'>
		</head>

		<html>";
		$_SESSION["ses_id"]		=	session_id();
		$_SESSION["ses_userid"]	=	$objResult["UserID"];
		$_SESSION["ses_date"]	= 	date("d/M/Y");
		$_SESSION["ses_time"]	=	date("H:i:S");

		$ses_userid = $objResult["UserID"];
		$date = date("Y-m-d");
		$time = date("H:i:s");

		
	// echo "<meta http-equiv='refresh' content='1;URL=order_show_addmin.php'>";
	header("Location: order_show_addmin.php");
}
else
{
 echo "<!DOCTYPE html>
		<head>
			<center><h2 style='padding:350px'>กำลังเข้าสู่ระบบ กรุณารอสักครู่...</h2></center>
			<meta name='viewport' content='width=device-width, initial-scale=1'>
			<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Kanit|Prompt'>
			<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
			<link rel='stylesheet' href='css/login.css'>
		</head>

		<html>";

		$_SESSION["ses_id"]		=	session_id();
		$_SESSION["ses_userid"]	=	$objResult["UserID"];
		$_SESSION["ses_date"]	= 	date("d/M/Y");
		$_SESSION["ses_time"]	=	date("H:i:S");

		$ses_userid = $objResult["UserID"];
		$date = date("Y-m-d");
		$time = date("H:i:s");

	// echo "<meta http-equiv='refresh' content='1;URL=shop.php'>";
		header("Location: index.php");
}
}
?>