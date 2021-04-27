<?php
/* Smarty version 3.1.30, created on 2021-04-27 11:53:21
  from "C:\xampp\htdocs\kalkulator\app\views\LoginView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6087df11624268_68768356',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39b79f3e8f98258ab729a05e303b66deccf265f7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kalkulator\\app\\views\\LoginView.tpl',
      1 => 1619516334,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_6087df11624268_68768356 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18606240886087df116230b4_92757925', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_18606240886087df116230b4_92757925 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="container">
        <h2 class="text-center top-space">Logowanie </h2>
		<br/>

        <div class="row">

            <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" method="post"  class="pure-form pure-form-stacked">
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
<?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php
}
}
/* {/block 'content'} */
}
