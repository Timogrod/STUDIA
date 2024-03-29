<?php
/* Smarty version 3.1.30, created on 2021-03-23 12:30:34
  from "C:\xampp\htdocs\kalkulator\app\calc_kred_view.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6059d15a1bcf71_29634389',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c39f8f3c83dbe530784cf04f1ce330f1d815c266' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kalkulator\\app\\calc_kred_view.html',
      1 => 1616499030,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6059d15a1bcf71_29634389 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7901759376059d15a1bc862_24263633', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.html"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, true);
}
/* {block 'content'} */
class Block_7901759376059d15a1bc862_24263633 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="container">

		<h2 class="text-center top-space">Kalkulator kredytowy </h2>
		<br/>

		<div class="row">
			
			<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/calc_kred.php" method="post" class="pure-form pure-form-stacked">
				<legend>Kalkulator kredytu</legend><br/><br/>

					<fieldset>
					<label for="x">Kwota: </label>
						<input id="x" type="text" name="kwota" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->x;?>
"/><br/>
					
					<label for="y">Lat: </label>
						<input id="y" type="text" name="lat" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->y;?>
"/><br/>
					
					<label for="op">Oprocentowanie: </label>
						<input id="op" type="text" name="oprocentowanie" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->op;?>
"/><br/>
						<button type="submit" value="Oblicz" class="pure-button pure-button-primary">Oblicz</button>
					</fieldset>
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
