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
<h2>Главная страница </h2>

<br>
<?php 
	if (empty($_SESSION['login']) or empty($_SESSION['id']))
	{
		include ('loginform.php');
		echo "Вы вошли на сайт, как гость. Пожалуйста, войдите под своим пользователям или зарегистрируйтесь";
	} else 
	{
		echo "Вы вошли на сайт, как <font color=red>".$_SESSION['login']."</font>(<a href='exit.php'>выход</a>)<br><a href = 'user_cabinet.php'>Эта ссылка доступна только зарегистрированым пользователям</a>";
	}
?>
</body>
</html>