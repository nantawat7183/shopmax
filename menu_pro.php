<?php include "connectdb.php"; ?>

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
   <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
/* Popup container - can be anything you want */
.popup {
  position: relative;
  display: inline-block;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* The actual popup */
.popup .popuptext {
  visibility: hidden;
  width: 160px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 8px 0;
  position: absolute;
  z-index: 1;
  bottom: 125%;
  left: 50%;
  margin-left: -80px;
}

/* Popup arrow */
.popup .popuptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
.popup .show {
  visibility: visible;
  -webkit-animation: fadeIn 1s;
  animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
  from {opacity: 0;} 
  to {opacity: 1;}
}

@keyframes fadeIn {
  from {opacity: 0;}
  to {opacity:1 ;}
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


     <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">หน้าหลัก</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">ทำอาหาร</strong></div>
        </div>
      </div>
    </div>
      
   


    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="title-section mb-5 col-12">
            <h2 class="text-uppercase">เมนูอาหารจากผัก</h2>
          </div>
        </div>
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
            <div class="col-lg-4 col-md-6 item-entry mb-4">
            <a  href="detail_menu_pro.php?Pro_id=<?php echo $Pro_id ?>" class="product-item md-height bg-gray d-block">
              <div class="view overlay">
              <img src="<?php echo $Pro_img  ?>" alt="Image" class="img-fluid  ">
              <div class="mask flex-center rgba-green-slight">
              </div>
            </div>
            </a>
            <center><h2 class="item-title "><a href="#"><?php echo $Pro_name ?></a></h2></center>
           </div>

          
           
            
           
          
            
            
             <?php 
           }}
           ?>
          
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