<?php 
	session_start();

	$id = $_SESSION['id'];
	$resultString = '';
	if (isset($_POST['city'])){
		$city = $_POST['city'];
		if (strlen($city)<2){
			$resultString = $resultString."Фамилия должно быть не короче двух символов. <br>";
			unset($city);
		}
	}
	include ("../db.php");
	$city = stripslashes($city);
	$city = htmlentities($city);
	$city = trim($city);

	$result = mysql_query("UPDATE users SET city='$city' WHERE id='$id'");
	
	exit("<html><head><meta    http-equiv='Refresh' content='0;    URL=../index.php'></head></html>");
?>