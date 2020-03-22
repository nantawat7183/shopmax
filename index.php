<?php include "connectdb.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>ShopVegetable &mdash; Vegetable Shop Online</title>
  <link rel="shortcut icon" type="image/x-icon" href="images/logo.ico" />
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
      <?php include "Menu.php"; ?> 
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="images/sli1.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/sli2.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/sli3.jpg" alt="Third slide">
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
            <div class="col-md-12 mb-0"><a href="index.php">หน้าหลัก</a></div>
            </div>
          </div>
        </div>




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

    


    
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="title-section mb-5 col-12">
            <h2 class="text-uppercase">สินค้า</h2>
          </div>
        </div>
        <div class="row">

          <?php 

          $strSQL = "SELECT * FROM product ";
          if(isset($_GET['key'])){
            $strSQL=$strSQL."where Pro_name LIKE '%".$_GET['key']."%'";
          }
          // echo $strSQL; 

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

              <div class="col-lg-4 col-md-6 item-entry mb-4">
                <a href="test.php?Pro_id=<?php echo $Pro_id ?>" class="product-item md-height bg-gray d-block">
                  <img src="<?php echo $Pro_img ?>" alt="Image" class="img-fluid">
                </a>
                <h2 class="item-title">รหัสสินค้า:<?php echo $Pro_id ?></a></h2>
                <h2 class="item-title"><?php echo $Pro_name ?></a></h2>
                 <h2 class="item-title">น้ำหนัก 500กรัม</a></h2>
                <strong class="item-price">ราคา: <?php echo $Pro_price ?>บาท/100กรัม</strong>
                <div class="star-rating">
                  <span class="icon-star2 text-warning"></span>
                  <span class="icon-star2 text-warning"></span>
                  <span class="icon-star2 text-warning"></span>
                  <span class="icon-star2 text-warning"></span>
                  <span class="icon-star2 text-warning"></span>
                </div>
                <span>
                  <a href="detail_index.php?Pro_id=<?php echo $Pro_id ?>" class="btn btn-black rounded-0  bg-danger">ดูสินค้า</a>
                </span>
              </div>
              <?php 
            }}
            ?>
          </div>
        </div>

      <!--   <div class="site-section">
          <div class="container">
            <div class="title-section mb-12">
              <h2 class="text-uppercase"><span class="d-block">ชุดผัก</span></h2>
            </div>
            <br><br>
            <div class="row align-items-stretch">
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



                  <div class="col-lg-3 col-md-6 item-entry mb-3">
                    <a href="test.php?Pro_id=<?php echo $Pro_id ?>" class="product-item md-height bg-gray d-block">
                      <img src="<?php echo $Pro_img ?>" alt="Image" class="img-fluid">
                    </a>
                    <h2 class="item-title">รหัสสินค้า:<?php echo $Pro_id ?></a></h2>
                    <h2 class="item-title"><?php echo $Pro_name ?></a></h2>
                    <strong class="item-price">ราคา: <?php echo $Pro_price ?>บาท/500กรัม</strong>
                    <div class="star-rating">
                      <span class="icon-star2 text-warning"></span>
                      <span class="icon-star2 text-warning"></span>
                      <span class="icon-star2 text-warning"></span>
                      <span class="icon-star2 text-warning"></span>
                      <span class="icon-star2 text-warning"></span>
                    </div>
                    <span>
                      <a href="detail_index.php?Pro_id=<?php echo $Pro_id ?>" class="btn btn-black rounded-0  bg-danger">ดูสินค้า</a>
                    </span>
                  </div>



                <?php }}
                ?>
              </div>
            </div>
          </div>
 -->

          <div class="site-section" style="padding-top: 10px; padding-bottom:20px  ">
            <div class="container">
              <div class="row">
                <div class="title-section mb-5 col-12">
                  <h2 class="text-uppercase">เเพ็คเกจ</h2>
                </div>
              </div>
              <div class="row align-items-stretch ">
                <div class="col-lg-4">
                  <div class="product-item sm-height bg-gray ">
                    <a href="Pack.php?pack_size=1000" class="product-category bg-light" style=" color: #219fed";>ไซต์ <span style=" color:#808080;font-size: 15px">S</span></a>
                    <img src="images/sizeS.jpg" alt="Image" class="img-fluid">
                  </div>
                </div>
              
                <div class="col-lg-4">
                  <div class="product-item sm-height bg-gray ">
                    <a href="Pack.php?pack_size=2000" class="product-category bg-light" style=" color: #219fed";>ไซต์ <span style=" color:#808080;font-size: 15px">M</span></a>
                    <img src="images/pack1.png" alt="Image" class="img-fluid">
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="product-item sm-height bg-gray ">
                    <a href="Pack.php?pack_size=4000" class="product-category bg-light" style=" color: #219fed";>ไซต์ <span style=" color:#808080;font-size: 15px">L</span></a>
                    <img src="images/pack2.png" alt="Image" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>







          <div class="site-section" style="padding-top: 10px; padding-bottom:20px  ">
            <div class="container">
              <div class="row">
                <div class="title-section mb-5 col-12">
                  <h2 class="text-uppercase">ความรู้สนใจ</h2>
                </div>
              </div>

              <div class="row align-items-stretch ">
                <div class="col-lg-6">
                  <div class="product-item sm-height bg-gray ">
                    <a href="menu_pro.php" class="product-category bg-light" style=" color: #FFA500";>Food <span style=" color:#808080">เมนูจากผัก</span></a>
                    <img src="images/j1.jpg" alt="Image" class="img-fluid">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="product-item sm-height bg-gray ">
                    <a href="Property.php" class="product-category bg-light" style=" color: #FFA500";>Prototype <span style=" color:#808080">คุณสมบัติ</span></a>
                    <img src="images/vegan.jpg" alt="Image" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>







          <div class="row">

           <div class="col-md-2 column productbox">               
            <div class="producttitle"></div>
          </div>





        </div>
      </div>
    </div>
  </div>
</div>
<!-- </div> -->
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