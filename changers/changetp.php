<?php 
	session_start();

	$id = $_SESSION['id'];
	$resultString = '';
	if (isset($_POST['tariff'])){
		$tariff = trim($_POST['tariff']);
	}
	include ("../db.php");
	$tpresult = mysql_query("SELECT tp_id FROM tariffs WHERE name = '$tariff'", $db);
	$tprow = mysql_fetch_array($tpresult);
	$tp_id = $tprow['tp_id'];

	$result = mysql_query("UPDATE users SET tp_id='$tp_id' WHERE id='$id'");
	
	exit("<html><head><meta    http-equiv='Refresh' content='0;    URL=../index.php'></head></html>");
?>