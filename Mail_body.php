<?php
      $Or_id = $_GET['Or_id'];
      $strSQL = "SELECT * FROM `order` WHERE Or_id = '".$_GET["Or_id"]."' ";
      $objQuery = mysqli_query($conn,$strSQL);
      $objResult = mysqli_fetch_array($objQuery);

      ?>

      <div class="site-section">
        <div class="container">
          <div class="row mb-5">
            <form class="col-md-12" method="post">
              <div class="site-blocks-table col-md-12">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th class="product-price">รหัสสินค้า</th>
                      <th class="product-name">ชื่อสินค้า</th> 
                      <th class="product-price">ราคา</th>
                      <th class="product-quantity">จำนวน</th>
                      <th class="product-total">ราคารวม</th>

                    </tr>
                  </thead>
                  <tbody>
                  <?php
                  $Total = 0;
                  $SumTotal = 0;
                  $SubTotle = 0;

                  $strSQL1 = "SELECT * FROM order_detail WHERE Or_id = '".$_GET["Or_id"]."' ";
                  $objQuery1 = mysqli_query($conn,$strSQL1);

                  while($objResult1 = mysqli_fetch_array($objQuery1)) {

                    $strSQL2 = "SELECT * FROM product WHERE Pro_id = '".$objResult1["Pro_id"]."' ";
                    $objQuery2 = mysqli_query($conn,$strSQL2);
                    $objResult2 = mysqli_fetch_array($objQuery2);
                    $Total = $objResult1["Qty"] * $objResult2["Pro_price"];
                    $SumTotal = $SumTotal + $Total;
                    $SubTotle = $SubTotle +  $objResult1["Qty"];
                    ?>
                    <tr>
                      <td>
                        <?php echo $objResult1["Pro_id"];?>
                      </td>

                      <td >
                       <?php echo $objResult2["Pro_name"];?>
                     </td>
                     <td><?php
                     echo $objResult2["Pro_price"];
                     if($objResult2["Pro_type"]==0){
                      echo "บาท/กรัม";
                    }else{ echo "บาท/ชุด";}
                    ?></td>
                    <td><?php echo  $objResult1["Qty"];?></td>
                    <td><?php echo number_format($Total,2);?></td>

                  </tr>
                

                <?php

              }
              ?>
              </tbody>
            </table>
          </div>
        </form>
      </div>



      <?php  

      ?>