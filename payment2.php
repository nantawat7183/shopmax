<?php include "connectdb.php";?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <title>ShopVegetable &mdash; Vegetable Shop Online</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">

    <style>



      .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.9);
        max-width: 800px;
        padding-left:  5%;
        padding-right:  5%;
        padding-top: 3%;
        padding-bottom: 3%;
        margin: auto;
        text-align: center;
        font-family: arial;
      }

      .price {
        color: grey;
        font-size: 22px;
      }

      .card button {
        border: none;
        outline: 0;
        padding: 12px;
        color: white;
        background-color: #00CD66;
        text-align: center;
        cursor: pointer;
        width: 100%;
        font-size: 18px;
      }

      .card button:hover {
        opacity: 0.7;
      }
      th{
        font-size: 16px !important;
      }
    </style>
    
  </head>
  <body>

    <div class="site-wrap">


      <div class="site-navbar bg-white py-2">

        <div class="search-wrap">
          <div class="container">
            <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
            <form action="#" method="post">
              <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
            </form>  
          </div>
        </div>

        <?php include "Menu.php";?>

<!-- < <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner h-25 d-inline-block">
    <div class="carousel-item active">
     
      <img class="d-block w-100"  src="images/t1.jpg" alt="First slide">
      
  </div>
    </div>

    <div class="carousel-item">
      <img class="d-block w-100 "  src="images/t2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/t3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div> -->
<!-- <?php  
$ses_userid = $_SESSION["ses_userid"];

$strSQL = "SELECT * FROM user WHERE UserID= $ses_userid";
$objQuery = mysqli_query($conn, $strSQL);
while ($objResult = mysqli_fetch_array($objQuery)){
  $f_name="";
  if(isset($objResult["f_name"])){
    $f_name = $objResult["f_name"];
  }  
  $l_name = "";
  if(isset($objResult["l_name"])){
    $l_name = $objResult["l_name"];
  }
  $addess = "";
  if(isset($objResult["addess"])){
    $addess = $objResult["addess"];
  }
  $email = "";
  if(isset($objResult["email"])){
    $email = $objResult["email"];
  }
  $U_tel = "";
  if(isset($objResult["U_tel"])){
    $U_tel = $objResult["U_tel"];
  }
  
}

?>
-->




<div class="bg-light py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-12 mb-0"><a href="index.html">หน้าหลัก</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">ชำระเงิน</strong></div>
    </div>
  </div>
</div>





