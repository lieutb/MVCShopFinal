<?php
/* Smarty version 3.1.30, created on 2018-05-14 10:13:21
  from "C:\wamp64\www\MVCShopFinal\View\template\sanpham\v_thump_san_pham.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5af96141e3b087_61600764',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a491682e8dbba585a35ff0818985b91d72366ebc' => 
    array (
      0 => 'C:\\wamp64\\www\\MVCShopFinal\\View\\template\\sanpham\\v_thump_san_pham.tpl',
      1 => 1525287148,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5af96141e3b087_61600764 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['sanpham']->value)) {?>
<div class="row">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sanpham']->value, 'sp');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sp']->value) {
?>
        <div class="col-md-3">
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
<?php }
}
}
