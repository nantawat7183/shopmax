<?php include "connectdb.php"; ?>


<?php
if(isset($_GET)){
    $Menu_id = $_GET['Menu_id'];



    $sql2 = "DELETE FROM menu WHERE Menu_id = {$Menu_id}";
      
    if (mysqli_query($conn, $sql2)) {
        echo "Record deleted successfully";
        header("Location:edit_detail_menu.php");

    } else {
        echo "Error deleting record: " . mysqli_error($conn);
     
    }
}

?>
