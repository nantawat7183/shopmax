
<?php include "connectdb.php"; ?>
<?php include "check_session.php"; ?>
<?php 
session_start();


$Total = 0;
$SumTotal = 0;
$id=rand(00000000001,999999999);

$strSQL = "INSERT INTO `order` (Or_id, `Or_date`, `Or_name`, `Or_address`, `Or_email`, `UserID`,`Deliver_method`)
VALUES
(".$id.",'".date("Y-m-d H:i:s")."','".$_POST["textName"]."','".$_POST["textAddress"]."','".$_POST["textEmail"]."',".$ses_userid.",'".$_POST["Deliver_method"]."') ";
mysqli_query($conn,$strSQL);


  /*$test = "INSERT INTO order(Or_date,Or_name,Or_address,Or_email,UserID)
  VALUES
  ('10','test','test','testMail',123) ";
  mysqli_query($conn,$test);*/
  $strOr_id = mysqli_insert_id($conn);
  for($i=0;$i<=(int)$_SESSION["intLine"];$i++){
    if($_SESSION["strPro_id"][$i] != ""){
     $strSQL = " INSERT INTO order_detail( Or_id,Pro_id,Qty) VALUES  ('".$strOr_id."','".$_SESSION["strPro_id"][$i]."','".$_SESSION["strQty"][$i]."') 
     ";
     mysqli_query($conn,$strSQL);


     $strSQL = "SELECT * FROM product WHERE Pro_id = ".$_SESSION["strPro_id"][$i];
     $objQuery = mysqli_query($conn, $strSQL);
     if ($objResult = mysqli_fetch_array($objQuery)){
      $qtyNew=$objResult['Pro_amount']-$_SESSION["strQty"][$i];
      $strSQL = "UPDATE product SET Pro_amount=".$qtyNew." where Pro_id=".$_SESSION["strPro_id"][$i];
      $objQuery = mysqli_query($conn, $strSQL);
    }
  }
}
// mysql_close();
unset($_SESSION["intLine"]);
unset($_SESSION["strPro_id"]);
unset($_SESSION["strQty"]);
header("location:sowe_order.php?Or_id=".$strOr_id);
?>