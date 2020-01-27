<?php include "connectdb.php"; 

if(isset($_POST)){
  $Pro_id = $_POST['Pro_id'];
  $Pro_name  =  $_POST['Pro_name'];
  $Pro_price   =   $_POST['Pro_price'];
  $Pro_amount    =  $_POST['Pro_amount'];
  $Pro_detail   = $_POST['Pro_detail'];
  $Pro_property    =  $_POST['Pro_property'];
   $Pro_type    =  $_POST['Pro_type'];

    // $fileToUpload  =$_FILES['fileToUpload'];

    // $file_to_saved = "img_payment/".$fileToUpload; echo $file_to_saved;
  echo $Pro_id;
  $target_dir = "images/";
  $fileName=$Pro_id.".jpg";
  $target_file = $target_dir.$fileName;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "has been uploaded.";

        $sql1 = "INSERT INTO product (Pro_id,Pro_name,Pro_price,Pro_amount,Pro_detail,Pro_property,Pro_img,Pro_type) 
        VALUES(".$_POST["Pro_id"].",'".$_POST["Pro_name"]."',".$_POST["Pro_price"].",".$_POST["Pro_amount"].",'".$_POST["Pro_detail"]."','".$_POST["Pro_property"]."','".$target_file."',".$_POST["Pro_type"].")";
        $query  =   mysqli_query($conn,$sql1);   

        if($query){
            header("Location: Edit_product.php ");
            echo "insert success";
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