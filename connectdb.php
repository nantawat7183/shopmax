<?php
	
	$server		=	"localhost";
	$user		=	"root";
	$pass	    =	"";
	$db_name	=	"shopping";
	$conn		= 	new mysqli($server,$user,$pass,$db_name);

	if($conn->connect_error){
		printf("ไม่สามารถเชื่อมฐานข้อมูลได้",$conn->connect_error);
		exit();
	}
	mysqli_set_charset($conn, 'utf8');
?>