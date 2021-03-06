<?php
/* Smarty version 3.1.30, created on 2022-03-28 22:30:51
  from "C:\xampp\htdocs\php_04_uproszczony\app\CalcView.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_62421afb8c5ce9_38990831',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd51fc2285b5d51197501c8df84d2bd1087254173' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_04_uproszczony\\app\\CalcView.html',
      1 => 1648499446,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../templates/main.html' => 1,
  ),
),false)) {
function content_62421afb8c5ce9_38990831 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_44648400862421afb8b7799_25774218', 'header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_168829285662421afb8b7ff8_56546545', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_154457399462421afb8c5870_22208137', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../templates/main.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'header'} */
class Block_44648400862421afb8b7799_25774218 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<p>KALKUALTOR </p> <?php
}
}
/* {/block 'header'} */
/* {block 'footer'} */
class Block_168829285662421afb8b7ff8_56546545 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Kalkulator obliczania rat<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_154457399462421afb8c5870_22208137 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h3>Kalkulator obliczania rat kredytu ! </h2>


<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/calc.php" method="post">
	<fieldset>
		<label for="kw">Kwota kredytu</label>
		<input id="kw" type="number" min="1000" max="100000 placeholder="warto???? x" name="kw" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->x;?>
">
	<br>
		<label style="color: white;" for="rt">podaj ilo???? rat</label>
		<input type="range" min="3" max="36" step="3" name="rt" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->y;?>
" oninput="this.nextElementSibling.value = this.value" >
		<output style="color: white;"><?php echo $_smarty_tpl->tpl_vars['form']->value->y;?>
</output>
	<br><br>
		<label for="op">oprocentowanie</label>
		<input id="op" type="number" min="1.0" max="15.0" name="op" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->op;?>
">
	</fieldset>
	<button type="submit" class="pure-button pure-button-primary">Oblicz</button>
</form>




<div class="messages">

	
	<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
		<h4>Wyst??pi??y b????dy: </h4>
		<ol class="err">
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
		<ol class="inf">
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
		<h4>Wynik</h4>
		<p class="res">
		<?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

		</p>
	<?php }?>

</div>

<?php
}
}
/* {/block 'content'} */
}
