<?php
/* Smarty version 3.1.30, created on 2018-05-14 10:13:25
  from "C:\wamp64\www\MVCShopFinal\View\template\sanpham\v_danh_sach_san_pham.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5af961454c2cd5_73338331',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a258ed946aa3c0a6871e60798ae96f6782b6d3a7' => 
    array (
      0 => 'C:\\wamp64\\www\\MVCShopFinal\\View\\template\\sanpham\\v_danh_sach_san_pham.tpl',
      1 => 1525287148,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/master.tpl' => 1,
    'file:sanpham/v_doc_danh_sach_san_pham.tpl' => 1,
  ),
),false)) {
function content_5af961454c2cd5_73338331 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_67065af96145496f38_23839108', 'title');
?>
 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_49955af9614549fb06_91284594', 'keywords');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_268805af961454beeb7_81029495', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout/master.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_67065af96145496f38_23839108 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Sản phẩm shop DTGear - DTGear Shop - Shop Gaming Gear HCM<?php
}
}
/* {/block 'title'} */
/* {block 'keywords'} */
class Block_49955af9614549fb06_91284594 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Shop gaming gear noi tieng nhat ho chi minh<?php
}
}
/* {/block 'keywords'} */
/* {block 'content'} */
class Block_268805af961454beeb7_81029495 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="container" style="margin-top: 20px;">
    	<div class="row" style="margin-bottom: 15px;">
        	<div class="col-md-12">
            	<div class="bg-header">	
            		<h4 class="bg-danger text-white" style="padding:10px; width:60%"><i>DANH SÁCH SẢN PHẨM</i></h4>
                </div>
            </div>
        </div>
		
        <br />
        <?php $_smarty_tpl->_subTemplateRender("file:sanpham/v_doc_danh_sach_san_pham.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php if (isset($_smarty_tpl->tpl_vars['linkPage']->value)) {?>
        <div class="row">
            <div class="col-md-4">
            
            </div>
            <div align="center" class="col-md-5">
                <p><?php echo $_smarty_tpl->tpl_vars['linkPage']->value;?>
</p>
            </div>
            <div class="col-md-3">
            
            </div>
        </div>
        <?php }?>
	</div>
<?php
}
}
/* {/block 'content'} */
}
