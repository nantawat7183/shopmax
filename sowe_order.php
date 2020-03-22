 <?php 
 session_start();?>
 <?php include "connectdb.php"; ?>
 <?php include "check_session.php"; ?>


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

      <?php include "Menu.php"; ?>
      <div class="bg-light py-3">
        <div class="container">
          <div class="row">
            <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Cart</strong></div>
          </div>
        </div>
      </div>

      <?php
      $Or_id = $_GET['Or_id'];
      $strSQL = "SELECT * FROM `order` WHERE Or_id = '".$_GET["Or_id"]."' ";
      $objQuery = mysqli_query($conn,$strSQL);
      $objResult = mysqli_fetch_array($objQuery);

      ?>

      <div class="site-section">
        <div class="container">
          <div class="row mb-5">
            <form class="col-md-12" method="post">
              <div class="site-blocks-table col-md-12">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th class="product-price">รหัสสินค้า</th>
                      <th class="product-name">ชื่อสินค้า</th> 
                      <th class="product-price">ราคา</th>
                      <th class="product-price">น้ำหนัก</th>
                      <th class="product-quantity">จำนวน</th>
                      <th class="product-total">ราคารวม</th>

                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $Total = 0;
                    $SumTotle = 0;
                    $SubTotle = 0;

                    $strSQL1 = "SELECT * FROM order_detail WHERE Or_id = '".$_GET["Or_id"]."' ";
                    $objQuery_productlist = mysqli_query($conn,$strSQL1);

                    while($objResult_productlist = mysqli_fetch_array($objQuery_productlist)){
                      $strSQL_getProduct = "SELECT * FROM `product` WHERE Pro_id=".$objResult_productlist['Pro_id'];
                      $objQuery_getProduct = mysqli_query($conn,$strSQL_getProduct)  or die(mysql_error());
                      $objResult_getProduct = mysqli_fetch_array($objQuery_getProduct);
                      $Total =  $objResult_productlist["Qty"] * ($objResult_getProduct["Pro_price"] * ($objResult_productlist["weight"]/100));
                      $SumTotle = $SumTotle +  $Total;
                      $SubTotle = $SubTotle +  $objResult_productlist["Qty"];
                      ?>

                      <tr>
                        <td>
                          <?php echo $objResult_getProduct["Pro_id"];?>
                        </td>

                        <td >
                          <?php echo $objResult_getProduct["Pro_name"];?>
                        </td>
                        <td><?php echo $objResult_getProduct["Pro_price"]; if($objResult_getProduct["Pro_type"]==0){
                          echo " บาท/100กรัม";
                        }else{ echo "บาท/ชุด";}
                        ?></td>
                        <td><?php echo $objResult_productlist["weight"];?></td>
                        <td><?php echo $objResult_productlist["Qty"] ?></td>
                        <td><?php echo $Total; ?></td>

                      </tr>


                      <?php

                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </form>
          </div>



          <?php  

          ?>

          <div class="row">
            <div class="col-md-6">
              <div class="row mb-0">
                <div class="col-md-6 ">
                  <div class="  btn-sm "></div>
                  <div class="row">
                    <div class="col-md-12 text-left pl-5 mb-2">
                      <h3 class="text-black h4 text-uppercase">ที่อยู่ในการจัดส่ง</h3>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">

                </div>
              </div>


              <div class="row">
                <div class="col-md-12">
                  <p type="text" id="textName" name="textName"><?php echo "ชื่อ-นาามสกุล: ".$objResult["Or_name"]; ?></p>
                  <p name="textAddress" id="textAddress"><?php echo "ที่อยู่: " .$objResult["Or_address"];?></p>
                  <p type="email"  id="textEmail" name="textEmail"><?php echo "อีเมล์: " . $objResult["Or_email"];?></p>
                  <p type="text"  id="textU_tel" name="textU_tel"><?php echo "หมายเลขโทรศัพท์: " . $objResult["U_tel"];?></p>
                  <!--  <a href='edit.php?UserId=$row[0]'>แก้ไข</a> <br><br><br> -->
                  <div class="alert alert-danger text-center" style="padding: 50px; font-size: 20px;">
                    หมายเลขชำระเงิน : <b><?php echo $Or_id; ?></b>
                  </div>
                  <div  class="text-center" style="font-size: 20px"><b>ช่องทางการชำระเงิน</b></div><br>
                  <div  >
                    <img style="width: 500px" src="images/bank.jpg">
                  </div> 

                  <label class="text-black h4" for="coupon"></label>
                  <p></p>
                </div>
                <div class="col-md-8 mb-3 mb-md-0">

                </div>
                <div class="col-md-4">

                </div>                
              </div>
            </div>
            <div class="col-md-6 pl-5">
              <div class="row justify-content-end">
                <div class="col-md-7"> 
                  <div class="row">
                    <div class="col-md-12 text-right border-bottom mb-5">
                      <h3 class="text-black h4 text-uppercase">ยอดรวม</h3>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-md-6">
                      <span class="text-black">จำนวนรวม</span>
                    </div>
                    <div class="col-md-6 text-right">
                      <strong class="text-black"><?php echo number_format($SubTotle);?>.รายการ</strong>
                    </div>
                  </div>
                  <div class="row mb-5">
                    <div class="col-md-6">
                      <span class="text-black">ยอดรวมทั้งหมด</span>
                    </div>
                    <div class="col-md-6 text-right">
                      <strong class="text-black"><?php echo $SumTotle ;?> บาท</strong>
                    </div>
                  </div>              

                  <div class="row">
                    <div class="col-md-12" style="padding-left: 70px">
                      <input type=button class="btn btn-primary" name=print value="พิมพ์" onClick="window.print()">
                      <input type=button  class="btn btn-primary" name=payment value="เเจ้งการชำระเงิน"  onclick="window.location='payment2.php?Or_id=<?php echo $Or_id;?>'" >
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