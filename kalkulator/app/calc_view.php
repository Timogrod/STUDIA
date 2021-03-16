<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8" />
<title>Kalkulator</title>
</head>
<body>

<form action="<?php print(_APP_ROOT);?>/app/calc.php" method="get">
	<label for="id_x">Liczba 1: </label>
	<input id="id_x" type="text" name="x" value="<?php if (isset($x)) print($x); ?>"/>
	<br/>
	<label for="id_op">Operacja: </label>
	<select name="op">
		<option value="plus">+</option>
		<option value="minus">-</option>
		<option value="times">*</option>
		<option value="div">/</option>
	</select>
	<br/>
	<label for="id_y">Liczba 2: </label>
	<input id="id_y" type="text" name="y" value="<?php if (isset($y)) print($y); ?>"/>
	<input type="submit" value="Oblicz"/>
</form>
<?php 

if(isset($messages)){
	if(count($messages)>0){
		echo '<ol style="margin: 20px; padding: 10px 10px 30px; border-radius: 5px; background-color: #f1f1f1; width: 300px;">';
		foreach($messages as $key => $msg){
			echo "<li>".$msg."</li>";
		}
		echo '</ol>';
	}
}
?>

<?php if(isset($result)) {?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color:pink; width:300px;">
<?php echo 'Wynik: '.$result; ?>
</div>
<?php } ?>

</body>
</html>