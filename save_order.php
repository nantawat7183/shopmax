
<? ob_start();?>
<?php include "connectdb.php"; ?>
<?php include "check_session.php"; ?>
<?php 
session_start();


$Total = 0;
$SumTotal = 0;
$id=rand(00000000001,999999999);

$strSQL = "INSERT INTO `order` (Or_id, `Or_date`, `Or_name`, `Or_address`, `Or_email`, `UserID`,`Deliver_method`,`U_tel`)
VALUES
(".$id.",'".date("Y-m-d H:i:s")."','".$_POST["textName"]."','".$_POST["textAddress"]."','".$_POST["textEmail"]."',".$ses_userid.",'".$_POST["Deliver_method"]."','".$_POST["textU_tel"]."') ";
mysqli_query($conn,$strSQL);


  $strOr_id = mysqli_insert_id($conn);
  for($i=0;$i<=(int)$_SESSION["intLine"];$i++){
    if($_SESSION["strPro_id"][$i] != ""){
     $strSQL = " INSERT INTO order_detail( Or_id,Pro_id,Qty,weight) VALUES  ('{$strOr_id}','{$_SESSION["strPro_id"][$i]}','{$_SESSION["strQty"][$i]}','{$_SESSION["strWeight"][$i]}')";
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

unset($_SESSION["intLine"]);
unset($_SESSION["strPro_id"]);
unset($_SESSION["strQty"]);

// send mail
if(empty($_POST["textEmail"])){
  header("location: sowe_order.php?Or_id=".$strOr_id);
  exit();
}

$adress=$_POST["textEmail"];
$or_id=$strOr_id;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
try {
    //Server settings
    // $mail->SMTPDebug = 2;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->SMTPOptions = array(
     'ssl' => array(
      'verify_peer' => false,
      'verify_peer_name' => false,
      'allow_self_signed' => true,
     ),
    );
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'nantawat7183@gmail.com';                     // SMTP username
    $mail->Password   = '0992087183';                               // SMTP password
    // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->SMTPSecure = "tls";
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('nantawat7183@gmail.com', 'Shopmax');
    $mail->addAddress($adress, $_POST["textName"]);     // Add a recipient

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = "<h2><b>เรียน ".$_POST["textName"]."</b></h2><br> คุณได้สั่งซี้อสินค้าจากทาง Shopmax<br> รหัสสั่งซื้อ : <a href='localhost/shopmax/status.php?order_id=".$or_id."' >".$or_id."</a>";

    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
    header("location: sowe_order.php?Or_id={$strOr_id}");

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


?>
<script type="text/javascript">
  // window.location.href="sowe_order.php?Or_id="+"<?=$strOr_id?>";
  // console.log(window.location);
</script>