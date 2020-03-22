 <?php include "connectdb.php"; ?>
 <?php include "check_session.php"; ?>


 <!DOCTYPE html>
 <html lang="en">
 <head>
  <title>ShopMax &mdash; Colorlib e-Commerce Template</title>
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
            <div class="col-md-12 mb-0"><a href="index.php">หน้าหลัก</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">ตะกร้าสินค้า</strong></div>
          </div>
        </div>
      </div>

      <?php
      if(!isset($_SESSION["intLine"]))
        {?> 
          <div class="text-center" style="margin-top: 200px">
            <b style="font-size: 30px">ไม่มีสินค้าในตะกร้า</b>
            <br>
            <a href='shop.php'>เลือกสินค้า</a></center>

          </div>
          <?php
          exit();
        }
        ?> 

        <div class="site-section">
          <div class="container">
            <div class="row mb-5">
              <form class="col-md-12" method="post">
                <div class="site-blocks-table">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th class="product-price">รหัสสินค้า</th>
                        <th class="product-thumbnail">รูปภาพ</th>
                        <th class="product-name">ชื่อสินค้า</th> 
                        <th class="product-price">ราคา</th>
                        <th class="product-price">น้ำหนัก</th>
                        <th class="product-quantity">จำนวน</th>
                        <th class="product-total">ราคารวม</th>
                        <th class="product-remove">ลบสินค้า</th>
                      </tr>
                    </thead>
                    <?php
                    $Total = 0;
                    $SumTotal = 0;
                    $SubTotle = 0; 

                    for($i=1;$i<=(int)$_SESSION["intLine"];$i++){
                      if($_SESSION["strPro_id"][$i] != ""){
                        $strSQL = "SELECT * FROM product  WHERE Pro_id = '".$_SESSION["strPro_id"][$i]."' ";
                        $objQuery = mysqli_query($conn,$strSQL)  or die(mysql_error());
                        $objResult = mysqli_fetch_array($objQuery);
                        $Total = $_SESSION["strQty"][$i] * ($objResult["Pro_price"] * ($_SESSION["strWeight"][$i] / 100));
                        $SumTotal = $SumTotal + $Total;
                        $SubTotle = $SubTotle + $_SESSION["strQty"][$i];

                        ?>
                        <tr>
                          <td>
                            <?php echo $_SESSION["strPro_id"][$i];?>
                          </td>
                          <td >
                           <img src="<?php echo $objResult["Pro_img"];?>" alt="Image" class="img-fluid">
                         </td>
                         <td >
                           <?php echo $objResult["Pro_name"];?>
                         </td>
                         <td>
                          <?php
                          echo $objResult["Pro_price"];
                          if($objResult["Pro_type"]==0){
                            echo " บาท/100กรัม";
                          }else{ echo "บาท/ชุด";}
                          ?>
                        </td>
                        <td><?=$_SESSION["strWeight"][$i]?></td>
                        <td><?php echo $_SESSION["strQty"][$i];?></td>
                        <td><?php echo number_format($Total,2);?></td>
                        <td><a href="delete.php?Line=<?php echo $i;?>" class="btn btn-primary height-auto btn-sm">X</a></td>
                      </tr>
                    </tbody>

                    <?php
                  }
                }
                ?>
              </table>
            </div>
          </form>
        </div>

        <?php  
        $ses_userid = $_SESSION["ses_userid"];

        $strSQL = "SELECT * FROM user WHERE UserID= $ses_userid";
        $objQuery = mysqli_query($conn, $strSQL);
        while ($objResult = mysqli_fetch_array($objQuery)){

          $f_name = $objResult["f_name"];
          $l_name = $objResult["l_name"];
          $addess = $objResult["addess"];
          $email = $objResult["email"];
          $U_tel = $objResult["U_tel"];
        }

        ?>

        <div class="row">
          <div class="col-md-6">
            <div class="row mb-0">
              <div class="col-md-6 ">
                <div class="  btn-sm "></div>
                <div class="row">
                  <div class="col-md-12 text-left pl-5 mb-2">
                    <h3 class="text-black h4 text-uppercase">ที่อยู่ในการจัดส่ง</h3>
                  </div>
                </div>
              </div>
              <div class="col-md-6">

              </div>
            </div>

            <div class="row">
              <form style="width: 100%" action="save_order.php" method="post" name="updateuser" id="updateuser">
                <div class="col-md-12">
                  <div class="p-3 p-lg-5 border">
                    <div class="form-group row">
                      <div class="col-md-12">
                        <label for="c_fname" class="text-black">ชื่อ-นาามสกุล <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="textName" name="textName" value=<?php echo  $f_name."".$l_name ?> >
                      </div>                
                    </div>
                    <div class="form-group row">
                      <div class="col-md-12">
                        <label for="c_message" class="text-black">ที่อยู่ </label>
                        <textarea name="textAddress" id="textAddress"  cols="10" rows="2" class="form-control"><?php echo $addess ?></textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-md-12">
                        <label for="c_email" class="text-black">อีเมล์ <span class="text-danger">*</span></label>
                        <input type="email" class="form-control" id="textEmail" name="textEmail" value=<?php echo $email ?> >
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-md-12">
                        <label for="c_email" class="text-black">หมายเลขโทรศัพท์ <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="textU_tel" name="textU_tel" value=<?php echo $U_tel ?> >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <hr>
            <div class="col-md-6 pl-3">
              <div class="row justify-content-end">
                <div class="col-md-7">
                  <div class="row">
                    <div class="col-md-12 text-left border-bottom mb-5">
                      <h3 class="text-black h4 text-uppercase">ยอดรวม</h3>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-md-6">
                      <span class="text-black">จำนวนสินค้า</span>
                    </div>
                    <div class="col-md-6 text-right">
                      <strong class="text-black"><?php echo number_format($SubTotle);?>.รายการ</strong>
                    </div>
                  </div>
                  <div class="row mb-5">
                    <div class="col-md-6">
                      <span class="text-black">ราคาสุทธิ</span>
                    </div>
                    <div class="col-md-6 text-right">
                      <strong class="text-black"><?php echo $SumTotal;?> บาท</strong>
                    </div>
                  </div>


                  <div class="row">

                    <div class="col-md-6">
                      <select id="Deliver_method" name="Deliver_method" class="form-control">
                        <option value="ส่งครั้งเดียว" >ส่งครั้งเดียว</option>
                        <option value="ส่งทุกสัปดาห์">ส่งทุกสัปดาห์</option>
                        <option value="ส่งทุกเดือน">ส่งทุกเดือน</option>
                        <option value="ส่งทุกเดือน">ส่งทุก3เดือน</option>
                      </select>
                    </div>
                    <div class="col-md-6">
                      <?php if(isset($_SESSION["intLine"]) && $_SESSION["intLine"]!=0){?>
                        <input type="submit" name="updateuser" id="updateuser" class="btn btn-primary btn-lg " value="ยืนยันสินค้า">
                      <?php }else{?>
                        <span class="btn btn-danger btn-lg">ไม่มีสินค้าในตะกร้า</span>
                      <?php }?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
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