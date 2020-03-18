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
            <div class="col-md-12 mb-0"><strong class="text-black">เเก้ไขรายการอาหาร</strong> <span class="mx-2 mb-0">/</span> </div>
          </div>
        </div>
      </div>
      
      


      <div class="site-section" >
        <div class="container" style="margin-left: 20px;">
          <div class="row">
            <div class="title-section mb-5 col-12">
              <h2 class="text-uppercase">เเก้ไขรายการอาหาร</h2>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <a href="add_menu.php" class="btn btn-primary btn-sm px-4 py-2" style="font-size: 18px;margin-left: 110px">เพิ่มรายการอาหาร</a>
        </div>




        <div class="row">
          <div class="site-section pt-2" style="padding-left: 90px; padding-bottom: 8px">
            <div class="px-5">
              <div class="row mb-5" >
                <form class="col-md-12" method="post">
                  <div class="site-blocks-table">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th class="product-price">รหัสสินค้า</th>
                          <th class="product-thumbnail">รูปภาพสินค้า</th>
                          <th class="product-name">ชื่อสินค้า</th> 
                          <th class="product-price">ชื่อเมนู</th>
                          <th class="product-quantity">รูปภาพเมนู</th>
                          <th class="product-total">รหัสเมนู</th>
                          <th class="product-remove">เเก้ไข</th>
                          <th class="product-remove">ลบ</th>

                        </tr>
                      </thead>
                      <?php

                      $strSQL =  "SELECT * FROM menu INNER JOIN product ON menu.Pro_id = product.Pro_id order by Pro_name";
                      $objQuery = mysqli_query($conn, $strSQL);
                      while ($objResult = mysqli_fetch_array($objQuery)){
                        $Pro_id = $objResult["Pro_id"];
                        $Pro_name = $objResult["Pro_name"];
                        $Pro_price = $objResult["Pro_price"];
                        $Pro_amount = $objResult["Pro_amount"];
                        $Pro_detail = $objResult["Pro_detail"];
                        $Pro_property = $objResult["Pro_property"];
                        $Pro_img = $objResult["Pro_img"];
                        $Menu_id = $objResult["Menu_id"];
                        $Menu_name = $objResult["Menu_name"];
                        $Menu_img = $objResult["Menu_img"];

                        ?>
                        <tr>
                          <td  style="size: 100%">
                           <?php echo $Pro_id ?></td>
                           <td style="width: 5px;height: 10px"> <img src="<?php echo $Pro_img ?>"  alt="Image"  class="img-fluid"></td>
                           <td><?php echo $Pro_name ?></td>
                           <td><?php echo $Menu_name ?></td>
                           <td ><img src="<?php echo $Menu_img ?>" height="200" width="200px" alt="Image" class="img-fluid"></td>
                           <td><?php echo $Menu_id ?></td>
                           <td><a class="btn btn-warning " href="edit_detail_to_menu.php?Menu_id=<?php echo $Menu_id ?>">เเก้ไข</a></td>
                           <td><a href="delet_menu.php?Menu_id=<?php echo $Menu_id;?>" class="btn btn-danger height-auto btn-sm">X</a></td>
                         </tr>
                         <?php 
                       }
                       ?>
                     </tbody>

                   </table>
                 </div>
               </form>
             </div>
           </div>
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