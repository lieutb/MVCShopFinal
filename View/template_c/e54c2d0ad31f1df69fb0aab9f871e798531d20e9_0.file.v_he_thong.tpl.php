<?php
/* Smarty version 3.1.30, created on 2018-05-14 10:18:08
  from "C:\wamp64\www\MVCShopFinal\View\template\nguoi_dung\v_he_thong.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5af962606817d1_61946606',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e54c2d0ad31f1df69fb0aab9f871e798531d20e9' => 
    array (
      0 => 'C:\\wamp64\\www\\MVCShopFinal\\View\\template\\nguoi_dung\\v_he_thong.tpl',
      1 => 1525287148,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layoutAdmin/master.tpl' => 1,
  ),
),false)) {
function content_5af962606817d1_61946606 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_252685af9626067c842_46312832', 'content');
?>
 <?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layoutAdmin/master.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_252685af9626067c842_46312832 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

 	<div class="container"> 
		<div class="row">
			<div class="col-md-12">
				<strong><h1 align="center" class="text-info">CHÀO MỪNG ADMIN <span class="text-danger"><?php echo $_smarty_tpl->tpl_vars['ten']->value;?>
</span><br/>ĐÃ ĐẾN VỚI TRANG HỆ THỐNG CỦA DT GEAR SHOP</h1></strong>
			</div>
		</div>
 	</div>
<?php
}
}
/* {/block 'content'} */
}
