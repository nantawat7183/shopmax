

<?php
session_start();
mysqli_connect("localhost","root","root");
mysqli_select_db("mydatabase");
$strSQL = "SELECT * FROM member WHERE Email = '".mysqli_real_escape_string($_POST['email'])."'
and password = '".mysqli_real_escape_string($_POST['password'])."'";
$objQuery = mysqli_query($strSQL);
$objResult = mysqli_fetch_array($objQuery);
if(!$objResult)
{
echo "Username and Password Incorrect!";
}
else
{
$_SESSION["UserID"] = $objResult["UserID"];
$_SESSION["Status"] = $objResult["Status"];
session_write_close();
if($objResult["Status"] == "ADMIN")
{
header("location:admin_page.php");
}
else
{
header("location:user_page.php");
}
}
mysqli_close();
?>