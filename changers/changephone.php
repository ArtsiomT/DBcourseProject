<?php 
	session_start();

	$id = $_SESSION['id'];
	$resultString = '';
	if (isset($_POST['phone'])){
		$phone = $_POST['phone'];
		if (strlen($phone)<2){
			$resultString = $resultString."Фамилия должно быть не короче двух символов. <br>";
			unset($phone);
		}
	}
	include ("../db.php");
	$phone = stripslashes($phone);
	$phone = htmlentities($phone);
	$phone = trim($phone);

	$result = mysql_query("UPDATE users SET phone='$phone' WHERE id='$id'");
	
	exit("<html><head><meta    http-equiv='Refresh' content='0;    URL=../index.php'></head></html>");
?>