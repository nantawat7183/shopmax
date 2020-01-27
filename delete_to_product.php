<?php include "connectdb.php"; ?>


<?php
if(isset($_GET)){
    $Pro_id = $_GET['Pro_id'];



    $sql2 = "DELETE FROM product WHERE Pro_id = '$Pro_id' OR Pro_id = '$Pro_id'";
      
    if (mysqli_query($conn, $sql2)) {
        echo "Record deleted successfully";
        header("Location:Edit_product.php");

    } else {
        echo "Error deleting record: " . mysqli_error($conn);
        echo "<a href='aaaaa'>กลับ</a>";
    }
}

?>
