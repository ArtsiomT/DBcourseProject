<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Login Result</title>
</head>
<body>
	<?php 
	session_start();
	if (isset($_POST['login']))	
	{
		$login = $_POST['login'];
		if ($login == '') 
		{
			unset($login);
		}
	}
	if (isset($_POST['password']))
	{
		$password = $_POST['password'];
		if ($password == '')
		{
			unset($login);
		}
	}

	if (empty($login) or empty($password)) {
		exit("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
	}

	$login = stripslashes($login);
	$login = htmlentities($login);
	$password = stripslashes($password);
	$password = htmlentities($password);

	$login = trim($login);
	$password = trim($password);

	include("db.php");

	$result = mysql_query("SELECT * FROM users WHERE login = '$login'", $db);
	$myrow = mysql_fetch_array($result);
	if (empty($myrow['password']))
	{
		exit("Неверный логин.");
	}
	else {
		if ($myrow['password'] == $password) {
			$_SESSION['login'] = $myrow['login'];
			$_SESSION['id'] = $myrow['id']; 
			echo "Вы успешно вошли на сайт! <a href='index.php'>Главная страница</a>";
			exit("<html><head><meta    http-equiv='Refresh' content='0;    URL=index.php'></head></html>");
		}
		else {
			exit("Неверный пароль.");
		}
	}
 ?>
</body>
</html>
