
<?php include "check_session.php"; ?>

<?php
    // include "connectDB/connectDB.php";
include 'connectdb.php';
if (isset($_GET)) {
    $UserID          = $_GET['UserID'];
    // $password       = $_GET['password'];
    $password1       = $_GET['password1'];
   



    $sql = "update user set password = '{$password1}' WHERE UserID= {$UserID}";


    $query_sql = mysqli_query($conn,$sql);
    if($query_sql){
        $msg = "แก้ไขข้อมูลสำเร็จ";
       echo  "<!DOCTYPE html>
        <head>
            <meta name='viewport' content='width=device-width, initial-scale=1'>
            <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Kanit|Prompt'>
            <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
            <link rel='stylesheet' href='css/login.css'>
        <body style='padding:50px'>
            <center><h2>เปลี่ยนรหัสผ่านสำเร็จ</h2>
            
            <a href='edit_profile.php'>กลับ</a></center>
        </body>
        </head>
    </html>";
       
    }else{
        $msg ="ไม่สามารถแก้ไขข้อมูลได้";
        echo $msg;
        echo "<br/><a href='edit.php>กลับ</a>";
    }
}
?>



