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
    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

    <style type="text/css">
      #snackbar {
        visibility: hidden;
        min-width: 250px;
        margin-left: -125px;
        background-color: #333;
        color: #fff;
        text-align: center;
        border-radius: 2px;
        padding: 16px;
        position: fixed;
        z-index: 1;
        left: 50%;
        bottom: 30px;
        font-size: 17px;
      }

      #snackbar.show {
        visibility: visible;
        -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
        animation: fadein 0.5s, fadeout 0.5s 2.5s;
      }

      @-webkit-keyframes fadein {
        from {bottom: 0; opacity: 0;} 
        to {bottom: 30px; opacity: 1;}
      }

      @keyframes fadein {
        from {bottom: 0; opacity: 0;}
        to {bottom: 30px; opacity: 1;}
      }

      @-webkit-keyframes fadeout {
        from {bottom: 30px; opacity: 1;} 
        to {bottom: 0; opacity: 0;}
      }

      @keyframes fadeout {
        from {bottom: 30px; opacity: 1;}
        to {bottom: 0; opacity: 0;}
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
      <!-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
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
      </div> -->




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
                        <li><a href="javascript:void(0)" onclick="add_cart('<?php echo $objResult["Pro_id"];?>')" data-tip="เพิ่มในตะกร้า" ><i class="fa fa-shopping-bag "></i></a> </li>
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



            <!-- <div class="title-section mb-5 col-12" style="margin-top: 50px ">
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
                          <div class="price text-secondary "><?php echo $Pro_price  ?>บาท /กิโลกรัม -->
                           <!--  <span>$14.00</span> -->
                         <!-- </div>
                       </div>
                       <ul class="social "> 
                        <?php 
                        if (isset($_SESSION["ses_userid"])) {?>
                          <li><a href="javascript:void(0)" onclick="add_cart('<?=$objResult["Pro_id"];?>')" data-tip="เพิ่มในตะกร้า"><i class="fa fa-shopping-bag "></i></a></li>
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
              ?> -->


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




  <?php include("footter.php");?>
</div>

<div id="snackbar">เพิ่มสินค้าสำเร็จ</div>

<script type="text/javascript">
  function add_cart(pro_id){
    url="order.php?Pro_id=<?php echo $objResult["Pro_id"];?>";
    $.ajax({
      url: url,
      type: 'GET',
      data: {'Pro_id':pro_id},
      success: function(res) {
        pro_qry=$('#cart_qty').html();

        // location.reload();
        $('#cart_qty').html(parseInt(pro_qry)+1);
        toast();
      }
    });
  }

  function toast() {
    var x = document.getElementById("snackbar");
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
  }
</script>
</body>
</html>