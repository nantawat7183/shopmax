
<?php include "check_session.php"; ?>

<?php
    // include "connectDB/connectDB.php";
        include 'connectdb.php';
        if (isset($_POST)) {
            $UserID          = $_GET['UserID'];
            $f_name       = $_POST['f_name'];
            $l_name       = $_POST['l_name'];
            $addess    = $_POST['addess'];
            $email    = $_POST['email'];
         
        

            $sql = "update user set 
            f_name = '".$f_name."',
            l_name = '".$l_name."',
            addess='".$addess."',
            email='".$email."'
            WHERE UserID='$UserID'          
        ";

            $query_sql = mysqli_query($conn,$sql);
                if($query_sql){
                    $msg = "แก้ไขข้อมูลสำเร็จ";
                    echo $msg;
                    echo "<br/><a href='cart.php'>กลับ</a>";
                }else{
                    $msg ="ไม่สามารถแก้ไขข้อมูลได้";
                    echo $msg;
                    echo "<br/><a href='edit.php>กลับ</a>";
                }
            }
?>



