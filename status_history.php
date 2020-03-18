<?php include "connectdb.php"; ?>
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
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
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
            <div class="col-md-12 mb-0"><a href="index.php">หน้าหลัก</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">ประวัติการสั่งซื้อ</strong></div>
          </div>
        </div>
      </div>
      <div class="site-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="title-section mb-5">
                <h2 class="h3 mb-3 text-black">สถานะสินค้า</h2>
              </div>
            </div>
            <div class="col-md-12">
              <?php include "css_status.php"; ?>
              <div class="row shop-tracking-status"> 
                <div class="col-md-12">
                  <div class="well">

                    <?php 
                    $uid = $_SESSION["ses_userid"];
                    $strSQL = "SELECT * FROM `order` WHERE UserID = '".$uid."' order by Or_date desc";
                    $objQuery = mysqli_query($conn,$strSQL);
                    $status_flag='c0';
                    $status="0";
                    if(mysqli_num_rows($objQuery)== 0){
                      echo "ไม่พบรายการสินค้า"; exit();
                    }
                    while($objResult = mysqli_fetch_array($objQuery)){
                      if($objResult['status']==0){
                        $status_flag="c0";
                        $status="ยังไม่ชำระเงิน";
                      }else if($objResult['status']==1){
                        $status_flag=" c1";
                        $status=" กำลังตรวจสอบการชำระเงิน";
                      }else if($objResult['status']==2){
                        $status_flag=" c2";

                      }else if($objResult['status']==3){
                        $status_flag=" c3";
                        $status=" กำลังรอการจัดส่ง";
                      }
                      else if($objResult['status']==4){
                        $status_flag=" c4";
                        $status=" ดำเนินการจัดส่งเเล้ว";
                      }
                      echo "<br>";
                      ?>


                      <div class="row col-md-12">
                        <div class="col-md-12">
                          <h4>รหัสสั่งซื้อ : <?php echo $objResult['Or_id'];?></h4>

                          <form style="width: 100%" action="edit_deliver_method.php?Or_id=<?php echo $objResult['Or_id'] ?>" method="post" name="updateuser" id="updateuser">
                            <div class="row">
                              <div class="col-md-2 px-0">
                                <select id="Deliver_method" name="Deliver_method" class="form-control" style="width: 150px">
                                  <option value="ส่งครั้งเดียว" <?php if($objResult['Deliver_method']=="ส่งครั้งเดียว")echo "selected"?>>ส่งครั้งเดียว</option>
                                  <option value="ส่งทุกสัปดาห์" <?php if($objResult['Deliver_method']=="ส่งทุกสัปดาห์")echo "selected"?>>ส่งทุกสัปดาห์</option>
                                  <option value="ส่งทุกเดือน" <?php if($objResult['Deliver_method']=="ส่งทุกเดือน")echo "selected"?>>ส่งทุกเดือน</option>
                                  <option value="ส่งทุกเดือน" <?php if($objResult['Deliver_method']=="ส่งทุกเดือน")echo "selected"?>>ส่งทุก3เดือน</option>
                                  <option value="ยกเลิก" <?php if($objResult['Deliver_method']=="ยกเลิก")echo "selected"?>>ยกเลิก</option>
                                </select>
                              </div>
                              <div class="col-md-1 px-0">
                               <button type="submit" class="btn btn-primary btn-sm " >บันทึก</button>
                             </div>
                           </div>
                         </form>                        
                         <h6>ที่อยู่ : <?php echo $objResult['Or_address']; ?></h6>
                         <h6>สถานะ : <?php echo  $status; ?></h6> 
                         <?php 
                         if($objResult['status']==0){ ?> 
                          <a href="payment2.php?Or_id=<?php echo $objResult['Or_id']; ?>" >ชำระเงิน</a>
                             <?php  }?>

                         <?php 
                         if($objResult['status']==4){ ?>

                          <h6> หมายเลขติดตามพัสดุ: <?php echo $objResult['Status_ems'] ?>      <a href='https://www.parcelmonitor.com/th-track-thailand-post/'>กรอกโค้ด</a></h6>

                         

                        <?php  }?>
                        <br><br>
                       
                        


                      </div>
                      <div class="col-md-2"></div>
                      <div class="col-md-8">
                        <div class="order-status" style="margin-top:50px;margin-bottom: 70px">
                          <div class="order-status-timeline">
                            <div class="order-status-timeline-completion <?php echo $status_flag;?>"></div>
                          </div>
                          <div class="image-order-status image-order-status-new active img-circle">
                            <span class="status" style="font-size: 10px">ยังไม่ชำระเงิน</span>
                            <div class="icon"></div>
                          </div> 
                          <div class="image-order-status image-order-status-active active img-circle">
                            <span class="status" style="font-size: 10px">กำลังตรวสอบชำระเงิน</span>
                            <div class="icon"></div>
                          </div>
                          <div class="image-order-status image-order-status-intransit active img-circle">
                            <span class="status" style="font-size: 10px">ชำระเงินเเล้ว</span>
                            <div class="icon"></div>
                          </div>
                          <div class="image-order-status image-order-status-delivered active img-circle">
                            <span class="status" style="font-size: 10px">รอการจัดส่ง</span>
                            <div class="icon"></div>
                          </div>
                          <div class="image-order-status image-order-status-completed active img-circle">
                            <span class="status" style="font-size: 10px">ดำเนินการจัดส่งเเล้ว</span>
                            <div class="icon"></div>
                          </div>                      
                        </div>
                      </div>
                      <div class="col-md-2"></div>
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
                       <?php                           
                     }
                     ?>
                   </table>
                   <div class="col-md-12text-right">
                    <label for="Pro_id" class="text-black">จำนวนสินค้า <span class="text-danger"></span></label>
                    <strong class="text-black"><?php echo $SubTotle ?>.รายการ</strong>
                  </div>
                  <div class="col-md-12text-right">
                    <label for="Pro_id" class="text-black">ราคารวม <span class="text-danger"></span></label>
                    <strong class="text-black"><?php echo $Total ?>.บาท</strong>
                  </div>
                </div>
              </div>
            </div>
            <hr>
          <?php } ?>                 
        </div>
      </div>
    </div>
  </div>
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