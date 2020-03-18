
<?php include "check_session.php"; ?>

<?php
    // include "connectDB/connectDB.php";
include 'connectdb.php';
if (isset($_GET)) {
    $UserID          = $_GET['UserID'];
    $f_name       = $_GET['f_name'];
    $l_name       = $_GET['l_name'];
    $addess    = $_GET['addess'];
    $email    = $_GET['email'];
    $U_tel   = $_GET['U_tel'];



    $sql = "update user set 
    UserID= '".$UserID."',
    f_name = '".$f_name."',
    l_name = '".$l_name."',
    addess='".$addess."',
    email='".$email."',
    U_tel= '".$U_tel."'

    WHERE UserID= '$UserID'          
    ";


    $query_sql = mysqli_query($conn,$sql);
    if($query_sql){
        $msg = "แก้ไขข้อมูลสำเร็จ";
        // echo $msg;
        // echo "<br/><a href='cart.php'>กลับ</a>";
        header('location: edit_profile.php');
    }else{
        $msg ="ไม่สามารถแก้ไขข้อมูลได้";
        echo $msg;
        echo "<br/><a href='edit.php>กลับ</a>";
    }
}
?>



