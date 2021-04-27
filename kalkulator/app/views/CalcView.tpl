{extends file="main.tpl"}

{block name=content}

<div class="container">

		<h2 class="text-center top-space">Kalkulator kredytowy </h2>
		<br/>

		<div class="row">

			<form action="{$conf->action_root}calcCompute" method="post" class="pure-form pure-form-stacked">
				<legend>Kalkulator kredytu</legend><br/><br/>

					<fieldset>
					<label for="x">Kwota: </label>
						<input id="x" type="text" name="x" value="{$form->x}"/><br/>
					
					<label for="op">Oprocentowanie</label>
						<select id="op" name="op">
	
							{if isset($res->op_name)}
							<option value="{$form->op}">ponownie: {$res->op_name}</option>
							<option value="" disabled="true">---</option>
							{/if}

							<option value="5">5%</option>
							<option value="10">10%</option>
							<option value="15">15%</option>
							<option value="20">20%</option>

						</select>	

					<label for="y">Lat: </label>
						<input id="y" type="text" name="y" value="{$form->y}"/><br/>
					
					</fieldset>
					<button type="submit" class="pure-button pure-button-primary">Oblicz</button>
			</form>
			
		</div> <!-- /row -->
		
		<div class="row">
		{include file='messages.tpl'}

		{if isset($res->result)}
			Wynik: {$res->result}
		{/if}	
		</div> <!-- /row -->
		<span style="float:right;">użytkownik: {$user->login}, rola: {$user->role}</span>
</div>	<!-- /container -->

{/block}