<?php 
	session_start();

	$id = $_SESSION['id'];
	$resultString = '';
	if (isset($_POST['address'])){
		$address = $_POST['address'];
		if (strlen($address)<2){
			$resultString = $resultString."Фамилия должно быть не короче двух символов. <br>";
			unset($address);
		}
	}
	include ("../db.php");
	$address = stripslashes($address);
	$address = htmlentities($address);
	$address = trim($address);

	$result = mysql_query("UPDATE users SET address='$address' WHERE id='$id'");
	
	exit("<html><head><meta    http-equiv='Refresh' content='0;    URL=../index.php'></head></html>");
?>