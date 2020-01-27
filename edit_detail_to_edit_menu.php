<?php include "connectdb.php"; ?>
<?php include "check_session.php";






if(isset($_POST)){
  $Menu_id = $_POST['Menu_id'];
  $Menu_name  =  $_POST['Menu_name'];
  $Menu_ingredients  = $_POST['Menu_ingredients'];
  $Menu_cook    =  $_POST['Menu_cook'];
  $Pro_id    =  $_POST['Pro_id'];





  $sql = "UPDATE menu SET
  Menu_name  = '$Menu_name',
  Menu_ingredients   = '$Menu_ingredients',
  Menu_cook    = '$Menu_cook'
  WHERE Menu_id = $Menu_id";
  
  $query  = mysqli_query($conn,$sql);   
      // $last_id = $conn->insert_id;   
  if($query){
    header("Location: edit_detail_menu.php");
  }else{
    $msg = "ไม่สามารถป้อนข้อมูลได้ ";
    echo $msg."<br>";
    echo $sql."<br>";
    echo "<a href='contact.php'>กลับ</a>";
  }
}

?>      
