<?php include "connectdb.php";?>
<?php 
// include "check_session.php"; 
?>
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

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

    
    
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
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="images/sli2.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/sli2.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/sli2.jpg" alt="Third slide">
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
      </div>




        <div class="bg-light py-3">
          <div class="container">
            <div class="row">

              <div class="col-md-12 mb-0"><a href="index.php">หน้าหลัก</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">สั่งซื้อ</strong></div>
            </div>
          </div>
        </div>




        <div class="site-section">
          <div class="container">
            <div class="title-section mb-12">
              <h2 class="text-uppercase"><span class="d-block">สินค้า</span></h2>
            </div>
            <?php include "css.php";?>



            <div class="row">

              <?php 

              $strSQL = "SELECT * FROM product";
              $objQuery = mysqli_query($conn, $strSQL);
              $Pro_type_pack ='0';
              while ($objResult = mysqli_fetch_array($objQuery)){
                if($objResult['Pro_type']==$Pro_type_pack){
                  $Pro_id = $objResult["Pro_id"];
                  $Pro_name = $objResult["Pro_name"];
                  $Pro_price = $objResult["Pro_price"];
                  $Pro_amount = $objResult["Pro_amount"];
                  $Pro_detail = $objResult["Pro_detail"];
                  $Pro_property = $objResult["Pro_property"];
                  $Pro_img = $objResult["Pro_img"];
                  ?>

                  <div class="col-md-3 col-sm-6 ">
                    <div class="product-grid6">
                      <div class="">
                        <a href="#" class="product-item md-height bg-gray d-block">
                          <img class="pic-1" src="<?php echo $Pro_img ?>">
                        </a>
                      </div>
                      <div class="product-content">
                        <h3 class="title"><a href="#"><?php echo $Pro_name ?></a></h3>
                        <div class="price text-secondary "><?php echo $Pro_price  ?>บาท /กิโลกรัม
                         <!--  <span>$14.00</span> -->
                       </div>
                     </div>
                     <ul class="social "> 
                      <?php 
                      if (isset($_SESSION["ses_userid"])) {?>
                        <li><a href="order.php?Pro_id=<?php echo $objResult["Pro_id"];?>" data-tip="เพิ่มในตะกร้า"><i class="fa fa-shopping-bag " onclick="alert('คุณได้เพิ่มสินค้าไว้ในตะกร้าเเล้ว')"></i></a></li>
                      <?php }else {?>

                        <li><a href="login.php" data-tip="เพิ่มในตะกร้า" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-shopping-bag " ></i></a></li>
                      <?php }?>
                    </form>
                  </ul>
                </div>
              </div>






              <?php 
            }}
            ?>



            <div class="title-section mb-5 col-12" style="margin-top: 50px ">
              <h2 class="text-uppercase">เพ็คเกจ</h2>



              <div class="row">

                <?php
                $objQuery = mysqli_query($conn, $strSQL);
                $Pro_type_pack ='1';
                while ($objResult = mysqli_fetch_array($objQuery)){
                  if($objResult['Pro_type']==$Pro_type_pack){
                    $Pro_id = $objResult["Pro_id"];
                    $Pro_name = $objResult["Pro_name"];
                    $Pro_price = $objResult["Pro_price"];
                    $Pro_amount = $objResult["Pro_amount"];
                    $Pro_detail = $objResult["Pro_detail"];
                    $Pro_property = $objResult["Pro_property"];
                    $Pro_img = $objResult["Pro_img"];
                    ?>
                    <div class="col-md-3 col-sm-6 " style="padding-top: 50px">
                      <div class="product-grid6" >
                        <div class="">
                          <a href="#" class="product-item md-height bg-gray d-block" >
                            <img class="pic-1" src="<?php echo $Pro_img ?>">
                          </a>
                        </div>
                        <div class="product-content">
                          <h3 class="title"><a href="#"><?php echo $Pro_name ?></a></h3>
                          <div class="price text-secondary "><?php echo $Pro_price  ?>บาท /กิโลกรัม
                           <!--  <span>$14.00</span> -->
                         </div>
                       </div>
                       <ul class="social "> 
                        <?php 
                        if (isset($_SESSION["ses_userid"])) {?>
                          <li><a href="order.php?Pro_id=<?php echo $objResult["Pro_id"];?>" data-tip="เพิ่มในตะกร้า"><i class="fa fa-shopping-bag " onclick="alert('คุณได้เพิ่มสินค้าไว้ในตะกร้าเเล้ว')"></i></a></li>
                        <?php }else {?>

                          <li><a href="login.php" data-tip="เพิ่มในตะกร้า" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-shopping-bag " ></i></a></li>
                        <?php }?>
                      </form>
                    </ul>
                  </div>
                </div>
                <br> <br> <br> <br>



                <?php 
              } }
              ?>


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
                        <a href="login.php" class="col-md-8" style="margin-right:2px">สมัคสมาชิก </a>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Login</button>
                      </div>
                    </form>
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