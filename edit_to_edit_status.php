<?php include "connectdb.php"; ?>
<?php include "check_session.php";






if(isset($_POST)){
  $Or_id = $_POST['Or_id'];
  $status  =  $_POST['status'];
  $status_ems  =  $_POST['Status_ems'];
  





  $sql = "UPDATE `order` SET
  status  = '$status',
  status_ems  = '$status_ems'

  WHERE Or_id = $Or_id";
  
  $query  = mysqli_query($conn,$sql);   
      // $last_id = $conn->insert_id;   
  if($query){
    header("Location: edit_status.php");
  }else{
    $msg = "ไม่สามารถป้อนข้อมูลได้ ";
    echo $msg."<br>";
    echo $sql."<br>";
    echo "<a href='edit_to_status.php'>กลับ</a>";
  }
}

?>      
