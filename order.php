<?php
ob_start();
session_start();
	
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