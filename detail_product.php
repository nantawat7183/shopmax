<?php include "connectdb.php";?>
<?php include "check_session.php"; ?>
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
    


   <form action="addprodect.php" method="post">
    <div class="site-blocks-cover inner-page" data-aos="fade">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto order-md-2 align-self-start">

            <div class="site-block-cover-content">
            <h2 class="sub-title">#New Shop Open now-2019</h2>
            <h1 id="Pro_name" name="Pro_name">Vegetables</h1>
            <p><a href="shop.php" class="btn btn-black rounded-0" >Add Product</a></p>
            <p><a href="shop.php" class="btn btn-black rounded-0">Edit Product</a></p>
            </div>
          </div>
          <div class="col-md-6 order-1 align-self-center">
            <img src="images/salad.png" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </form>
    </div>

    <div class="custom-border-bottom py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Shop</strong></div>
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
        
      </div>
    </div>


      <div>
           
             <img src="<?php echo $Pro_img ?>" alt="Image" class="img-fluid" width="320px" style="margin-left: 15%; float: left;">
            </div>

              <span class="card">

                <h1><?php echo $Pro_name ?></h1>
                <p class="price"><?php echo $Pro_price ?> บาท/1กิโลกรัม</p>
                <p><?php echo  $Pro_detail ?>.</p>
                <div  class="row">            
                     <div class="col-4">             
                        <div class="input-group mb-3" style="max-width: 120px;" >
                          <div class="input-group-prepend" >
                            <button class="btn btn-outline-primary js-btn-minus bg-danger" type="button" ;>&minus;</button>
                          </div>
                          <input type="text" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon" ;>
                          <div class="input-group-append">
                            <button class="btn btn-outline-primary js-btn-plus bg-danger" type="button">&plus;</button>
                          </div>
                        </div>
                      </div>
                     <div class="col-8 ">
                        <button ></button>
                    </div>
            

             
                </div>

               
              </span>


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