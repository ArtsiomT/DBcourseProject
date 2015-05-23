<?php 
	session_start();

	$id = $_SESSION['id'];
	$resultString = '';
	if (isset($_POST['firstname'])){
		$firstname = $_POST['firstname'];
		if (strlen($firstname)<2){
			$resultString = $resultString."Имя должно быть не короче двух символов. <br>";
			unset($firstname);
		}
	}
	include ("db.php");
	$firstname = stripslashes($firstname);
	$firstname = htmlentities($firstname);
	$firstname = trim($firstname);

	$result = mysql_query("UPDATE users SET firstname='$firstname' WHERE id='$id'");
	exit("<html><head><meta    http-equiv='Refresh' content='0;    URL=index.php'></head></html>");
?>