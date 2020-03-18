<?php include "connectdb.php";?>
<?php include "check_session.php"; ?>

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


        <div class="bg-light py-3">
          <div class="container">
            <div class="row">
              <div class="col-md-12 mb-0"><a href="index.html">หน้าหลัก</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">ชำระเงิน</strong></div>
            </div>
          </div>
        </div>

        <?php 
        $strSQL = "SELECT * FROM user WHERE UserID = ".$_SESSION["ses_userid"]."";
        $objQuery = mysqli_query($conn, $strSQL);
        $objResult = mysqli_fetch_array($objQuery);
        ?>




        <div class="site-section">
          <div class="container">
            <div class="row">
              <div class="title-section mb-5 col-12">
                <h2 class="text-uppercase">ข้อมูลส่วนตัว</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-5 m-auto">

           <!-- <div class="p-3 p-lg-5 border"> -->
            <form action="edit_user.php?UserID=<?php echo $UserID ?>.php" name="form_payment" method="get" enctype="multipart/form-data" onsubmit="return confirm('Are you sure!')">
              <div class="form-group row">
                <div class="col-md-12">

                  <input type="hidden" class="form-control" id="UserID" name="UserID" value="<?=$objResult['UserID']?>" required>

                </div>

                <div class="col-md-6">
                  <label for="f_name" class="text-black">ชื่อ <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="f_name" name="f_name" value="<?=$objResult['f_name']?>" required>

                </div>
                <div class="col-md-6">
                  <label for="l_name" class="text-black">นามสกุล <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="l_name" name="l_name" value="<?=$objResult['l_name']?>" required>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="addess" class="text-black">ที่อยู่ <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="addess" name="addess" value="<?=$objResult['addess']?>" required>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="email" class="text-black">อีเมลล์ <span class="text-danger">*</span></label>
                  <input type="email" class="form-control" id="email" name="email"value="<?=$objResult['email']?>" required readonly>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="email" class="text-black">เบอร์โทรศัพท์ <span class="text-danger">*</span></label>
                  <input type="tel" class="form-control" id="U_tel" name="U_tel"  value="<?=$objResult['U_tel']?>"
                  pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"  placeholder="ตัวอย่าง ***-***-****">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                 <button  type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalCenter">เปลี่ยนรหัสผ่าน </button>

               </div>
             </div>

             <div class="form-group row">
              <div class="col-lg-12">
                <input type="submit" class="btn btn-primary btn-lg btn-block" value="บันทึก"  >
              </div>
            </div>
          </form>

        </div>
      </div>
    </div>

    <!-- popup -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">เเก้ไขรหัสผ่าน</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="edit_password.php?UserID=<?php echo $UserID ?>.php"  method="get">
             <input type="hidden" class="form-control" id="UserID" name="UserID" value="<?=$objResult['UserID']?>" required>
             <div class="form-group row">
              <!-- <div class="col-md-12">
                <label for="password" class="text-black">รหัสผ่านเดิม <span class="text-danger">*</span></label>
                <input type="password" class="form-control" id="password" name="password" placeholder="">
              </div> -->
            </div>
            <div class="form-group row">
              <div class="col-md-12">
                <label for="password" class="text-black">รหัสผ่านใหม่ <span class="text-danger">*</span></label>
                <input type="password" class="form-control" id="password1" name="password1" placeholder="" onkeyup="check_password()">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-12">
                <label for="password" class="text-black">ยืนยันรหัสผ่านใหม่ <span class="text-danger">*</span></label>
                <input type="password" class="form-control" id="password2" name="password2" onkeyup="check_password()">
              </div>
            </div>

            <div class="modal-footer">

              <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
              <button type="submit" id="btn_changePassword" disabled class="btn btn-primary">เเก้ไข</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- ------- -->



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
  <script type="text/javascript">
    function check_password(){
      var p1=$('#password1').val();
      var p2=$('#password2').val();
      console.log(p1+" | "+p2)
      if(p1 == p2){
        console.log("ture");
        $('#btn_changePassword').removeAttr("disabled");
      }else{
        console.log("false");
        $("#btn_changePassword").attr("disabled", true);
      }
    }
  </script>
</body>
</html>