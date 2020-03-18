<?php include "connectdb.php";?>

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
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="/lib/w3.css">


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

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
            <div class="col-md-12 mb-0"><a href="index.html">หน้าหลัก</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">เข้าสู่ระบบ/สมมัครสมาชิก</strong></div>
          </div>
        </div>
      </div>


      <div class="site-section">
        <div class="container">
          <div class="row">



            <div class="col-md-7">

              <form action="adduser.php" method="post">



                <div class="p-3 p-lg-5 border">
                  <h2 class="h3 mb-3 text-black">สมัคสมาชิก</h2>
                  <div class="form-group row">
                    <div class="col-md-6">
                      <label for="f_name" class="text-black">ชื่อ <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="f_name" name="f_name" required>

                    </div>
                    <div class="col-md-6">
                      <label for="l_name" class="text-black">นามสกุล <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="l_name" name="l_name" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-12">
                      <label for="addess" class="text-black">ที่อยู่ <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="addess" name="addess" placeholder="" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-12">
                      <label for="email" class="text-black">อีเมลล์ <span class="text-danger">*</span></label>
                      <input type="email" class="form-control" id="email" name="email" placeholder="" required="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-12">
                      <label for="email" class="text-black">เบอร์โทรศัพท์ <span class="text-danger">*</span></label>
                      <input type="tel" class="form-control" id="tel" name="tel" required pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="ตัวอย่าง ***-***-****">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-12">
                      <label for="password" class="text-black">รหัสผ่าน <span class="text-danger">*</span></label>
                      <input type="Password" class="form-control" id="password" name="password" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-lg-12">
                      <input type="submit" class="btn btn-primary btn-lg btn-block" value="สมัคสมาชิก">
                    </div>
                  </div>

                </div>
              </form>

            </div>

            <div class="col-md-5 ml-auto">

             <form action="check_login.php" method="post">
              <div class="p-3 p-lg-5 border">
                <h2 class="h3 mb-3 text-black">ล็อกอิน</h2>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="email" class="text-black">อีเมลล์ <span class="text-danger" >*</span></label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="อีเมลล์" required>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="password" class="text-black">รหัสผ่าน <span class="text-danger">*</span></label>
                    <input type="Password" class="form-control" id="password" name="password"  placeholder="รหัสผ่าน" required>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-lg-12">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="เข้าสู้ระบบ">
                  </div>
                </div>
              </form>
              <a href="#" data-toggle="modal" data-target="#exampleModalCenter"/>ลืมรหัสผ่าน </a>

            </div>

          </div>
        </div>
      </div>
    </form>
  </div>
</div>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">ลืมรหัสผ่าน</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="foget_password_action.php" method="post">
          <div class="form-group row">
            <div class="col-md-12">
              <label for="email" class="text-black">อีเมลล์ <span class="text-danger">*</span></label>
              <input type="email" class="form-control" id="email" name="email" placeholder="">
            </div>
          </div>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">ยืนยัน</button>
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