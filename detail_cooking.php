<?php include "connectdb.php";?>

<?php 
$Menu_id = $_GET['Menu_id'];
$strSQL = "SELECT * FROM Menu WHERE Menu_id= $Menu_id";
$objQuery = mysqli_query($conn, $strSQL);
while ($objResult = mysqli_fetch_array($objQuery)){

  $Menu_id = $objResult["Menu_id"];
  $Menu_name = $objResult["Menu_name"];
  $Menu_ingredients = $objResult["Menu_ingredients"];
  $Menu_cook = $objResult["Menu_cook"];
  $Menu_img = $objResult["Menu_img"];



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
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link href="http://cdn.shopify.com/s/files/1/0067/5617/1846/t/2/assets/timber.scss.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css" rel="stylesheet" type="text/css" media="all" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.css" rel="stylesheet" type="text/css"/>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/elevatezoom/3.0.8/jquery.elevatezoom.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

    





    
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







        <div class="custom-border-bottom py-3">
          <div class="container">
            <div class="row">
              <div class="col-md-12 mb-0"><a href="index.php">หน้าหลัก</a> <span class="mx-2 mb-0">/</span> <a href="menu_pro.php">ทำอาหาร</a><span class="mx-2 mb-0">/</span> <strong class="text-black">รายละเอียด</strong></div>
            </div>
          </div>
        </div>




        <div class="site-section">
          <div class="container">
            <div class="row">
              <div class="title-section mb-5 col-12">
                <h2 class="text-uppercase"><?php echo $Menu_name ?></h2>
              </div>
            </div>

          </div>
        </div>


        <div id="shopify-section-product-template" class="shopify-section">
          <div class="single-product-area mt-80 mb-80">
            <div class="container">
              <div class="row">
                <div class="col-md-5">
                  <div class="product-details-large" id="ProductPhoto">
                    <img  class="product-zoom" data-image-id="" alt="12. Aliexpress dropshipping by oberlo" data-zoom-image="http://cdn.shopify.com/s/files/1/0067/5617/1846/products/36_1024x1024.jpg?v=1544416552" src="<?php echo $Menu_img ?>">

                  </div>
                  <div id="ProductThumbs" class="product-thumbnail owl-carousel">
                    <a class="product-single__thumbnail active" href="http://cdn.shopify.com/s/files/1/0067/5617/1846/products/36_1024x1024.jpg?v=1544416552" data-image="http://cdn.shopify.com/s/files/1/0067/5617/1846/products/36_1024x1024.jpg?v=1544416552" data-zoom-image="http://cdn.shopify.com/s/files/1/0067/5617/1846/products/36_1024x1024.jpg?v=1544416552" data-image-id="6995357106246">
                    </a>


                  </div>
                </div>



                <div class="col-md-7">
                  <div class="single-product-content">
                    <form method="post" id="AddToCartForm" accept-charset="UTF-8" class="shopify-product-form" enctype="multipart/form-data">
                      <input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="✓" />
                      <div class="product-details">
                        <h1 class="single-product-name"><?php echo $Menu_name ?></h1>

                        <div class="list-group">

                         <div class="product-details">
                          <h3 class="single-product-name text-secondary">ส่วนผสม</h3>
                          <h5 class="single-product-name text-muted"><?php echo $Menu_ingredients ?></h5><br>

                          <div class="product-details">
                            <h3 class="single-product-name text-secondary">วิธีทำ<?php echo $Menu_name ?></h3>
                            <h5 class="single-product-name text-muted"><?php echo $Menu_cook ?></h5>








                          </div>                                                        
                        </div>
                      </form> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
     
        </div>
      </div>
<br>
<br>

            <?php include("footter.php");?>
          </div>
        </body>
        </html>


