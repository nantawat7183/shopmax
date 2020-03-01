<?php include "connectdb.php";?>

<?php
if(isset($_POST)){
  $Order_id	=	$_POST['Order_id'];
  $Pay_total   =   $_POST['Pay_total'];
  $User_name		=	$_POST['User_name'];
  $Pay_email		=  $_POST['Pay_email'];
  $Pay_phon		=	$_POST['Pay_phon'];
  $Pay_bank		=	$_POST['Pay_bank'];
  $Pay_date       =   $_POST['Pay_date'];
    // $fileToUpload	=$_FILES['fileToUpload'];

    // $file_to_saved = "img_payment/".$fileToUpload; echo $file_to_saved;
  echo $Order_id;
  $target_dir = "img_payment/";
  $fileName=$Order_id.".jpg";
  $target_file = $target_dir.$fileName;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      echo "has been uploaded.";

      $sql1 = "INSERT INTO payment (Or_id,Pay_total,User_name,Pay_email,Pay_phon,Pay_bank,Pay_date,pay_img) 
      VALUES(".$_POST["Order_id"].",".$_POST["Pay_total"].",'".$_POST["User_name"]."','".$_POST["Pay_email"]."',".$_POST["Pay_phon"]." ,'".$_POST["Pay_bank"]."','".$_POST['Pay_date']."','".$target_file."')";
      $query  =   mysqli_query($conn,$sql1);    

      if($query){
       $sql2 = "UPDATE `order` SET
       status  = 1
       WHERE Or_id = $Order_id";
       if (mysqli_query($conn,$sql2)){
         header("Location: status.php ");
         echo "insert success";
       }else{
        echo "fail status";
       }
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

