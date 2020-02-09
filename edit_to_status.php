<?php include "connectdb.php"; ?>
<?php include "check_session.php"; ?>
<?php 

$Pay_id = $_GET['Pay_id'];
$strSQL = "SELECT * FROM payment WHERE Pay_id= $Pay_id";
$objQuery = mysqli_query($conn, $strSQL);
while ($objResult = mysqli_fetch_array($objQuery)){
  $pay_id = $objResult["Pay_id"];
  $Pay_date = $objResult["Pay_date"];
  $Pay_img = $objResult["Pay_img"];
  $Or_id = $objResult["Or_id"];
  $Pay_bank = $objResult["Pay_bank"];

}
?>



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
            <div class="col-md-12 mb-0"><a href="index.html">เเก้ไขติดตามสินค้า</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">เเก้ไข</strong></div>
          </div>
        </div>
      </div>
      

      <div class="site-section">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <h2 class="h3 mb-3 text-black">เเก้ไข</h2>
            </div>
            <div class="col-md-8" style="margin-left:150px"   >



             <div class="p-3 p-lg-5 border">
              <div class="form-group row">
                <div class="col-md-8">


                  <label for="Pro_id" class="text-black">รหัสการสั่งซื้อ:<?php echo $Or_id ?> <span class="text-danger"></span></label><br>
                  <label for="Pro_id" class="text-black">ชำระเงินบัญชี:<?php echo $Pay_bank ?> <span class="text-danger"></span></label><br>

                  <label for="Pro_id" class="text-black">วันที่ในการชำระเงิน <span class="text-danger"></span></label>
                  <h4><?php echo $Pay_date?></h4>
                </div>
              </div><br>
              <div class="row">
                <div class="col-md-8" style="margin-left:100px">
                 <center> <a> <img src="<?php echo $Pay_img ?>" alt="Image" class="img-fluid" width="250" height="250"  ></a></center><br>
               </div>
             </div>
            <!--  <span>1=กำลังตรวจสอบการชำระเงิน</span><br>
              <span>2=ชำระเงินเเล้ว</span><br>
               <span>3=กำลังรอการจัดส่ง</span><br>
               <span>4=ดำเนินการจัดส่งเเล้ว</span><br><br>-->

               <?php 
               $Or_id = $_GET['Or_id'];
               $strSQL = "SELECT * FROM `order` WHERE Or_id= $Or_id";
               $objQuery = mysqli_query($conn, $strSQL);  
               $status="0";
               if ($objResult = mysqli_fetch_array($objQuery)){
                 if($objResult['status']==0){
                  $status="ยังไม่ชำระเงิน";
                }else if($objResult['status']==1){
                  $status=" กำลังตรวจสอบการชำระเงิน";
                }else if($objResult['status']==2){
                  $status=" ชำระเงินเเล้ว";
                }else if($objResult['status']==3){
                  $status=" กำลังรอการจัดส่ง";
                }
                else if($objResult['status']==4){
                  $status=" ดำเนินการจัดส่งเเล้ว";
                }
                $Or_id = $objResult["Or_id"]; 



              } ?>
              <label>การส่ง:</label>
              <span><?php  echo $objResult['Deliver_method'] ?></span><br>  
              <label>สถานะ:</label>
              <span><?php  echo $status ?></span>
              <br>




              <form action="edit_to_edit_status.php?Or_id=<?php echo $Or_id ?>" method="post"> 

                <input type="hidden" class="form-control" id="Or_id" name="Or_id" value=" <?php echo $Or_id ?>" >

                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="Pro_id" class="text-black">เเก้ไขสถานะ <span class="text-danger">*</span></label>
                    <select id="status" name="status" class="form-control" >
                      <option value="0" <?php if($objResult['status']=="0")echo "selected"?> >ยังไม่ชำระเงิน</option>
                      <option value="1" <?php if($objResult['status']=="1")echo "selected"?> >กำลังตรวจสอบการชำระเงิน</option>
                      <option value="2" <?php if($objResult['status']=="2")echo "selected"?>>ชำระเงินเเล้ว</option>
                      <option value="3" <?php if($objResult['status']=="3")echo "selected"?>>กำลังรอการจัดส่ง</option>
                      <option value="4" <?php if($objResult['status']=="4")echo "selected"?>>ดำเนินการจัดส่งเเล้ว</option>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="Pro_id" class="text-black">หมายเลขติดตามพัสดุ <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="Status_ems" name="Status_ems" value="">
                  </div>
                  </div>
                    <br>
                  <br>

                  <div class="form-group row">
                    <div class="col-lg-4">
                     <input type="submit"  class="btn btn-primary btn-lg btn-block" style="margin-left:200px" value="เเก้ไขสถานะ" >
                   </div>
                 </div>
               </div>
               <?php  ?>
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