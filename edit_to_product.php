<?php include "connectdb.php"; ?>
<?php include "check_session.php";



  

  
  if(isset($_POST)){
      $Pro_id = $_POST['Pro_id'];
      $Pro_name  =  $_POST['Pro_name'];
      $Pro_price   =   $_POST['Pro_price'];
      $Pro_amount    =  $_POST['Pro_amount'];
      $Pro_detail   = $_POST['Pro_detail'];
      $Pro_property    =  $_POST['Pro_property'];
      $Pro_weight    =  $_POST['Pro_weight'];
             
               
      $sql = "UPDATE product SET      
      Pro_name  = '$Pro_name',
      Pro_price   = '$Pro_price',
      Pro_amount    = '$Pro_amount',
      Pro_detail   = '$Pro_detail',
      Pro_property    = '$Pro_property',
      Pro_weight    = '$Pro_weight'

      WHERE   Pro_id = '$Pro_id'";
      echo $sql;

      $query  = mysqli_query($conn,$sql);   
      // $last_id = $conn->insert_id;   
      if($query){
          header("Location: Edit_product.php");
      }else{
          $msg = "ไม่สามารถป้อนข้อมูลได้ ";
          echo $msg;
          echo $sql;
          echo "<a href='contact.php'>กลับ</a>";
      }
  }
        
?>      
