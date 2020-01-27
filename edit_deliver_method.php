<?php include "connectdb.php"; ?>
<?php include "check_session.php";






if(isset($_POST)){
  $Or_id = $_GET['Or_id'];
  $Deliver_method  =  $_POST['Deliver_method'];
  





  $sql = "UPDATE `order` SET
  Deliver_method  = '$Deliver_method'
  WHERE Or_id = $Or_id";
  
  $query  = mysqli_query($conn,$sql);   
      // $last_id = $conn->insert_id;   
  if($query){
    header("Location: status.php");
  }else{
    $msg = "ไม่สามารถป้อนข้อมูลได้ ";
    echo $msg."<br>";
    echo $sql."<br>";
    echo "<a href='edit_to_status.php'>กลับ</a>";
  }
}

?>      
