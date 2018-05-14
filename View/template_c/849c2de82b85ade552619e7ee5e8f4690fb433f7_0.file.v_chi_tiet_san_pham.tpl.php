<?php
/* Smarty version 3.1.30, created on 2018-05-14 10:13:21
  from "C:\wamp64\www\MVCShopFinal\View\template\sanpham\v_chi_tiet_san_pham.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5af961419d8eb8_10899855',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '849c2de82b85ade552619e7ee5e8f4690fb433f7' => 
    array (
      0 => 'C:\\wamp64\\www\\MVCShopFinal\\View\\template\\sanpham\\v_chi_tiet_san_pham.tpl',
      1 => 1525287148,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/master.tpl' => 1,
    'file:sanpham/v_thump_san_pham.tpl' => 1,
  ),
),false)) {
function content_5af961419d8eb8_10899855 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_191915af96141993bf7_27014757', 'title');
?>
 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_239085af9614199d320_07320358', 'keywords');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_275975af961419d34a3_49728998', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout/master.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_191915af96141993bf7_27014757 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['san_pham']->value['ten_san_pham'];?>
 - DTGear Shop - Shop Gaming Gear HCM<?php
}
}
/* {/block 'title'} */
/* {block 'keywords'} */
class Block_239085af9614199d320_07320358 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Shop gaming gear noi tieng nhat ho chi minh<?php
}
}
/* {/block 'keywords'} */
/* {block 'content'} */
class Block_275975af961419d34a3_49728998 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="container">
		<div class="row">
      		<div class="col-md-12">
                <strong>
                    <h2 class="bg-header-product"><?php echo $_smarty_tpl->tpl_vars['san_pham']->value['ten_san_pham'];?>
</h2>
                </strong>
            </div>
		</div>
	</div>
    
    <br />

    
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<img class="rounded" src="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
Public/images/hinh_san_pham/<?php echo $_smarty_tpl->tpl_vars['san_pham']->value['hinh'];?>
" 
						width="100%" id="zoom"/>
			</div>

			<div class="col-md-6">
				<h5><?php echo $_smarty_tpl->tpl_vars['san_pham']->value['ten_san_pham'];?>
</h5>
				<p>Số lượt xem : <?php echo $_smarty_tpl->tpl_vars['san_pham']->value['so_lan_xem'];?>
</p>
				<strong><p style="font-size: 30px" class="text-danger">Giá: <?php echo number_format($_smarty_tpl->tpl_vars['san_pham']->value['don_gia']);?>

					<sup style="font-style: italic; text-decoration: underline;">đ</sup></p></strong> 

				<hr/>
				<p> <?php echo $_smarty_tpl->tpl_vars['san_pham']->value['mo_ta_chi_tiet'];?>
 </p>
				<div class="form-inline">
                	<input type="number" value="1" name="txtSoLuong" id="txtSoLuong"
                     class="form-control" style="width:90px; text-align:center; margin-right:10px" min="1" max="10"/>
                     <button class="btn btn-primary" id="btnMua" name="<?php echo $_smarty_tpl->tpl_vars['san_pham']->value['ma_san_pham'];?>
">Thêm vào giỏ hàng</button>
                </div>
			</div>
		</div>
	</div>
	<br />

	<div class="container">
    	<div class="row">
        	<div class="col-md-12" style="">
            	<div class="bg-header">	
            		<h4 class="bg-danger text-white" style="padding:10px; width:320px"><i>SẢN PHẨM THEO LOẠI</i></h4>
                </div>
            </div>
        </div>
		
        <br />
        <?php $_smarty_tpl->_subTemplateRender("file:sanpham/v_thump_san_pham.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	</div>
<?php
}
}
/* {/block 'content'} */
}
