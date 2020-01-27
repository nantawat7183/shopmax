<?php
	ob_start();
	session_start();

	$Line = $_GET["Line"];
	unset($_SESSION["strPro_id"][$Line]);
	unset($_SESSION["strQty"][$Line]);

	$_SESSION["intLine"]=$_SESSION["intLine"]-1;

	header("location:cart.php");
?>