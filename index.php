<?php 
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
	<link rel="stylesheet" href="./css/style.css">
	<link rel="stylesheet" href="./vendor/bootstrap/css/bootstrap.min.css">
	<title>Internet Provider</title>
</head>
<body>
<?php include ("head.php");?>

<br>
<?php 
	if (empty($_SESSION['login']) or empty($_SESSION['id']))
	{
		include ('loginform.php');
		echo "<center>Вы вошли на сайт, как гость. Пожалуйста, войдите под своим пользователям или зарегистрируйтесь</center>";
	} else 
	{
		echo"<center>";
		include ("myinfo.php");
		echo "</center>";
	}
?>
</body>
</html>