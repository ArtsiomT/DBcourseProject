<?php 
echo "Вы вошли на сайт, как <font color=red>".$_SESSION['login']."</font>(<a href='exit.php'>выход</a>)<br>"; 
include ("db.php");
$id = $_SESSION['id'];
$result = mysql_query("SELECT * FROM users WHERE id = '$id'");
$row = mysql_fetch_array($result);
$tp_id = trim($row['tp_id']);
$tpresult = mysql_query("SELECT * FROM tariffs WHERE tp_id = '$tp_id'");
$tprow = mysql_fetch_array($tpresult);
?>
<table>
	<tr>
		<td>Ваше имя:</td>
		<td><?php echo $row['firstname'] ?></td>
		<td></td>	
	<tr>
	<tr>
		<td>Фамилия</td>
		<td><?php echo $row['lastname'] ?></td>
		<td></td>	
	<tr>
	<tr>
		<td>Город</td>
		<td><?php echo $row['city'] ?></td>
		<td></td>	
	<tr>
	<tr>
		<td>Адрес</td>
		<td><?php echo $row['address'] ?></td>
		<td></td>	
	<tr>
	<tr>
		<td>Номер телефона</td>
		<td><?php echo $row['phone'] ?></td>
		<td></td>	
	<tr>
</table>

<table>
	<tr>
		<td>Тарифный план:</td>
		<td><?php echo $tprow['name'] ?></td>
		<td></td>	
	<tr>
	<tr>
		<td>Абонентская плата</td>
		<td><?php echo $tprow['licensefee']."руб" ?></td>
		<td></td>	
	<tr>
	
	<?php if (!empty($tprow['traffik'])){
			include ("traffik.php");
		} ?>
	
	<tr>
		<td>Гарантированная скорость соединения</td>
		<td><?php echo $tprow['speed']." Мбит/с" ?></td>
		<td></td>	
	<tr>

	<?php if (!empty($tprow['rubmb'])){
			include ("rubmb.php");
		} ?>
	
</table>

