<?php include _ROOT_PATH.'/templates/top.php';?>

<div style="width: 90%; margin: 2em auto;">

<form action="<?php print(_APP_ROOT);?>/app/calc_kred.php" method="post" class="pure-form pure-form-stacked">
	<legend>Kalkulator kredytu</legend>
		<fieldset>
			<label for="id_kwota">Kwota: </label>
			<input id="id_kwota" type="text" name="kwota" value="<?php out($kwota); ?>"/>
			
			<label for="id_lat">Lat: </label>
			<input id="id_lat" type="text" name="lat" value="<?php out($lat); ?>"/>
			
			<label for="id_op">Oprocentowanie: </label>
			<input id="id_op" type="text" name="oprocentowanie" value="<?php out($oprocentowanie); ?>"/>
		</fieldset>
	<input type="submit" value="Oblicz" class="pure-button pure-button-primary"/>
</form>
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

</div>
<?php include _ROOT_PATH.'/templates/bottom.php';?>