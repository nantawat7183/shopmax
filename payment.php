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
      <link rel="shortcut icon" type="image/x-icon" href="images/logo.ico" />
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
  <div class="col-sm-4">
    <legend></legend>
  </div>
  <!-- panel preview -->
  <div class="col-lg-5">
   <h6>ช่องทางการชำระเงิน</h6><br>
   <div  style="display: flex; align-items: center; justify-content: center;" >
    <img src="images/bank.jpg" width="500" style="border: dashed 1px #000;">
  </div> <br>

  <form action="addpayment.php" name="form_payment" method="post" enctype="multipart/form-data" >
    <div class="panel panel-default">
      <div class="panel-body form-horizontal payment-form">
        <div class="form-group">
          <label for="concept" class="col-sm-3 control-label">หมายเลขการสั่งซื้อ</label>
          <div class="col-sm-12">
            <input type="number" class="form-control" id="Order_iddd" name="Order_iddd" value="" required>
          </div>
        </div>
        <div class="form-group">
          <label for="concept" class="col-sm-3 control-label">ยอดเงินที่โอน</label>
          <div class="col-sm-12">
            <input type="number" class="form-control" id="Pay_total" name="Pay_total" value="" required>
          </div>
        </div>
        <div class="form-group">
          <label for="concept" class="col-sm-3 control-label">ชื่อ-นามสกุล</label>
          <div class="col-sm-12">
            <input type="text" class="form-control" id="User_name" name="User_name" value="" required>
          </div>
        </div>
        <div class="form-group">
          <label for="description" class="col-sm-3 control-label">อีเมล์</label>
          <div class="col-sm-12">
            <input type="email" class="form-control" id="Pay_email" name="Pay_email" value="" required>
          </div>
        </div> 
        <div class="form-group">
          <label for="description" class="col-sm-3 control-label">เบอร์โทรศัพท์</label>
          <div class="col-sm-12">
            <input type="number" class="form-control" id="Pay_phon" name="Pay_phon" value="" required>
          </div>
        </div> 


        <div class="form-group">
          <label for="status" class="col-sm-3 control-label" >ธนาคาร</label>
          <div class="col-sm-12">
           <!--  <select class="form-control" id="Pay_bank" name="Pay_bank" required>
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
          <label for="date" class="col-sm-3 control-label">วันที่</label>
          <div class="col-sm-9">
            <input type="datetime-local" class="form-control" id="Pay_date" name="Pay_date" required>
          </div>
        </div>   
        <div class="form-group">
          <label for="date" class="col-sm-3 control-label">รูปภาพใบเสร็จการโอน</label>
          <div class="col-sm-9"> 
            <input type="file" name="fileToUpload" id="fileToUpload"  required>
          </div>
        </div><br>
        <div class="form-group">
          <div class="col-sm-12 text-right " >
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
      </div></form>

      <!-- popup -->
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
        <!-- ------- -->

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
                

                <br>
                <br> 
                <br>



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