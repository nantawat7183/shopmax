<?php
require_once("connectdb.php");

$sql = "INSERT INTO product (Pro_id,Pro_name,Pro_price,Pro_amount,Pro_total) 
		VALUES('".$_POST["Pro_id"]."','".$_POST["Pro_name"]."','".$_POST["Pro_price"]."','".$_POST["Pro_amount"]."','".$_POST["Pro_total"]."')";

if ($conn->query($sql) === TRUE) {
    echo "<!DOCTYPE html>
	<head>
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Kanit|Prompt'>
		<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
		<link rel='stylesheet' href='css/login.css'>
	<body style='padding:350px'>
		<center><h2>เพิ่มสินค้าเรียบร้อยเเล้ว</h2>
		
		<a href='login.php'>กลับสู่หน้าหลัก</a></center>
	</body>
	</head>
</html>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>