<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset = utf-8">
	<title>Registration</title>
</head>
<body>
<?php 
	$resultString = '';
	if (isset($_POST['login'])) { 
		$login = $_POST['login']; 
		if (strlen($login)<4) {
			$resultString = $resultString."Логин должен быть не короче четырёх символов. <br>";
			unset($login);
		}
	}

	if (isset($_POST['password'])){
		$password = $_POST['password'];
		if (strlen($password) <8){
			$resultString = $resultString."Пароль должен быть не короче восьми символов. <br>";
			unset($password);
		}
	}

	if (isset($_POST['firstname'])){
		$firstname = $_POST['firstname'];
		if (strlen($firstname)<2){
			$resultString = $resultString."Имя должно быть не короче двух символов. <br>";
			unset($firstname);
		}
	}

	if (isset($_POST['lastname'])){
		$lastname = $_POST['lastname'];
		if(strlen($lastname)<2){
			$resultString = $resultString."Фамилия должна быть не короче двух символов. <br>";
			unset($lastname);
		}
	}

	if (isset($_POST['city'])){
		$city = $_POST['city'];
		if(strlen($city)<2){
			$resultString = $resultString."Город должен быть не короче двух символов. <br>";
			unset($city);
		}
	}

	if (isset($_POST['address'])){
		$address = $_POST['address'];
		if(strlen($address)<10){
			$resultString = $resultString."Аддресс должен быть не короче десяти символов. <br>";
			unset($address);
		}
	}

	if (isset($_POST['phone'])){
		$phone = $_POST['phone'];
		if(strlen($phone)!=13){
			$resultString = $resultString."Номер телефона должен состоять из 13 символов (В формате +375*********).<br>";
		}
	}

	if (isset($_POST['tariff'])){
		$tariff = trim($_POST['tariff']);
	}



	if(empty($login) or empty($password))
	{
		exit("Вы ввели неверную информацию. Вернитесь назад и корректно заполните все поля<br>".$resultString);
	}
	$login = stripslashes($login);
	$login = htmlentities($login);

	$password = stripslashes($password);
	$password = htmlentities($password);

	$login = trim($login);
	$password = trim($password);

	$firstname = stripslashes($firstname);
	$firstname = htmlentities($firstname);
	$firstname = trim($firstname);

	$lastname = stripslashes($lastname);
	$lastname = htmlentities($lastname);
	$lastname = trim($lastname);

	$city = stripslashes($city);
	$city = htmlentities($city);
	$city = trim($city);

	$address = stripslashes($address);
	$address = htmlentities($address);
	$address = trim($address);

	$phone = stripslashes($phone);
	$phone = htmlentities($phone);
	$phone = trim($phone);

	include ("db.php");
	$tpresult = mysql_query("SELECT tp_id FROM tariffs WHERE name = '$tariff'", $db);
	$tprow = mysql_fetch_array($tpresult);
	$tp_id = $tprow['tp_id'];
	$result = mysql_query("SELECT id FROM users WHERE login = 'login'", $db);
	$myrow = mysql_fetch_array($result);
	if (!empty($myrow['id'])) {
		exit("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
	}
	$result2 = mysql_query("INSERT INTO users (login, password, firstname, lastname, city, address, phone, tp_id) VALUES('$login', '$password', '$firstname', '$lastname', '$city', '$address', '$phone', '$tp_id')");

	if($result2 == 'TRUE')
	{
		echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a href='index.php'>Главная страница</a>";
		exit("<html><head><meta    http-equiv='Refresh' content='0;    URL=index.php'></head></html>");
	}
	else {
		echo "Ошибка! Вы не зарегистрированы.";
		exit("<html><head><meta    http-equiv='Refresh' content='0;    URL=index.php'></head></html>");
	}
?>
</body>
</html>