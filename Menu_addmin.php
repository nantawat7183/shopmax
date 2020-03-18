<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="/lib/w3.css">


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
  <nav class="navbar navbar-light bg-warning">
    <a class="navbar-brand"></a>
    <!-- <form class="form-inline" action="seach_pro.php?Pro_id=<?php echo $Pro_name ?>" method="get"> -->
    <!--   <input class="form-control mr-sm-2" type="search" name="seach" placeholder="Search" aria-label="Search"> -->
      <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
    </form>
  </nav>

  <div class="container" c>
    <div class="d-flex align-items-center justify-content-between">
     <img src="images/logo.png" width="16%">
         <!--  <div class="logo">
            <div class="site-logo">
              <a href="index.php" >  
                <img src="images/Logo.png" width="200" height="250" alt="Image" class="img-fluid">
              </a>

            </div>
          </div> -->
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li ><!-- class="has-children "> -->
                  <!-- <a href="index.php">สินค้า</a> -->
                 <!--  <ul class="dropdown">
                    
                    <li class="has-children">
                      
                      <ul class="dropdown">
                       
                      </ul> 
                    </li>
                  </ul> -->
                </li>
                
                <li><a href="Edit_product.php">เเก้ไขสินค้า</a></li>
                
                
                <li><a href="edit_detail_menu.php">เเก้ไขเมนู</a></li>
                <!-- <li><a href="#">เเก้ไขโปรโมชั่น</a></li> -->
                <li><a href="edit_status.php">เเก้ไขสถานะสินค้า</a></li>
                <li><a href="order_show_addmin.php">รายการสั่งซื้อ</a></li>                
                <li><a href="logout.php">ออก</a></li>
              </ul>
            </nav>
          </div>
          
          <a  style="margin-left:1%;";>
            <span class="icon-person"></span>
            <span style="color: #555" >


             <?php 

             $strSQL = "SELECT * FROM user WHERE UserID = ".$ses_userid."";
             $objQuery = mysqli_query($conn, $strSQL);
             while ($objResult = mysqli_fetch_array($objQuery)){

              $fname = $objResult["f_name"];

              $lname = $objResult["l_name"];
              $status = $objResult["status"];
              $full =  $fname." ".$lname." ".$status;

              

            }
            echo $full;

            ?>
          </span>
        </a></b>


      </div>



    </div>
  </div>
</body>
</html>