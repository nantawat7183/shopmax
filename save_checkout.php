 <?php session_start();?> 
<?php include "connectdb.php"; ?>
<?php include "check_session.php"; ?>
<html>
<head>
<title>ThaiCreate.Com</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<table width="400"  border="1">
  <tr>
    <td width="101">ProductID</td>
    <td width="82">ProductName</td>
    <td width="82">Price</td>
    <td width="79">Qty</td>
    <td width="79">Total</td>
  </tr>
   <?php
  $Total = 0;
  $SumTotal = 0;
  $SubTotle = 0;
 

  for($i=0;$i<=(int)$_SESSION["intLine"];$i++)
  {
    if($_SESSION["strPro_id"][$i] != "")
    {
    $strSQL = "SELECT * FROM product  WHERE Pro_id = '".$_SESSION["strPro_id"][$i]."' ";
    $objQuery = mysqli_query($conn,$strSQL)  or die(mysql_error());
    $objResult = mysqli_fetch_array($objQuery);
    $Total = $_SESSION["strQty"][$i] * $objResult["Pro_price"];
    $SumTotal = $SumTotal + $Total;
    $SubTotle = $SubTotle +  $_SESSION["strQty"][$i];
   

    ?>
                <tr>
                    <td>
                      <?php echo $_SESSION["strPro_id"][$i];?>
                    </td>
                    
                    <td >
                     <?php echo $objResult["Pro_name"];?>
                    </td>
                    <td> <?php echo $objResult["Pro_price"];?></td>
                    <td><?php echo $_SESSION["strQty"][$i];?></td>
                    <td><?php echo number_format($Total,2);?></td>
                     

                  </tr>
                 </tbody>

                 <?php
    }
  }
  ?>

 
</table>

 จำนวน<?php echo number_format($SubTotle,2);?>
  ยอดรวมทั้งหมด<?php echo number_format($SumTotal,2);?>
<br><br>

  <?php  
          $ses_userid = $_SESSION["ses_userid"];

          $strSQL = "SELECT * FROM user WHERE UserID= $ses_userid";
            $objQuery = mysqli_query($conn, $strSQL);
            while ($objResult = mysqli_fetch_array($objQuery)){

              $f_name = $objResult["f_name"];
              $l_name = $objResult["l_name"];
              $addess = $objResult["addess"];
              $email = $objResult["email"];
            }

        ?> 


       <form name="form1" method="post" action= "save_order.php">
  <table width="100%" border="1">
  <tr>
      <td>สถานที่จัดส่ง</td>
      
    </tr>
    <tr>
      <td width="20%">ชื่อ นามสกุล</td>
    <td width="80%"><input type="text" name="txtName" width="200pt" required size="120"></td>
    </tr>
    
    <tr>
  <td>ที่อยู่</td>
      <td><textarea name="txtAddress" required size="120"></textarea></td>

    </tr>
   
  </table>
    <input type="submit" name="Submit" value="Submit"onclick="myFunction()" >
</form>
<?php

?>
<!-- <form name="form1" method="post" action="save_checkout.php">
  <table width="304" border="1">
    <tr>
      <td width="71">ชื่อ:  </td>
      <td><p  ><?php echo " " . $f_name . " " .  $l_name ?></p></td>
    </tr>
    <tr>
      <td>ที่อยู่</td>
      <td> <p><?php echo " " . $addess ?></p></td>
    </tr>
    <tr>
      <td>อีเมล์</td>
      <td><p><?php echo " " . $email ?></p></td>
    </tr>
    
  </table>
    <input type="submit" name="Submit" value="Submit">
</form>
 -->
</body>
</html>