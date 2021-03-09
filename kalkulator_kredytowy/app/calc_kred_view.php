<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8" />
<title>Kalkulator kredytowy</title>
</head>
<body>

<form action="<?php print(_APP_ROOT);?>/app/calc_kred.php" method="get">
	<label for="id_kwota">Kwota: </label>
	<input id="id_kwota" type="text" name="kwota" value="<?php if (isset($kwota)) print($kwota); ?>"/>
	<br/>
	<label for="id_lat">Lat: </label>
	<input id="id_lat" type="text" name="lat" value="<?php if (isset($lat)) print($lat); ?>"/>
	<br/>
	<label for="id_op">Oprocentowanie: </label>
	<input id="id_op" type="text" name="oprocentowanie" value="<?php if (isset($oprocentowanie)) print($oprocentowanie); ?>"/>
	<br/>
	<input type="submit" value="Oblicz"/>
<form/>
<?php 

if(isset($messages)){
	if(count($messages)>0){
		echo '<ol style="margin: 20px; padding: 10px 10px 30px; border-radius: 5px; background-color: #0000ff; width: 300px;">';
		foreach($messages as $key => $msg){
			echo "<li>".$msg."</li>";
		}
		echo '</ol>';
	}
}
?>

<?php if(isset($result)) {?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ffff00; width:300px;">
<?php echo 'Miesięczna rata wynosi: '.$result; ?>
</div>
<?php } ?>

</body>
</html>