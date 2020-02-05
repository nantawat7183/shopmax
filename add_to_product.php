<?php include "connectdb.php"; ?>
<?php include "check_session.php"; ?>

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
            <div class="col-md-12 mb-0"><a href="Edit_product.php">เเก้ไขสินค้า</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">เพิ่มสินค้า</strong></div>
          </div>
        </div>
      </div>


      <div class="site-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2 class="h3 mb-3 text-black">เพิ่มสินค้า</h2>
            </div>
            <div class="col-md-12">

              <form action="add2_to_product.php" method="post" enctype="multipart/form-data">

                <div class="p-3 p-lg-5 border">
                  <div class="form-group row">
                   <div class="col-md-2">
                    <!-- <label for="Pro_id" class="text-black">รหัสสินค้า <span class="text-danger">*</span></label> -->
                    <input type="hidden" class="form-control" id="Pro_id" name="Pro_id" value="<?=rand(00000000000,999999999);?>" >
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="Pro_name" class="text-black">ชื้อสินค้า <span class="text-danger"></span></label>
                    <input type="text" class="form-control" id="Pro_name" name="Pro_name" required >
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="Pro_price" class="text-black">ราคา <span class="text-danger"></span></label>
                    <input type="number" step="0.5" class="form-control" id="Pro_price" name="Pro_price" required >
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="Pro_amount" class="text-black">จำนวน <span class="text-danger"></span></label>
                    <input type="text" class="form-control" id="Pro_amount" name="Pro_amount" required >
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="Pro_weight" class="text-black">น้ำหนัก <span class="text-danger"></span></label>
                    <input type="text" class="form-control" id="Pro_weight" name="Pro_weight" required >
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="Pro_detail" class="text-black">รายละเอียดสินค้า </label>
                    <textarea type="text" class="form-control" id="Pro_detail" name="Pro_detail" ></textarea>

                  </textarea>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="Pro_property" class="text-black">คุณสมบัติสินค้า </label>
                  <textarea type="text" name="Pro_property" id="Pro_property"  class="form-control" ></textarea>


                </div>
              </div>
              <div class="form-group">
                <label for="date" class="col-sm-3 control-label">รูปภาพ</label>
                <div class="col-sm-9"> 
                  <input type="file" name="fileToUpload" id="fileToUpload" required>
                </div>
              </div>
              <br>

              
                <div class="form-group row">
                  <div class="col-md-4">
                   <label for="Pro_property" class="text-black">ประเภทสินค้า </label>
                    <select id="Pro_type" name="Pro_type" class="form-control" required>
                      <option value="0" >ผักชนิดเดียว</option>
                      <option value="1">เพ็คเกจ</option>

                    </select>
                  </div>
                </div>
                <br>

                <div class="form-group">
                  <div class="col-sm-12 text-right ">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" onclick="alert('ระบบได้บันทึกข้อมูลของคุณเเล้ว')">
                      <span class="glyphicon glyphicon-plus"></span> เพิ่มสินค้า
                    </button>
                  </div>
                </div>
              </div>
            </form>
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