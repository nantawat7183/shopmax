<?php include "connectdb.php"; ?>
<?php include "check_session.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>ShopVegetable &mdash; Vegetable Shop Online</title>
  <link rel="shortcut icon" type="image/x-icon" href="images/logo.ico" />
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
      <?php include "Menu.php"; ?> 
      <!-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="images/sli1.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/sli2.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/sli3.jpg" alt="Third slide">
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

      


      <div class="site-section">
        <div class="container">
          <div class="row">
            <div class="title-section mb-1 col-12">
              <h2 class="text-uppercase">เเพ็คเก็ทสินค้า <?= $_GET['pack_size'] ?> กรัม</h2>
            </div>
          </div>
          <div class="row">
           <div class="site-section pt-2"  style="width: 100%">
            <div class="container">
              <div class="row mb-5">
                <div id="box-list-product" class="mb-5 card col-md-8 m-auto">
                  <form id="form_pakage" action="Order_pack.php" method="get">
                    <div id="package_list" class="row mb-2 px-4">

                    </div>
                    <button class="btn btn-sm btn-success"> ไส่ตะกร้า</button>
                  </form> 
                </div>
                <form class="col-md-12 mt-5" method="post" >
                  <div class="site-blocks-table">
                    <table class="table table-bordered" width="100%">
                      <thead>
                        <tr>
                          <th class="product-price" style="m">รหัสสินค้า</th>
                          <th class="product-thumbnail">ชื่อสินค้า</th>
                          <th class="product-name">รูปภาพ</th>
                          <th class="product-price">น้ำหนัก</th> 
                          <th class="product-price">ชนิดผัก</th>


                        </tr>
                      </thead>



                      <?php

                      $sql1 = "SELECT * FROM product; ";
                      $result = mysqli_query($conn,$sql1);
                      $Pro_type_pack ='0';          
                      while ($row = mysqli_fetch_row($result)) {
                        if($row['7']==$Pro_type_pack){

                         ?>
                        <tr>  
                          <td><?=$row['0']?></td>
                          <td><?=$row['1']?></td>
                          <td><img style='height: 50px; width: 50px; margin:0px;' class='img-product' src="<?=$row['6']?>"></td>
                          <td><input type='text' id="input_pro_weight_<?=$row[0]?>" name='input_pro_weight[]' class='button1' value='100'></td>
                          <td>

                            <a href='javascript:void(0)' class='btn btn-success' onclick="add_package(<?=$row[0]?>,'<?=$row[1]?>',$('#input_pro_weight_<?=$row[0]?>').val())"> + </a>
                          </td>
                        </tr>
                      <?php }}?>
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
  <script type="text/javascript">
    const data_package=JSON.parse('[]');
    $('#box-list-product').hide();

    function add_package(id_pro,name_pro,weight){
      $('#box-list-product').show();
      if(check_package_size(weight)){
        item = data_package.find(obj => obj.id_pro==id_pro);
        if (item !== undefined){
          item.weight=parseInt(item.weight)+parseInt(weight);
        }else{
          data_package.push({ "id_pro":id_pro, "name_pro":name_pro, "weight":weight});
        }
        package_init();
      }else{
        alert("เต็ม");
      }
      console.log(data_package);
    }

    var packsize=parseInt(<?=$_GET['pack_size'];?>);
    function check_package_size(weight){
      
      sum_size=0;
      data_package.forEach(json_item => {
        sum_size=sum_size+parseInt(json_item.weight);
      });
      console.log(packsize+"|"+weight);
      if(sum_size >= packsize || weight >= packsize){// over size
        return false; //full
      }else{
        return true;
      }
    }

    function delete_package(id_pro,elm){
      console.log(id_pro);
      var index = data_package.findIndex(obj => obj.id_pro==id_pro);
      console.log(index);
      if (index !== undefined) data_package.splice(index, 1);
      console.log(data_package);
      elm.parentNode.parentNode.parentNode.removeChild(elm.parentNode.parentNode);

      if(data_package.length == 0){
        $('#box-list-product').hide();
      }
    }

    function package_init(){
      html_string="";
      data_package.forEach(json_item => {
        html_string+="<div class='row col-md-12'><div class='col-md-6'><input type='hidden' class='form-control' name='Pro_id[]' value='"+json_item.id_pro+"'><input type='hidden' class='form-control' name='weight_pro[]' value="+json_item.weight+" readonly>"+json_item.name_pro+"</div><div class='col-md-5'>จำนวน "+json_item.weight+"กรัม</div><div class='col-md-1'> <a href='javascript:void(0)' onClick='delete_package("+json_item.id_pro+",this)'> X </a> </div></div>";
      });

      $('#package_list').html(html_string);
    }
  </script>
</body>
</html>