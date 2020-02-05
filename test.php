<?php include "connectdb.php";?>
<?php
$Pro_id = $_GET['Pro_id'];
$strSQL = "SELECT * FROM product WHERE Pro_id= $Pro_id";
$objQuery = mysqli_query($conn, $strSQL);
while ($objResult = mysqli_fetch_array($objQuery)){

  $Pro_id = $objResult["Pro_id"];
  $Pro_name = $objResult["Pro_name"];
  $Pro_price = $objResult["Pro_price"];
  $Pro_amount = $objResult["Pro_amount"];
  $Pro_detail = $objResult["Pro_detail"];
  $Pro_property = $objResult["Pro_property"];
  $Pro_img = $objResult["Pro_img"];
}
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


    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


    
    
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

        <div class="bg-light py-3">
          <div class="container">
            <div class="row">
              <div class="col-md-12 mb-0"><a href="index.php">หน้าหลัก</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">รายละเอียดสินค้า</strong></div>
            </div>
          </div>
        </div>












        <div class="site-section">
          <div class="container">
            <div class="row">
              <div class="title-section mb-5 col-12">
                <h2 class="text-uppercase"><?php echo $Pro_name ?></h2>
              </div>
            </div>



            <?php include "css1.php";?>

            <div class="container">
              <div class="card">
                <div class="container-fliud">
                  <div class="wrapper row">
                    <div class="preview col-md-6">

                      <div class="preview-pic tab-content">
                        <div class="tab-pane active" id="pic-1"><img src=<?php echo $Pro_img ?> /></div>

                      </div>


                    </div>
                    <div class="details col-md-6">
                      <h1 class="product-title "><?php echo $Pro_name ?></h1>
                      <div class="rating">


                      </div>
                      <h5 class="product-description text-secondary"><?php echo $Pro_detail ?></h5><br>
                      <h2 class="price">ราคา: <span><?php
                      echo $Pro_price ;
                      if($objResult["Pro_type"]==0){
                        echo "บาท/100กรัม";
                      }else{ echo "บาท/500กรัม";}
                      ?></span></h2>

           <!--  <h5 class="sizes">sizes:
              <span class="size" data-toggle="tooltip" title="small">s</span>
              <span class="size" data-toggle="tooltip" title="medium">m</span>
              <span class="size" data-toggle="tooltip" title="large">l</span>
              <span class="size" data-toggle="tooltip" title="xtra large">xl</span>
            </h5> -->
            <br>


            <div class="action">
             <div class="row">
              <div class="col-md-4">

                <button class="btn btn-primary btn-lg btn-block" onclick="window.location='detail_menu_pro.php?Pro_id=<?php echo $Pro_id?>'"/>วิธีทำอาหาร</button>
             </div>
             <div class="col-md-4">                
               <button class="btn btn-primary btn-lg btn-block" onclick="window.location='Property.php'"/>สรรพคุณ</button>
             </div>
             <div class="col-md-4">
              <?php 
              if (isset($_SESSION["ses_userid"])) {
               ?>
               <button class="btn btn-primary btn-lg btn-block" onclick="window.location='order_index.php?Pro_id=<?php echo $Pro_id?>'"/>เพิ่มในตะกร้า</button>
             <?php }else {?>
               <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#exampleModalCenter"/>เพิ่มในตะกร้า</button>  <!--  onclick="window.location='login.php'" -->
             <?php }?>
           </div>
         </div>

         <!--  <a href="order.php?Pro_id=<?php echo $Pro_id?>"> order</a> -->
         <!--   <a href="test.php?Pro_id=<?php echo $Pro_id ?>" class="btn btn-black rounded-0  bg-danger">ดูสินค้า</a> -->


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
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
</form>
</div>
</div>
</div>
















           <!--  </a>
            <h2 class="item-title"><a href="#"></a></h2>
            <strong class="item-price"></strong>
             <div class="star-rating">
              <span class="icon-star2 text-warning"></span>
              <span class="icon-star2 text-warning"></span>
              <span class="icon-star2 text-warning"></span>
              <span class="icon-star2 text-warning"></span>
              <span class="icon-star2 text-warning"></span>
            </div>
            <span><a href="shop.php?Pro_id" class="btn btn-black rounded-0">ADD</a></span> -->
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