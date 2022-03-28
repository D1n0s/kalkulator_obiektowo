<?php
/* Smarty version 4.1.0, created on 2022-03-28 22:26:09
  from 'C:\xampp\htdocs\php_04_uproszczony\app\CalcView.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624219e1b67ba7_76333030',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7207b44e305dc540a073712b3f6acf92d5d7cb10' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_04_uproszczony\\app\\CalcView.html',
      1 => 1648145817,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_624219e1b67ba7_76333030 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_348905220624219e1b59f66_81544749', 'header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_288832145624219e1b5ae00_83940392', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_804278364624219e1b5b3f4_83817309', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'header'} */
class Block_348905220624219e1b59f66_81544749 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_348905220624219e1b59f66_81544749',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<p>KALKUALTOR </p> <?php
}
}
/* {/block 'header'} */
/* {block 'footer'} */
class Block_288832145624219e1b5ae00_83940392 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_288832145624219e1b5ae00_83940392',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Kalkulator obliczania rat<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_804278364624219e1b5b3f4_83817309 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_804278364624219e1b5b3f4_83817309',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h3>Kalkulator obliczania rat kredytu ! </h2>


<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php" method="post">
	<fieldset>
		<label for="kw">Kwota kredytu</label>
		<input id="kw" type="number" min="1000" max="100000 placeholder="wartość x" name="kw" value="<?php echo $_smarty_tpl->tpl_vars['def']->value['x'];?>
">
	<br>
		<label style="color: white;" for="rt">podaj ilość rat</label>
		<input type="range" min="3" max="36" step="3" name="rt" value="<?php echo $_smarty_tpl->tpl_vars['def']->value['y'];?>
" oninput="this.nextElementSibling.value = this.value" >
		<output style="color: white;"><?php echo $_smarty_tpl->tpl_vars['def']->value['y'];?>
</output>
	<br><br>
		<label for="op">oprocentowanie</label>
		<input id="op" type="number" min="1.0" max="15.0" name="op" value="<?php echo $_smarty_tpl->tpl_vars['def']->value['op'];?>
">
	</fieldset>
	<button type="submit" class="pure-button pure-button-primary">Oblicz</button>
</form>




<div class="messages">

<?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
	<?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?> 
		<h4>Wystąpiły błędy: </h4>
		<ol class="err">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
	<?php }
}?>


<?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
	<h4>Wynik</h4>
	<p class="res">
	Miesięczna rata wynosi :  <?php echo $_smarty_tpl->tpl_vars['result']->value;?>
 <br>
	Prowizja wynosi  :  <?php echo $_smarty_tpl->tpl_vars['wynik']->value['prowizja'];?>
 zł <br>
	kwota do spłaty  :  <?php echo $_smarty_tpl->tpl_vars['wynik']->value['kwotaend'];?>
  zł
	</p>

<?php }?>

</div>

<?php
}
}
/* {/block 'content'} */
}
