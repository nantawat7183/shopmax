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
            <div class="col-md-12 mb-0"><strong>เเก้ไขสินค้า</strong> <span class="mx-2 mb-0">/</span> </div>
          </div>
        </div>
      </div>
      </div>


      <div class="site-section" >
        <div class="container">
          <div class="row">
            <div class="title-section col-12">
              <h2 class="text-uppercase">เเก้ไขสินค้า</h2>
            </div>
          </div>
          <div class="row">
           <div class="site-section bt-2" style="width: 100%">
            <div class="container">
              <div class="row ">
                <div class="col-md-12">
                  <form class="col-md-12" method="post">
                    <div class="site-blocks-table">
                      <div class="col-md-6">
                      <a href="add_to_product.php" class="btn btn-primary btn-sm px-4 " style="margin-top: 10px;font-size: 18px ">เพิ่มสินค้า</a>
                    </div><br>
                      <table class="table table-bordered" width="100%">
                        <thead>
                          <tr>
                            <th class="product-price" >รหัสสินค้า</th>
                            <th class="product-thumbnail">ชื่อสินค้า</th>
                            <th class="product-name">รูปภาพ</th> 
                            <th class="product-price">จำนวนสินค้า</th>
                             <th class="product-price">น้ำหนัก</th>
                            <th class="product-price">เเก้ไข</th>
                            <th class="product-quantity">ลบ</th>

                          </tr>
                        </thead>



                        <?php

                        $sql1 = "SELECT * FROM product where Pro_type=0 ";
                        $result = mysqli_query($conn,$sql1);
                        while ($row = mysqli_fetch_row($result)) {

                         echo "  <td>" . $row['0'] . "</td>";
                         echo "  <td>" . $row['1'] . "</td>";
                         echo "  <td><img style='height: 50px; width: 50px; margin:0px;'class='img-product' src=" . " ' " . $row['6'] . " ' " . "</td>";
                // echo "  <td>" . $row['2'] ."บาท"." </td>";
                         echo "  <td>" . $row['3'] . "</td>";
                          echo "  <td>" . $row['8'] . ".กรัม</td>";
                         echo "  <td><a  class='btn btn-warning' href='Edit2_product.php?Pro_id=".$row['0']."'>เเก้ไข</a></td>";
                         echo "  <td><a  class='btn bg-danger' href='delete_to_product.php?Pro_id=".$row['0']."'>ลบ</a></button></td>";
                         echo "</tr>";

                       }
                       echo "</table>";
                       ?>
                     </table>
                     


                  </div>
                </form>
              </div>
            </div>
          </div>
        </div></div></div></div></div>





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