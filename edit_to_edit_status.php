<?php include "connectdb.php"; ?>
<?php include "check_session.php";

$Or_id = $_POST['Or_id'];
$status  =  $_POST['status'];
$status_ems  =  $_POST['Status_ems'];


$strSQL = "SELECT * FROM `order` WHERE Or_id= {$Or_id}";
// echo ($strSQL);
// exit();
$objQuery = mysqli_query($conn, $strSQL);
$objResult = mysqli_fetch_array($objQuery);
$Or_id = $objResult["Or_id"];
$Or_name = $objResult["Or_name"];
$Or_email = $objResult["Or_email"];

$status_name="";
if($status==0){
  $status_name="ยังไม่ชำระเงิน";
}else if($status==1){
  $status_name=" กำลังตรวจสอบการชำระเงิน";
}else if($status==2){
  $status_name=" ชำระเงินเเล้ว";
}else if($status==3){
  $status_name=" กำลังรอการจัดส่ง";
}else if($status=4){
  $status_name=" ดำเนินการจัดส่งเเล้ว";
}


$sql = "UPDATE `order` SET
status  = '{$status}',
status_ems  = '$status_ems'

WHERE Or_id = $Or_id";

$query  = mysqli_query($conn,$sql);   
      // $last_id = $conn->insert_id;   

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
    $mail->addAddress($Or_email);     // Add a recipient

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = "<h2><b>เรียน ".$Or_name."</b></h2><br> คุณได้สั่งซี้อสินค้าจากทาง Shopmax<br> รหัสสั่งซื้อ:".$Or_id."<br>สถานะสินค้าของคุณตอนนี้ ".$status_name." ";

    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
    // header("location: sowe_order.php?Or_id={$strOr_id}");

    if($query){
      header("Location: order_show_addmin.php");
    }else{
      $msg = "ไม่สามารถป้อนข้อมูลได้ ";
      echo $msg."<br>";
      echo $sql."<br>";
      echo "<a href='edit_to_status.php'>กลับ</a>";
    }


  } catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }


  ?>
  <!-- <script type="text/javascript">
    window.location.href="sowe_order.php?Or_id="+"<?=$strOr_id?>";
    console.log(window.location);
  </script> -->

