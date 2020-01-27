<?php include "connectdb.php";?>

<?php
if(isset($_POST)){
  $Menu_id = $_POST['Menu_id'];
  $Menu_name  =  $_POST['Menu_name'];
  $Menu_ingredients   =   $_POST['Menu_ingredients'];
  $Menu_cook    =  $_POST['Menu_cook'];
  $Pro_id    =  $_POST['pro_id'];
      // $fileToUpload  =$_FILES['fileToUpload'];
      // $file_to_saved = "img_menu/".$fileToUpload;
      // move_uploaded_file($fileToUpload,$file_to_saved); 
      // $Pro_id   = $_POST['Pro_id'];
  echo $Menu_id;
  $target_dir = "img_menu/";
  $target_file = $target_dir.$Menu_id.".jpg";
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      echo "has been uploaded.";

      $sql1 = "INSERT INTO menu (Menu_id,Menu_name,Menu_ingredients,Menu_cook,Pro_id,Menu_img) 
      VALUES(".$_POST["Menu_id"].",'".$_POST["Menu_name"]."','".$_POST["Menu_ingredients"]."','".$_POST["Menu_cook"]." ',".$_POST["pro_id"].",'".$target_file."')";
      $query  =   mysqli_query($conn,$sql1);

      if($query){
        header("Location: edit_detail_menu.php ");
        echo "insert success";
        echo "<a href='frompayment.php'>กลับ</a>";
      }else{
        echo "insert fail";
      } 
    } else {
      echo "upload fail";
    }
  }else {
    echo "File is not an image.";
  }
}



?>