<div class="site-section">
  <div class="container">
    <div class="row">
      <div class="title-section mb-5 col-12">
        <h2 class="text-uppercase">เเจ้งการชำระเงิน</h2>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-3">
    <legend></legend>
  </div>
  <!-- panel preview -->
  <div class="col-lg-6">

    <?php
    $Or_id = $_GET['Or_id'];
    $strSQL = "SELECT * FROM `order` WHERE Or_id = '".$Or_id."' ";
    $objQuery = mysqli_query($conn,$strSQL);
    $objResult = mysqli_fetch_array($objQuery);
    

    $Total = 0;
    $SumTotle = 0;
    $SubTotle = 0; 

    $strSQL_productlist = "SELECT * FROM `order_detail` WHERE Or_id=".$objResult['Or_id'];
    $objQuery_productlist = mysqli_query($conn,$strSQL_productlist)  or die(mysql_error());
    

    ?>
    <h6>ช่องทางการชำระเงิน</h6><br>
    <div  style="display: flex; align-items: center; justify-content: center;" >
      <img src="images/bank.jpg" width="500" style="border: dashed 1px #000;">
    </div> <br>

    <h6>รายการสินค้า</h6>
    
    <div class="">
      <table class="table table-bordered">
        <thead>
          <tr style="padding: 2px; ">
            <th class="product-thumbnail">รหัสสินค้า</th>
            <th class="product-thumbnail">รูปภาพ</th>
            <th class="product-name">ชื่อสินค้า</th> 
            <th class="product-price">ราคา</th>
            <th class="product-price">น้ำหนัก</th>
            <th class="product-quantity">จำนวน</th>
            <th class="product-quantity">ราคารวม(บาท)</th>
          </tr>
        </thead>
        <?php 
        while($objResult_productlist = mysqli_fetch_array($objQuery_productlist)){
          $strSQL_getProduct = "SELECT * FROM `product` WHERE Pro_id=".$objResult_productlist['Pro_id'];
          $objQuery_getProduct = mysqli_query($conn,$strSQL_getProduct)  or die(mysql_error());
          $objResult_getProduct = mysqli_fetch_array($objQuery_getProduct);
          $Total =  $objResult_productlist["Qty"] * ($objResult_getProduct["Pro_price"] * ($objResult_productlist["weight"]/100));
          $SumTotle = $SumTotle +  $Total;
          ?>
          <tr>
            <td><?php echo $objResult_getProduct["Pro_id"];?></td>
            <td >
             <img src="<?php echo $objResult_getProduct["Pro_img"];?>" alt="Image" class="img-fluid" width="50px">
           </td>
           <td >
             <?php echo $objResult_getProduct["Pro_name"];?>
           </td>
           <td> <?php echo $objResult_getProduct["Pro_price"]; if($objResult_getProduct["Pro_type"]==0){
            echo " บาท/100กรัม";
          }else{ echo "บาท/ชุด";}
          ?></td>
          <td >
           <?php echo $objResult_productlist["weight"];?>
         </td>
         <td><?php echo $objResult_productlist["Qty"] ?></td>
         <td> <?php echo $Total; ?></td>
       <?php }?>
     </tr>
   </tbody>
 </table>
 <h6>ราคาสุทธิ <?php echo  $SumTotle ?>.บาท</h6><br>

 <form action="addpayment.php" method="post" enctype="multipart/form-data" name="form_payment">
  <div class="panel panel-default">
    <div class="panel-body form-horizontal payment-form">
      <div class="form-group">
        <label for="concept" class="col-sm-3 control-label">หมายเลขการสั่งซื้อ</label>
        <div class="col-sm-12">
          <input type="number" class="form-control" id="Order_id" name="Order_id" value="<?php echo $objResult['Or_id'];?>" required>
        </div>
      </div>
      <div class="form-group">
        <label for="concept" class="col-sm-3 control-label">ยอดเงินที่โอน</label>
        <div class="col-sm-12">
          <input type="number" class="form-control" id="Pay_total" name="Pay_total" value="<?php echo $Total ?>" required>
        </div>
      </div>
      <div class="form-group">
        <label for="concept" class="col-sm-3 control-label">ชื่อ-นามสกุล</label>
        <div class="col-sm-12">
          <input type="text" class="form-control" id="User_name" name="User_name" value="<?php echo $objResult['Or_name']  ?>" required>
        </div>
      </div>
      <div class="form-group">
        <label for="description" class="col-sm-3 control-label">อีเมล์</label>
        <div class="col-sm-12">
          <input type="email" class="form-control" id="Pay_email" name="Pay_email" value="<?php echo  $objResult['Or_email']   ?>" required>
        </div>
      </div> 
      <div class="form-group">
        <label for="description" class="col-sm-3 control-label">เบอร์โทรศัพท์</label>
        <div class="col-sm-12">
          <input type="text" class="form-control" id="Pay_phon" name="Pay_phon" value="<?php echo $U_tel    ?>" required>
        </div>
      </div> 


      <div class="form-group">
        <label for="status" class="col-sm-3 control-label" >ธนาคาร</label>
        <div class="col-sm-9">
          <!-- <select class="form-control" id="Pay_bank" name="Pay_bank" required>
            <option></option>
            <option>กรุงไทย 123-456-78 สาขาขอนเเก่น</option>
            <option>กสิกร 123-456-78 สาขาขอนเเก่น</option>
            <option>กรุงศรี 123-456-78 สาขาขอนเเก่น</option>
            <option>ออมสิน 123-456-78 สาขาขอนเเก่น</option>
            <option>ทหารไทย123-456-78 สาขาขอนเเก่น</option>


          </select> -->
          <input type="radio" id="Pay_bank1" name="Pay_bank" value="ธนาคารทหารไทย 335-7-81136 สาขาขอนเเก่น">
          <label for="male">กรุงไทย 123-456-78 สาขาขอนเเก่น</label><br>
          <input type="radio" id="Pay_bank2" name="Pay_bank" value="กรุงไทย 123-456-78 สาขาขอนเเก่น">
          <label for="female">พร้อมเพย์ 099-208-7183 </label><br>
        </div>
      </div> 
      <div class="form-group">
        <label for="date" class="col-sm-3 control-label">วันที่/เวลาที่โอน</label>
        <div class="col-sm-9">
          <input type="datetime-local" class="form-control" id="Pay_date" name="Pay_date" value="<?=date('Y-m-d')."T".date('H:i:s')?>" required>
        </div>
      </div>   
      <div class="form-group">
        <label for="date" class="col-sm-3 control-label">รูปภาพใบเสร็จการโอน</label>
        <div class="col-sm-9"> 
          <input type="file" name="fileToUpload" id="fileToUpload"  required>
        </div>
      </div><br>
      <div class="form-group">
        <div class="col-sm-12 text-right ">
          <?php 
          if (isset($_SESSION["ses_userid"])) {?>
            <button type="submit" class="btn btn-primary btn-lg btn-block" >
              <span class="glyphicon glyphicon-plus"></span> ยืนยันการชำระเงิน
            </button>

          <?php }else { ?>
           <button type="button" class="btn btn-primary btn-lg btn-block"  data-toggle="modal" data-target="#exampleModalCenter">
            <span class="glyphicon glyphicon-plus"></span> ยืนยันการชำระเงิน
          </button>

        <?php }?>
      </div>
    </div>
    <?php ?>

    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="check_login.php" method="post">
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="email" class="text-black">อีเมลล์ <span class="text-danger">*</span></label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="password" class="text-black">รหัสผ่าน <span class="text-danger">*</span></label>
                  <input type="Password" class="form-control" id="password" name="password">
                </div>
              </div>

            </div>
            <div class="modal-footer">
              <a href="login.php" class="col-md-5" style="margin-right:100px">สมัคสมาชิก </a>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Login</button>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
</div>            
</div>
</div>




<!-- / panel preview -->
        <!-- <div class="row">
                  <div class="col-md-12">
                    <button class="btn btn-primary btn-lg btn-block" onclick="window.location='sowe_order.php'"/>ยืนยันสินค้า</button>
                  </div>
                </div> -->
                




                <?php include("footter.php");?>
              </div>

              <script src="js/jquery-3.3.1.min.js"></script>
              <script src="js/jquery-ui.js"></script>
              <script src="js/popper.min.js"></script>
              <script src="js/bootstrap.min.js"></script>
              <script src="js/owl.carousel.min.js"></script>
              <script src="js/jquery.magnific-popup.min.js"></script>
              <script src="js/aos.js"></script>

              <script src="js/main.js"></script>

            </body>
            </html>