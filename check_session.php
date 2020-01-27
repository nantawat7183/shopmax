
<?php
if (!isset($_SESSION)) {
	session_start();

	if (!isset($_SESSION["ses_userid"])) {
		header("Location: login.php");
		exit;
	}else{
		$ses_userid = $_SESSION["ses_userid"];
		$ses_date = $_SESSION["ses_date"];
		$ses_time = $_SESSION["ses_time"];
	}
}
?>

<?php

?>