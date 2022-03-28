<?php
/* Smarty version 3.1.30, created on 2022-03-28 22:41:58
  from "C:\xampp\htdocs\php_04_uproszczony\app\CalcView.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_62421d96cd5795_54366597',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd51fc2285b5d51197501c8df84d2bd1087254173' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_04_uproszczony\\app\\CalcView.html',
      1 => 1648500117,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../templates/main.html' => 1,
  ),
),false)) {
function content_62421d96cd5795_54366597 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_167415255262421d96cc7040_40025672', 'header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_59022338462421d96cc78a8_05335608', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_148321504662421d96cd5378_73238985', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../templates/main.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'header'} */
class Block_167415255262421d96cc7040_40025672 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<p>KALKUALTOR </p> <?php
}
}
/* {/block 'header'} */
/* {block 'footer'} */
class Block_59022338462421d96cc78a8_05335608 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Kalkulator obliczania rat<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_148321504662421d96cd5378_73238985 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h3>Kalkulator obliczania rat kredytu ! </h2>


<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/calc.php" method="post">
	<fieldset>
		<label for="kw">Kwota kredytu</label>
		<input id="kw" type="number" min="1000" max="100000" placeholder="1-100000" name="kw" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->x;?>
">
	<br>
		<label style="color: white;" for="rt">podaj ilość rat</label>
		<input type="range" min="3" max="36" step="3" name="rt" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->y;?>
" oninput="this.nextElementSibling.value = this.value" >
		<output  style="color: white;"><?php echo $_smarty_tpl->tpl_vars['form']->value->y;?>
</output>
	<br><br>
		<label for="op">oprocentowanie</label>
		<input placeholder="1-15%" id="op" type="number" min="1.0" max="15.0" name="op" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->op;?>
">
	</fieldset>
	<button type="submit" class="pure-button pure-button-primary">Oblicz</button>
</form>




<div class="messages">

	
	<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
		<h4>Wystąpiły błędy: </h4>
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
		Miesięczna rata wynosi: <?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>
<br>
		Prowizja to: <?php echo $_smarty_tpl->tpl_vars['res']->value->prowizja;?>
<br>
		Kwota do spłaty: <?php echo $_smarty_tpl->tpl_vars['res']->value->kwotaend;?>
<br> 
		</p>
	<?php }?>

</div>

<?php
}
}
/* {/block 'content'} */
}
