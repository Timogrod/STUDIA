{extends file="main.tpl"}

{block name=content}

<div class="container">
        <h2 class="text-center top-space">Logowanie </h2>
		<br/>

        <div class="row">

            <form action="{$conf->action_url}login" method="post"  class="pure-form pure-form-stacked">
	            <legend>Logowanie do systemu</legend><br/><br/>

	                <fieldset>
			        <label for="id_login">Login: </label>
			            <input id="id_login" type="text" name="login"/><br/>
		
			        <label for="id_pass">Hasło: </label>
			            <input id="id_pass" type="password" name="pass" /><br />
	                </fieldset>

                    <button type="submit" class="pure-button pure-button-primary">Zaloguj</button>
            </form>	
        </div> <!-- /row -->
{include file='messages.tpl'}

{/block}