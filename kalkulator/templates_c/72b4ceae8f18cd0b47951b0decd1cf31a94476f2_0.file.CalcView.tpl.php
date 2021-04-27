<?php
/* Smarty version 3.1.30, created on 2021-04-27 12:07:38
  from "C:\xampp\htdocs\kalkulator\app\views\CalcView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6087e26a6be779_88359602',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72b4ceae8f18cd0b47951b0decd1cf31a94476f2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kalkulator\\app\\views\\CalcView.tpl',
      1 => 1619517978,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_6087e26a6be779_88359602 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2318068536087e26a6be0f2_47499832', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_2318068536087e26a6be0f2_47499832 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="container">

		<h2 class="text-center top-space">Kalkulator kredytowy </h2>
		<br/>

		<div class="row">

			<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute" method="post" class="pure-form pure-form-stacked">
				<legend>Kalkulator kredytu</legend><br/><br/>

					<fieldset>
					<label for="x">Kwota: </label>
						<input id="x" type="text" name="x" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->x;?>
"/><br/>
					
					<label for="op">Oprocentowanie</label>
						<select id="op" name="op">
	
							<?php if (isset($_smarty_tpl->tpl_vars['res']->value->op_name)) {?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['form']->value->op;?>
">ponownie: <?php echo $_smarty_tpl->tpl_vars['res']->value->op_name;?>
</option>
							<option value="" disabled="true">---</option>
							<?php }?>

							<option value="5">5%</option>
							<option value="10">10%</option>
							<option value="15">15%</option>
							<option value="20">20%</option>

						</select>	

					<label for="y">Lat: </label>
						<input id="y" type="text" name="y" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->y;?>
"/><br/>
					
					</fieldset>
					<button type="submit" class="pure-button pure-button-primary">Oblicz</button>
			</form>
			
		</div> <!-- /row -->
		
		<div class="row">
		<?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


		<?php if (isset($_smarty_tpl->tpl_vars['res']->value->result)) {?>
			Wynik: <?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

		<?php }?>	
		</div> <!-- /row -->
		<span style="float:right;">użytkownik: <?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>
, rola: <?php echo $_smarty_tpl->tpl_vars['user']->value->role;?>
</span>
</div>	<!-- /container -->

<?php
}
}
/* {/block 'content'} */
}
