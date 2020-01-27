<?php include "connectdb.php"; ?>
<?php include "check_session.php"; ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>ShopVegetable &mdash; Vegetable Shop Online</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/lib/w3.css">

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
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
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
      background-color: #000;
      text-align: center;
      cursor: pointer;
      width: 100%;
      font-size: 18px;
    }

    .card button:hover {
      opacity: 0.7;
    }
    .th-h{
      font-size:0.8rem !important;
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
      <?php include "Menu_addmin.php"; ?> 


       <div class="custom-border-bottom py-3">
        <div class="container">
          <div class="row">
            <div class="col-md-12 mb-0"><strong class="text-black">เเก้ไขติดตามสินค้า</strong> <span class="mx-2 mb-0">/</span> </div>
          </div>
        </div>
      </div>
      
      


      <div class="site-section" >
        <div class="container" style="margin-left: 20px">
          <div class="row">
            <div class="title-section mb-5 col-12">
              <h2 class="text-uppercase">เเก้ไข้สถานะการจัดส่ง</h2>
            </div>
          </div>
        </div>
          
          <?php
          
          $strSQL =  "SELECT * FROM payment INNER JOIN `order` ON payment.Or_id =payment.Or_id ";
          $objQuery = mysqli_query($conn, $strSQL);  
          while ($objResult = mysqli_fetch_array($objQuery)){
            $Or_id = $objResult["Or_id"];
            $Or_date = $objResult["Or_date"];
            $Or_name = $objResult["Or_name"];
            $Or_address = $objResult["Or_address"];
            $Or_email = $objResult["Or_email"];
            $UserID = $objResult["UserID"];
            $status = $objResult["status"];
            $Pay_id = $objResult["Pay_id"];
            $Pay_bank = $objResult["Pay_bank"];
            $Pay_date = $objResult["Pay_date"];
            $Pay_img = $objResult["Pay_img"];
            
            ?>
            
            <div class="row">
            <div class="site-section pt-2" style="padding-top: 8px; padding-bottom: 8px">
              <div class="px-5">
                <div class="row mb-5">
                  <form class="col-md-12" method="post">
                    <div class="site-blocks-table">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th class="th-h" >รหัสผู้ใช้</th>
                            <th class="th-h">รหัสสั่งซื้อ</th>
                            <th class="th-h">รหัสชำระเงิน</th>
                            <th class="th-h">ชื่อ</th> 
                            <th class="th-h">ที่อยู่</th>
                            <th class="th-h">อีเมลล์</th>
                            <th class="th-h">ธนาคาร</th>
                            <th class="th-h">วันที่ชำระเงิน</th>
                            <th class="th-h">ใบเสร็จชำระเงิน</th>
                            <th class="th-h">สถานะจัดส่ง</th>
                             <th class="th-h">เเก้ไขสถานะ</th>

                          </tr>
                        </thead>
                        <tr>
                          <td style="size: 100%"><?php echo $UserID ?></td>
                          <td><?php echo $Or_id ?></td>
                          <td><?php echo $Pay_id ?></td>
                          <td><?php echo $Or_name ?></td>
                          <td><?php echo $Or_address ?></td>
                          <td><?php echo $Or_email ?></td>
                          <td><?php echo $Pay_bank ?></td>
                          <td><?php echo $Pay_date ?></td>                       
                          <td> <img src="<?php echo $Pay_img ?>" alt="Image" class="img-fluid" width="150"></td>
                          <td><?php echo $status ?></td>
                          <td><button class=button1 ><a href="edit_to_status.php?Pay_id=<?php echo $Pay_id ?>&Or_id=<?php echo $Or_id ?>">เเก้ไข</a></button></a></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
              <?php 
            }
            ?>    
            
            <hr>



   <!--  <div class="site-blocks-cover" data-aos="fade">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto order-md-2 align-self-start">
            <div class="site-block-cover-content">
            <h2 class="sub-title" style="color: #FFB90F">Shop</h2>
            <h1 style="color: #FFB90F">Vegetables</h1>
            <p><a href="file:///C:/Users/WINDOWS/Desktop/pj/shopmax/shop.html" class="btn btn-black rounded-0 bg-success">Shop Now</a></p>
            </div>
          </div>
          <div class="col-md-6 order-1 align-self-center ">
            <img src="images/h1.png" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div> -->


    


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