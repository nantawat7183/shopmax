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

  <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
  <!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script> -->
  <!-- <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
  
  <!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
  <!-- <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script> -->
  <!-- <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
  
  <style type="text/css">
    body{ 
      margin-top:40px; 
    }
    .stepwizard-step p {
      margin-top: 10px;
    }

    .stepwizard-row {
      display: table-row;
    }

    .stepwizard {
      display: table;
      width: 100%;
      position: relative;
    }

    .stepwizard-step button[disabled] {
      opacity: 1 !important;
      filter: alpha(opacity=100) !important;
    }

    .stepwizard-row:before {
      top: 14px;
      bottom: 0;
      position: absolute;
      content: " ";
      width: 100%;
      height: 1px;
      background-color: #ccc;
      z-order: 0;

    }

    .stepwizard-step {
      display: table-cell;
      text-align: center;
      position: relative;
    }
    .btn
    {
      border-radius: 0px;
    }
    .btn-circle {
     width: 56px;
     height: 56px;
     text-align: center;
     padding: 12px 0;
     font-size: 20px;
     line-height: 1.428571429;
     border-radius: 35px;
     margin-top: -14px;
     border: solid 3px #ccc !important;
     opacity:1 !important;
     -webkit-box-shadow:inset 0px 0px 0px 3px #fff !important; 
     -moz-box-shadow:inset 0px 0px 0px 3px #fff !important;
     -o-box-shadow:inset 0px 0px 0px 3px #fff !important;
     -ms-box-shadow:inset 0px 0px 0px 3px #fff !important; 
     box-shadow:inset 0px 0px 0px 3px #fff !important;
     backgournd-color:#428bca;
   }

   .status{
    font-size: 0.2rem;
    /*width: 80px !important;*/
  }
</style>

