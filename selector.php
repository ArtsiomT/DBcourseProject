<?php 
	include ("db.php");
	$result = mysql_query("SELECT * FROM tariffs");
	$arr = mysql_fetch_array($result);
	#$arr = array("Лайт 1", "Лайт 2", "Лайт 3", "Анлим 1", "Анлим 2", "Анлим 5", "Анлим 10");
?>

<select name = "tariff">
	<?php 
		foreach ($arr as $value) {
			?><option value="<?=$value?>"><?=$value?></option><?php
		}
	?>
</select>