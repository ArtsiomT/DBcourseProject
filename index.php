<?php 
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
	<link rel="stylesheet" href="./css/style.css">
	<link rel="stylesheet" type="text/css" href="./css/modal.css">
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

<aside id="changename" class="modal">
		<div>
			<form action="changers/changeName.php" method="post" class="form-registration">
				<label>Имя:</label>
				<input type="text" name="firstname" size="15" maxlength="15">
				<input type="submit" name="submit" value="Изменить">
			</form>
						<a href="#close" title="Закрыть">Закрыть</a>
		</div>
	</aside>
</body>
</html>
<aside id="changelast" class="modal">
		<div>
			<form action="changers/changelast.php" method="post" class="form-registration">
				<label>Фамилия:</label>
				<input type="text" name="lastname" size="15" maxlength="15">
				<input type="submit" name="submit" value="Изменить">
			</form>
						<a href="#close" title="Закрыть">Закрыть</a>
		</div>
	</aside>
</body>
</html>
<aside id="changecity" class="modal">
		<div>
			<form action="changers/changecity.php" method="post" class="form-registration">
				<label>Город:</label>
				<input type="text" name="city" size="15" maxlength="15">
				<input type="submit" name="submit" value="Изменить">
			</form>
						<a href="#close" title="Закрыть">Закрыть</a>
		</div>
	</aside>
</body>
</html>
<aside id="changeaddress" class="modal">
		<div>
			<form action="changers/changeaddress.php" method="post" class="form-registration">
				<label>Адрес:</label>
				<input type="text" name="address" size="15" maxlength="15">
				<input type="submit" name="submit" value="Изменить">
			</form>
						<a href="#close" title="Закрыть">Закрыть</a>
		</div>
	</aside>
</body>
</html>
<aside id="changephone" class="modal">
		<div>
			<form action="changers/changephone.php" method="post" class="form-registration">
				<label>Номер телефона:</label>
				<input type="text" name="phone" size="15" maxlength="15" value="+375">
				<input type="submit" name="submit" value="Изменить">
			</form>
						<a href="#close" title="Закрыть">Закрыть</a>
		</div>
	</aside>
</body>
</html>
<aside id="changetp" class="modal">
		<div>
			<form action="changers/changetp.php" method="post" class="form-registration">
				<label>Тарифный план:</label>
				<?php include("selector.php")?>
				<input type="submit" name="submit" value="Изменить">
			</form>
						<a href="#close" title="Закрыть">Закрыть</a>
		</div>
	</aside>
</body>
</html>