</head>
<body >

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
            <div class="col-md-12 mb-0"><a href="index.html">รายการสั่งซื้อ</a> <span class="mx-2 mb-0">/</span> </div>
          </div>
        </div>
      </div>
      <div class="site-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="title-section mb-2">
                <h2 class="h3 mb-3 text-black">รายการสั่งซื้อ</h2>
              </div>
            </div>
            <div class="col-md-5" style="margin:auto;">
              <form action="" method="get">
                <div class="input-group mb-3">
                  <input type="date" class="form-control" name="order_date" id="order_date" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2" value="<?=(!empty($_GET['order_date'])) ? $_GET['order_date'] : ''?>">
                  <div class="input-group-append">
                    <button class="btn btn-outline-secondary btn-sm " type="submit" id="button-addon2">Button</button>
                  </div>
                </div>
              </form>
            </div>
            <div class="col-md-12">
              <?php include "css_status.php"; ?>
              <div class="row shop-tracking-status"> 
                <div class="col-md-12">
                  <div class="well">

                    <?php 
                    $uid = $_SESSION["ses_userid"];
                    $strSQL = "SELECT * FROM `order` ";
                    if(!empty($_GET['order_date'])){
                      $start_date=$_GET['order_date']." 00:00:00";
                      $end_date=$_GET['order_date']." 23:59:59";
                      // echo $_GET['order_date'];
                      $strSQL=$strSQL."where Or_date >'".$start_date."' and Or_date < '".$end_date."'";
                    }
                    $strSQL=$strSQL."order by Or_date desc";
                    // echo $strSQL;

                    $objQuery = mysqli_query($conn,$strSQL);
                    $status_flag='c0';
                    if(mysqli_num_rows($objQuery)== 0){
                      echo "ไม่พบรายการสินค้า"; exit();
                    }
                    echo "<br>";
                    ?>

                    <!-- //////////////////////////////////////////// -->
                    <div class="accordion" id="accordionExample">
                      <?php 
                      $indexI=0;
                      while($objResult = mysqli_fetch_array($objQuery)){
                        $indexI++;
                        if($objResult['status']==0){
                          $status_flag="c0";
                        }else if($objResult['status']==1){
                          $status_flag=" c1";
                        }else if($objResult['status']==2){
                          $status_flag=" c2";
                        }else if($objResult['status']==3){
                          $status_flag=" c3";
                        }
                        else if($objResult['status']==4){
                          $status_flag=" c4";
                        }
                        ?>
                        <div class="card">
                          <div class="card-header" id="headingOne">
                            <div class="mb-0 row" style="">
                              <div class="col-md-9">
                                <a href="javascript:void(0)" class="" data-toggle="collapse" data-target="#collapseOne<?=$indexI?>" aria-expanded="false" aria-controls="collapseOne<?=$indexI?>">
                                  <h6>รหัสสั่งซื้อ : <?php echo $objResult['Or_id'];?> </h6>
                                </a>
                              </div>
                              <div class="col-md-3">
                                <span>
                                 สถานะ:  <?php if($objResult['status']==0){
                                  echo"ยังไม่ชำระเงิน";
                                }else if($objResult['status']==1){
                                  echo" กำลังตรวจสอบการชำระเงิน";
                                }else if($objResult['status']==2){
                                  echo" ชำระเงินเเล้ว";
                                }else if($objResult['status']==3){
                                  echo" กำลังรอการจัดส่ง";
                                }
                                else if($objResult['status']==4){
                                  echo" ดำเนินการจัดส่งเเล้ว";
                                } ?>
                              </span>
                            </div>
                          </div>
                        </div>
                        <div id="collapseOne<?=$indexI?>" class="collapse" aria-labelledby="headingOne<?=$indexI?>" data-parent="#accordionExample">
                          <!-- body -->
                          <div class="card-body">
                            <div class="row col-md-12">
                              <div class="col-md-10  "  >                               
                                <h6>การจัดส่ง:  <?php echo $objResult['Deliver_method'];?></h6>
                                <h6>ชื่อ:  <?php echo $objResult['Or_name'];?></h6>
                                <h6>ที่อยู่:  <?php echo $objResult['Or_address'];?></h6>
                              </div>
                              <div class="col-md-2 ">
                                <?php
                                $strSQL_payment =  "SELECT * FROM payment where Or_id = ".$objResult['Or_id'];
                                $objQuery_payment = mysqli_query($conn, $strSQL_payment);
                                $result_payment=mysqli_fetch_array($objQuery_payment);
                                if($objResult['status']!= 0){
                                  ?>
                                  <a href="edit_to_status.php?Pay_id=<?=$result_payment['Pay_id']?>&Or_id=<?=$objResult['Or_id']?>" class="btn btn-sm btn-outline-primary">การชำระเงิน</a>
                                <?php } ?>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="site-blocks-table">
                                <table class="table table-bordered table-hover">
                                  <thead>
                                    <tr style="padding: 2px">
                                      <th class="product-thumbnail">รูปภาพ</th>
                                      <th class="product-name">ชื่อสินค้า</th> 
                                      <th class="product-price">ราคา</th>
                                      <th class="product-quantity">จำนวน</th>
                                    </tr>
                                  </thead>
                                  <?php
                                  $Total = 0;
                                  $SumTotal = 0;
                                  $SubTotle = 0; 
                                  $strSQL_productlist = "SELECT * FROM `order_detail` WHERE Or_id=".$objResult['Or_id'];
                                  $objQuery_productlist = mysqli_query($conn,$strSQL_productlist)  or die(mysql_error());
                                  while($objResult_productlist = mysqli_fetch_array($objQuery_productlist)){
                                    $strSQL_getProduct = "SELECT * FROM `product` WHERE Pro_id=".$objResult_productlist['Pro_id'];
                                    $objQuery_getProduct = mysqli_query($conn,$strSQL_getProduct)  or die(mysql_error());
                                    $objResult_getProduct = mysqli_fetch_array($objQuery_getProduct);
                                    $Total =  $Total+($objResult_productlist["Qty"] * $objResult_getProduct["Pro_price"]);
                                    $SubTotle = $SubTotle +  $objResult_productlist["Qty"];
                                    ?>
                                    <tr>
                                      <td >
                                       <img src="<?php echo $objResult_getProduct["Pro_img"];?>" alt="Image" class="img-fluid" width="50px">
                                     </td>
                                     <td >
                                       <?php echo $objResult_getProduct["Pro_name"];?>
                                     </td>
                                     <td> <?php echo $objResult_getProduct["Pro_price"];?></td>
                                     <td><?php echo $objResult_productlist["Qty"];?></td>
                                   </td>
                                 </tr>
                               </tbody>
                             <?php }?>
                           </table> 
                           <div class="col-md-12text-right">
                            <label for="Pro_id" class="text-black">จำนวนสินค้า <span class="text-danger"></span></label>
                            <strong class="text-black"><?php echo $SubTotle ?>กิโลกรัม</strong>
                          </div>
                          <div class="col-md-12text-right">
                            <label for="Pro_id" class="text-black">ราคารวม <span class="text-danger"></span></label>
                            <strong class="text-black"><?php echo $Total ?>กิโลกรัม</strong>
                          </div>
                        </div>
                      </div>
                    </div>                            
                    <!-- end body -->
                  </div>
                </div>
              <?php }?> 
            </div>
            <!-- //////////////////////////////////////////// -->
            <div class="text-center mt-3"><a class="" href="order_show_addmin.php" >ดูทั้งหมด</a></div>
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