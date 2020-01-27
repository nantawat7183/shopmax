<?php 
session_start() ;
$_SESSION['post']=$_POST;
$_SESSION['error']="";
$pid=$_POST['pid'];//ตั้งค่าตัวแปล
//$pimg=$_POST['pimg'];
$pname=$_POST['pname'];
$pprice=$_POST['pprice'];
include_path('connectdb.php');
if (trim ($pid==""))//ตรวจสอบฟิลด์ที่ไม่ได้กรอกกรอกข้อมูล
{
    $_SESSION['error']['pid']='Fill product id';
}// if(trim ($pimg=="")){
   // $_SESSION['error']['pimg']='Choose product image';
//} 
if(trim ($pname=="")){
    $_SESSION['error']['pname']='Fill product name';
} if(trim ($pprice=="")){
    $_SESSION['error']['pprice']='Fill product price';
    echo "<script> window.history.go(-1);</script>\n";
    exit();
}else{
    $sql="INSERT INTO shopping (pid,pname,pprice)VALUES ('$pid','$pname','$pprice')";//คำสั่งเพิ่มข้อมูล
    $sql_query=mysql_query($sql);
 if($sql_query) {
        echo "<script type='text/javascript'>alert('Already add Product.')</script>";
        echo "<meta http-equiv ='refresh'content='0;URL=show.php'>";
        $_SESSION['post']="";
    }else{
        echo "<script type='text/javascript'>alert('There was an error adding the product.');window.history.go(-1);</script>" ;
    }
}
mysql_close();

?>