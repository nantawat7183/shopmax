<?php
include "connectdb.php";

ob_start();
session_start();

$strSQL = "SELECT * FROM product WHERE Pro_id = ".$_GET["Pro_id"];
$objQuery_product = mysqli_query($conn, $strSQL);
if ($objResult = mysqli_fetch_array($objQuery_product)){
	// $qtyNew=$objResult['Pro_amount']-$_SESSION["strQty"][$i];
	if($objResult['Pro_amount'] < 1){
		echo "fail";
		exit();
	}else{
		echo "S";
	}

}

if(!isset($_SESSION["intLine"]))
{

	$_SESSION["intLine"] = 1;
	$_SESSION["strPro_id"][1] = $_GET["Pro_id"];
	$_SESSION["strQty"][1] = 1;
	$_SESSION["strWeight"][1]=500;


	header("location:index.php");
}
else

{
	
	$key = array_search($_GET["Pro_id"], $_SESSION["strPro_id"]);
	if((string)$key != "")
	{
		$_SESSION["strQty"][$key] = $_SESSION["strQty"][$key] + 1;
	}
	else
	{
		
		$_SESSION["intLine"] = $_SESSION["intLine"] + 1;
		$intNewLine = $_SESSION["intLine"];
		$_SESSION["strPro_id"][$intNewLine] = $_GET["Pro_id"];
		$_SESSION["strQty"][$intNewLine] = 1;
		$_SESSION["strWeight"][$intNewLine] = 500;
	}
	
	header("location:index.php");

}
?>