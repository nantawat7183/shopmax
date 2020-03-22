
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
   $objQuery_product = mysqli_query($conn, $strSQL);
   if ($objResult = mysqli_fetch_array($objQuery_product)){
    $qtyNew=$objResult['Pro_amount']-$_SESSION["strQty"][$i];
    $strSQL = "UPDATE product SET Pro_amount=".$qtyNew." where Pro_id=".$_SESSION["strPro_id"][$i];
    $objQuery = mysqli_query($conn, $strSQL);
  }
}
}



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
    $mail->Username   = 'shopmaxshopping123@gmail.com';                     // SMTP username
    $mail->Password   = '0972075037';                               // SMTP password
    // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->SMTPSecure = "tls";
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('shopmaxshopping123@gmail.com', 'Shopmax');
    $mail->addAddress($adress, $_POST["textName"]);     // Add a recipient

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $html_content = "<h2><b>เรียน ".$_POST["textName"]."</b></h2><br> คุณได้สั่งซี้อสินค้าจากทาง Shopmax<br> รหัสสั่งซื้อ : <a href='http://jarlod.tk/shopmax/status.php?order_id=".$or_id."' >".$or_id."</a><br><br>
    <table border='1' width='500px'>
    <thead>
    <tr>
    <th>รหัสสินค้า</th>
    <th>ชื่อสินค้า</th> 
    <th>ราคา</th>
    <th>จำนวน</th>
    <th>น้ำหนัก</th>
    <th>ราคารวม</th>
    </tr>
    </thead>
    <tbody>";

    $Total = 0;
    $SumTotal = 0;
    $SubTotle = 0;
    for($i=0;$i<=(int)$_SESSION["intLine"];$i++){
      if($_SESSION["strPro_id"][$i] != ""){
        $strSQL = "SELECT * FROM product WHERE Pro_id = ".$_SESSION["strPro_id"][$i];
        $objQuery_product = mysqli_query($conn, $strSQL);
        $objResult = mysqli_fetch_array($objQuery_product);
         $Total = $_SESSION["strQty"][$i] * ($objResult["Pro_price"] * ($_SESSION["strWeight"][$i] / 100));
        $SumTotal = $SumTotal + $Total;
        $SubTotle = $SubTotle +  $objResult["Qty"];
        $html_content = $html_content."<tr> <td>{$objResult["Pro_id"]}</td>  
        <td>{$objResult["Pro_name"]}</td> <td>{$objResult["Pro_price"]}/100กรัม</td> <td>{$_SESSION["strQty"][$i]}</td><td>{$_SESSION["strWeight"][$i]}กรัม</td><td>{$Total}</td></tr>";
      }
    }
    $html_content = $html_content."</tbody></table><br><h3>ราคาสุทธิ์ {$SumTotal}</h3>";
    $html_content = $html_content."<h2>ช่องทางในการชำระเงิน</h2><br>
    <table border='1' width='500px'>
    <thead>
    <tr>
    <th>ธนาคาร</th>
    <th>ชื่อบัญชี</th> 
    <th>เลขที่บัญชี</th>  
    </tr>
    </thead>
    <tbody>
    <tr>
    <td>ธนาคารทหารไทย</td>
    <td>นันทวัฒน์ ดวงมาลัย</td> 
    <td>335-7-811136</td>  
    </tr>
     <tr>
    <td>พร้อมเพย์</td>
    <td>นันทวัฒน์ ดวงมาลัย</td> 
    <td>097-207-5037</td>  
    </tr>
    </thead>
    </table>

    " ;
     $html_content = $html_content."<h3>ทำการชำระเงิน:<a href='http://jarlod.tk/shopmax/payment2.php?Or_id={$or_id}' >ชำระเงิน</a></h3><br><h3>ชื่อ:".$_POST["textName"]." </h3>ที่อยู่ในการจัดส่ง:".$_POST["textAddress"]."<br>เบอร์โทรศัพท์:".$_POST["textU_tel"]."";
    $mail->Body = $html_content;

    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
    header("location: sowe_order.php?Or_id={$strOr_id}");

  } catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }

// clear session
  unset($_SESSION["intLine"]);
  unset($_SESSION["strPro_id"]);
  unset($_SESSION["strQty"]);
  ?>
  <script type="text/javascript">
  // window.location.href="sowe_order.php?Or_id="+"<?=$strOr_id?>";
  // console.log(window.location);
</script>