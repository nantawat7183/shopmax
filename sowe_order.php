 <?php 
 session_start();?>
 <?php include "connectdb.php"; ?>
 <?php include "check_session.php"; ?>


 <!DOCTYPE html>
 <html lang="en">
 <head>
  <title>ShopMax &mdash; Colorlib e-Commerce Template</title>
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
                      <th class="product-quantity">จำนวน</th>
                      <th class="product-total">ราคารวม</th>

                    </tr>
                  </thead>
                  <tbody>
                  <?php
                  $Total = 0;
                  $SumTotal = 0;
                  $SubTotle = 0;

                  $strSQL1 = "SELECT * FROM order_detail WHERE Or_id = '".$_GET["Or_id"]."' ";
                  $objQuery1 = mysqli_query($conn,$strSQL1);

                  while($objResult1 = mysqli_fetch_array($objQuery1)) {

                    $strSQL2 = "SELECT * FROM product WHERE Pro_id = '".$objResult1["Pro_id"]."' ";
                    $objQuery2 = mysqli_query($conn,$strSQL2);
                    $objResult2 = mysqli_fetch_array($objQuery2);
                    $Total = $objResult1["Qty"] * $objResult2["Pro_price"];
                    $SumTotal = $SumTotal + $Total;
                    $SubTotle = $SubTotle +  $objResult1["Qty"];
                    ?>
                    <tr>
                      <td>
                        <?php echo $objResult1["Pro_id"];?>
                      </td>

                      <td >
                       <?php echo $objResult2["Pro_name"];?>
                     </td>
                     <td><?php
                     echo $objResult2["Pro_price"];
                     if($objResult2["Pro_type"]==0){
                      echo "บาท/กรัม";
                    }else{ echo "บาท/ชุด";}
                    ?></td>
                    <td><?php echo  $objResult1["Qty"];?></td>
                    <td><?php echo number_format($Total,2);?></td>

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
      $ses_userid = $_SESSION["ses_userid"];

      $strSQL = "SELECT * FROM user WHERE UserID= $ses_userid";
      $objQuery = mysqli_query($conn, $strSQL);
      while ($objResult = mysqli_fetch_array($objQuery)){

        $f_name = $objResult["f_name"];
        $l_name = $objResult["l_name"];
        $addess = $objResult["addess"];
        $email = $objResult["email"];
         $U_tel = $objResult["U_tel"];
      }

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
              <p type="text" id="textName" name="textName"><?php echo "ชื่อ: " . $f_name . " " .  $l_name ?></p>
              <p name="textAddress" id="textAddress"><?php echo "ที่อยู่: " . $addess ?></p>
              <p type="email"  id="textEmail" name="textEmail"><?php echo "อีเมลล์: " . $email ?></p>
               <p type="text"  id="textU_tel" name="textU_tel"><?php echo "หมายเลขโทรศัพท์: " . $U_tel ?></p>
              <!--  <a href='edit.php?UserId=$row[0]'>แก้ไข</a> <br><br><br> -->
              <div class="alert alert-danger text-center" style="padding: 50px; font-size: 20px;">
                หมายเลขชำระเงิน : <b><?php echo $Or_id; ?></b>
              </div>
              <div  class="text-center" style="font-size: 20px"><b>ช่องทางการชำระเงิน</b></div><br>
              <div  style="width: 10px">
                <img src="images/payment2.jpg">
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
                  <strong class="text-black"><?php echo number_format($SumTotal,2);?> บาท</strong>
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

<footer class="site-footer custom-border-top">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
        <h3 class="footer-heading mb-4">OUR SHOP</h3>
        <a href="#" class="block-6">
          <img src="images/pic.png" alt="Image placeholder" class="img-fluid rounded mb-4">
          <h3 class="font-weight-light  mb-0">A quality vegetable shop that you can't find anywhere else.</h3>
          <p>Open now  &mdash;  April 20, 2019</p>
        </a>
      </div>
      <div class="col-lg-5 ml-auto mb-5 mb-lg-0">
        <div class="row">
          <div class="col-md-12">
            <h3 class="footer-heading mb-4">Quick Links</h3>
          </div>
          <div class="col-md-6 col-lg-4">
            <ul class="list-unstyled">
              <li><a href="#">Sell online</a></li>
              <li><a href="#">Features</a></li>
              <li><a href="#">Shopping cart</a></li>
              <li><a href="#">Store builder</a></li>
            </ul>
          </div>
          <div class="col-md-6 col-lg-4">
            <ul class="list-unstyled">
              <li><a href="#">Mobile commerce</a></li>
              <li><a href="#">Dropshipping</a></li>
              <li><a href="#">Website development</a></li>
            </ul>
          </div>
          <div class="col-md-6 col-lg-4">
            <ul class="list-unstyled">
              <li><a href="#">Point of sale</a></li>
              <li><a href="#">Hardware</a></li>
              <li><a href="#">Software</a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="block-5 mb-5">
          <h3 class="footer-heading mb-4">Contact Info</h3>
          <ul class="list-unstyled">
            <li class="address">123/2001 Information Technology, Department of Computer Science, Faculty of Science, KKU</li>
            <li class="phone"><a href="tel://23923929210">+2 392 3929 210</a></li>
            <li class="email">n.kanrutai@kkumail.com</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row pt-5 mt-5 text-center">
      <div class="col-md-12">
        <p>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;<script>document.write(new Date().getFullYear());</script> Khon Kaen University
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </p>
      </div>

    </div>
  </div>
</footer>
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