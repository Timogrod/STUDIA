<?php include _ROOT_PATH.'/templates/top.php';?>

<div class="container">

<h2 class="text-center top-space">Logowanie </h2>
		<br/>

		<div class="row">

<form action="<?php print(_APP_ROOT);?>/app/security/login.php" method="post" class="pure-form pure-form-stacked">
	<legend>Logowanie</legend>
		<fieldset>
			<label for="id_login">Login: </label>
			<input id="id_login" type="text" name="login" value="<?php out($form['login']); ?>"/>
			
			<label for="id_pass">Hasło: </label>
			<input id="id_pass" type="password" name="pass"/>
		</fieldset>
	<input type="submit" value="Zaloguj" class="pure-button pure-button-primary"/>
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

</div> <!-- /row -->

</div>	<!-- /container -->

<?php include _ROOT_PATH.'/templates/bottom.php';?>