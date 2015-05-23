<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset = utf-8">
		<link rel="stylesheet" href="./css/style.css">
		<link rel="stylesheet" href="./vendor/bootstrap/css/bootstrap.min.css">
		<title>Регистрация</title>
	</head>
	<body>
        <?php include ("head.php") ?>
		<form action="save_user.php" method="post" class="form-registration">
		<table>
    <tr>
        <td>Логин<br></td>
        <td><input name="login" type="text" size="15" maxlength="15" /></td>
    </tr>
    <tr>
        <td>Пароль</td>
        <td><input name="password" type="password" size="15" maxlength="15" /></td>
    </tr>
    <tr>
        <td>Имя <br></td>
        <td><input name="firstname" type="text" size="15" maxlength="20" /></td>
    </tr>
    <tr>
        <td>Фамилия <br></td>
        <td><input name="lastname" type="text" size="15" maxlength="20" /></td>
    </tr>
    <tr>
        <td>Город <br></td>
        <td><input name="city" type="text" size="15" maxlength="20" /></td>
    </tr>
    <tr>
        <td>Адрес <br></td>
        <td><input name="address" type="text" size="15" maxlength="20" /></td>
    </tr>
    <tr>
        <td>Номер телефона <br></td>
        <td><input name="phone" type="text" size="15" maxlength="13" value="+375" /></td>
    </tr>
    <tr>
        <td>Выберите желаемый тарифный план <br></td>
        <td><?php include ("selector.php")?></td>
    </tr>
    <tr>
        <td>Введите код с изображения<br><img src="code/my_codegen.php"></td>
        <td><input name="code" type="text" /></td>
    </tr>
    <tr>
        <td colspan="2"><center><input type="submit" name = "submit" value="Зарегистрироваться" /></center></td>
    </tr>
</table>
		
		</form>
	</body>
</html>