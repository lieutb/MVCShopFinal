<?php
/* Smarty version 3.1.30, created on 2018-05-14 10:13:47
  from "C:\wamp64\www\MVCShopFinal\View\template\v_trang_chu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5af9615bac3be7_23231478',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f29fa4c454971d1a4f606e527ccc4c20efdba45' => 
    array (
      0 => 'C:\\wamp64\\www\\MVCShopFinal\\View\\template\\v_trang_chu.tpl',
      1 => 1525287148,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/master.tpl' => 1,
    'file:layout/banner.tpl' => 1,
    'file:sanpham/v_thump_san_pham.tpl' => 1,
  ),
),false)) {
function content_5af9615bac3be7_23231478 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
<link rel="stylesheet" type="text/css" href="Public/dist/css/bootstrap.css"/>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_274595af9615ba20a75_29312754', 'title');
?>
 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_178565af9615ba29489_59638841', 'keywords');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_253375af9615ba343b5_89479958', 'banner');
?>
 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_128625af9615babba65_19595667', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout/master.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_274595af9615ba20a75_29312754 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Máy Tính PC, Laptop Gaming MSI & ASUS chính hãng - DTGear<?php
}
}
/* {/block 'title'} */
/* {block 'keywords'} */
class Block_178565af9615ba29489_59638841 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Shop gaming gear noi tieng nhat ho chi minh<?php
}
}
/* {/block 'keywords'} */
/* {block 'banner'} */
class Block_253375af9615ba343b5_89479958 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:layout/banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'banner'} */
/* {block 'content'} */
class Block_128625af9615babba65_19595667 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="container" style="margin-top: 20px;">
    	<div class="row" style="margin-bottom: 20px;">
        	<div class="col-md-12">
            	<div class="bg-header">	
            		<h4 class="bg-danger text-white" style="padding:10px; width:60%"><i>SẢN PHẨM HOT</i>
                        </h4>
                </div>
            </div>
        </div>
		
        <br />
        <?php $_smarty_tpl->_subTemplateRender("file:sanpham/v_thump_san_pham.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	</div>

    <div class="container">
        <div class="row">
            <div class="col-md-3" align="center" style="margin-bottom: 10px;">
                <img src="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
Public/images/banner/img_banner_05.png" class="rounded img-hover">
            </div>

            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-12"  style="margin-bottom: 15px;">
                        <div class="bg-header"> 
                            <h4 class="bg-danger text-white" style="padding:10px; width:60%"><i>LAPTOP CHÍNH HÃNG GIÁ TỐT</i>
                                </h4>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 20px">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sanphamlaptop']->value, 'sp');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sp']->value) {
?>
                        <div class="col-md-4">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
san-pham/<?php echo $_smarty_tpl->tpl_vars['sp']->value['ten_san_pham_url'];?>
-<?php echo $_smarty_tpl->tpl_vars['sp']->value['ma_san_pham'];?>
.html" class="nav-link" style="padding:0 0 1.5em 0">
                                <div class="card product overlay-container">
                                    <div>
										<img class="card-img-top rounded" width="100%" 
                                    src="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
Public/images/hinh_san_pham/<?php echo $_smarty_tpl->tpl_vars['sp']->value['hinh'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['sp']->value['ten_san_pham'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['sp']->value['ten_san_pham'];?>
" height="240px;" />
										<div class="overlay-product">
											<div class="text">
												<span><i>Click để xem chi tiết</i></span>
											</div>
										</div>
									
									</div>
									<div class="card-block">
                                        <h5 class="card-title" style="height:60px"><?php echo $_smarty_tpl->tpl_vars['sp']->value['ten_san_pham'];?>
</h5>
                                        <p class="card-text"><strong style="color:#F00">Giá: <?php echo number_format($_smarty_tpl->tpl_vars['sp']->value['don_gia']);?>
<u>đ</u></strong></p>    
                                    </div>
									
                                </div>
                            </a>
                        </div>
                    
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-12" style="margin-bottom: 15px;">
                        <div class="bg-header"> 
                            <h4 class="bg-danger text-white" style="padding:10px; width:60%"><i>SẢN PHẨM TRẢ GÓP LÃI XUẤT 0%</i>
                                </h4>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 20px">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sanphamtragop']->value, 'sp');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sp']->value) {
?>
                        <div class="col-md-4">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
san-pham/<?php echo $_smarty_tpl->tpl_vars['sp']->value['ten_san_pham_url'];?>
-<?php echo $_smarty_tpl->tpl_vars['sp']->value['ma_san_pham'];?>
.html" class="nav-link" style="padding:0 0 1.5em 0">
                                <div class="card product overlay-container">
									<div>
										<img class="card-img-top rounded" width="100%" 
										src="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
Public/images/hinh_san_pham/<?php echo $_smarty_tpl->tpl_vars['sp']->value['hinh'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['sp']->value['ten_san_pham'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['sp']->value['ten_san_pham'];?>
" height="240px;" />
										<div class="overlay-product">
											<div class="text">
												<span><i>Click để xem chi tiết</i></span>
											</div>
										</div>
									</div>
									<div class="card-block">
                                        <h5 class="card-title" style="height:60px"><?php echo $_smarty_tpl->tpl_vars['sp']->value['ten_san_pham'];?>
</h5>
                                        <p class="card-text"><strong style="color:#F00">Giá: <?php echo number_format($_smarty_tpl->tpl_vars['sp']->value['don_gia']);?>
<u>đ</u></strong></p>    
                                    </div>
                                </div>
                            </a>
                        </div>
                    
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </div>
            </div>

            <div class="col-md-3"  align="center">
                <img src="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
Public/images/banner/img_banner_06.jpg"
                     class="rounded img-hover" width="260px" height="450px">
            </div>
        </div>
    </div>

   
<?php
}
}
/* {/block 'content'} */
}
