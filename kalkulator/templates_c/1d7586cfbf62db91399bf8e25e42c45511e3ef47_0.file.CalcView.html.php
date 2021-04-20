<?php
/* Smarty version 3.1.30, created on 2021-04-20 11:42:21
  from "C:\xampp\htdocs\kalkulator\app\views\CalcView.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_607ea1fd53be28_27758655',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d7586cfbf62db91399bf8e25e42c45511e3ef47' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kalkulator\\app\\views\\CalcView.html',
      1 => 1618911739,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.html' => 1,
  ),
),false)) {
function content_607ea1fd53be28_27758655 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2027542018607ea1fd53b0d5_34112373', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_2027542018607ea1fd53b0d5_34112373 extends Smarty_Internal_Block
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

			
			<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
				<h4>Wystąpiły błędy: </h4>
				<ol>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
?>
				<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				</ol>
			<?php }?>

			
			<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
				<h4>Informacje: </h4>
				<ol>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
?>
				<li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				</ol>
			<?php }?>

			<?php if (isset($_smarty_tpl->tpl_vars['res']->value->result)) {?>
				<h4>Miesieczna rata:</h4>
				<p>
				<?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

				</p>
			<?php }?>

		</div> <!-- /row -->

</div>	<!-- /container -->

<?php
}
}
/* {/block 'content'} */
}
