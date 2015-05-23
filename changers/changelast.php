<?php 
	session_start();

	$id = $_SESSION['id'];
	$resultString = '';
	if (isset($_POST['lastname'])){
		$lastname = $_POST['lastname'];
		if (strlen($lastname)<2){
			$resultString = $resultString."Фамилия должно быть не короче двух символов. <br>";
			unset($lastname);
		}
	}
	include ("../db.php");
	$lastname = stripslashes($lastname);
	$lastname = htmlentities($lastname);
	$lastname = trim($lastname);

	$result = mysql_query("UPDATE users SET lastname='$lastname' WHERE id='$id'");
	
	exit("<html><head><meta    http-equiv='Refresh' content='0;    URL=../index.php'></head></html>");
?>