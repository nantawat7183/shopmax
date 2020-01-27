<meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database: 
include('connection.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
 
//ตรวจสอบถ้าว่างให้เด้งไปหน้าหลักและไม่แก้ไขข้อมูล
if($_POST["member_id"]==''){
echo "<script type='text/javascript'>"; 
echo "alert('Error Contact Admin !!');"; 
echo "window.location = 'showmember.php'; "; 
echo "</script>";
}
 
//สร้างตัวแปรสำหรับรับค่าที่นำมาแก้ไขจากฟอร์ม
	$member_id = $_POST["member_id"];
	$member_name = $_POST["member_name"];
	$member_lname = $_POST["member_lname"];
	$username = $_POST["username"];
	$password = $_POST["password"];	
	$email = $_POST["email"];
 
//ทำการปรับปรุงข้อมูลที่จะแก้ไขลงใน database 
	
	$sql = "UPDATE tb_member SET  
			member_name='$member_name' ,
			member_lname='$member_lname' , 
			username='$username' ,
			password='$password' ,
			email='$email'  
			WHERE member_id='$member_id' ";
 
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
 
mysqli_close($con); //ปิดการเชื่อมต่อ database 
 
//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('Update Succesfuly');";
	echo "window.location = 'showmember.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to Update again');";
        echo "window.location = 'showmember.php'; ";
	echo "</script>";
}
?>