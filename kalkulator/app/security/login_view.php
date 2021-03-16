<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8" />
<title>Kalkulator kredytowy</title>
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
</head>
<body>

<div style="width: 90%; margin: 2em auto;">

<form action="<?php print(_APP_ROOT);?>/app/security/login.php" method="post" class="pure-form pure-form-stacked">
	<legend>Logowanie</legend>
		<fieldset>
			<label for="id_login">Login: </label>
			<input id="id_login" type="text" name="login" value="<?php out($form['login']); ?>"/>
			
			<label for="id_pass">Hasło: </label>
			<input id="id_pass" type="password" name="pass"/>
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
</body>
</html>