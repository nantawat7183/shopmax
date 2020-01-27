<?php
require_once("connectdb.php");

$sql = "INSERT INTO user (f_name,l_name,addess,email,U_tel,password) 
		VALUES('".$_POST["f_name"]."','".$_POST["l_name"]."','".$_POST["addess"]."','".$_POST["email"]."','".$_POST["tel"]."','".$_POST["password"]."')";

if ($conn->query($sql) === TRUE) {
    echo "<!DOCTYPE html>
	<head>
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Kanit|Prompt'>
		<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
		<link rel='stylesheet' href='css/login.css'>
	<body style='padding:350px'>
		<center><h2>เพิ่มผู้ใช้งานเรียบร้อย</h2>
		
		<a href='login.php'>กลับสู่หน้าหลัก</a></center>
	</body>
	</head>
</html>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>