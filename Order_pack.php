<?php
ob_start();
session_start();

// print_r($_GET["Pro_id"]);
// exit();
for ($i=0; $i<sizeof($_GET["Pro_id"]); $i++) {
	$Pro_id=$_GET["Pro_id"][$i];
	$wieght=$_GET["weight_pro"][$i];
	if(!isset($_SESSION["intLine"]))
	{

		$_SESSION["intLine"] = 1;
		$_SESSION["strPro_id"][1] = $Pro_id;
		$_SESSION["strQty"][1] = 1;
		$_SESSION["strWeight"][1] = $wieght;

		header("location:cart.php");
	}
	else{

		$key = array_search($Pro_id, $_SESSION["strPro_id"]);
		if((string)$key != ""){
			$_SESSION["strQty"][$key] = $_SESSION["strQty"][$key] + 1;
		}
		else
		{

			$_SESSION["intLine"] = $_SESSION["intLine"] + 1;
			$intNewLine = $_SESSION["intLine"];
			$_SESSION["strPro_id"][$intNewLine] = $Pro_id;
			$_SESSION["strQty"][$intNewLine] = 1;
			$_SESSION["strWeight"][$intNewLine] = $wieght;
		}

		header("location:shop.php");

	}
}
?>