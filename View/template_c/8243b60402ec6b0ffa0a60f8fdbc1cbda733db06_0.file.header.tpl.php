<?php
/* Smarty version 3.1.30, created on 2018-05-14 10:13:21
  from "C:\wamp64\www\MVCShopFinal\View\template\layout\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5af96141bfe8c0_57563128',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8243b60402ec6b0ffa0a60f8fdbc1cbda733db06' => 
    array (
      0 => 'C:\\wamp64\\www\\MVCShopFinal\\View\\template\\layout\\header.tpl',
      1 => 1525287148,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5af96141bfe8c0_57563128 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container header">
    <div class="row">
        <div class="col-md-4 col-sm-4 logo">
            <a href="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
">
                <img src="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
Public/images/banner/logo_01.png" width="100%"/>
            </a>
        </div>
        
        <div class="col-md-4 col-sm-4">
            <form class="form-inline" action="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
san-pham/tim-kiem-san-pham.html" method="post">
                <div class="form-group mx-sm-1 mb-2">
                	<input type="text" class="form-control" id="txtsearch" name="txtsearch" placeholder="Nhập từ khóa muốn tìm...">
                </div>
            	<button type="submit" class="btn btn-danger mb-2" name="btnsearch">Tìm</button>
            </form>
        </div>    
        
        <div class="col-md-1 col-sm-1 cart">
            <a href="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
khach-hang/gio-hang.html"> 
                <img src="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
public/images/banner/icon-cart.png" alt="Giỏ hàng" title="Giỏ hàng" width="26px"/>
                <p style="font-size:19px" class="text-hover">
                    <?php if (!isset($_smarty_tpl->tpl_vars['so_luong']->value) || $_smarty_tpl->tpl_vars['so_luong']->value == 0) {?>
                        &nbsp;
                    <?php } else { ?>
                        (<?php echo $_smarty_tpl->tpl_vars['so_luong']->value;?>
)
                    <?php }?>
                </p>
            </a>
        </div>

        <?php if (!isset($_SESSION['nguoi_dung'])) {?>
        <div class="col-md-3 col-sm-3 cart"> 
        	<div class="row">
            	<div class="col-md-7 col-sm-7">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
dang-nhap.html">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
Public/images/banner/login.gif" width="25px" style="margin-left:10px"/>
                        <p style="font-size:15px; padding-left:2px" class="text-hover">Đăng nhập</p>
                    </a>
            	</div>
                <div class="col-md-5 col-sm-7">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
dang-ky-tai-khoan.html">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
Public/images/banner/login.gif" width="25px" style="margin-left:10px"/>
                        <p style="font-size:14px; padding-left:2px" class="text-hover">Đăng ký</p>
                    </a>
            	</div>
            </div>
        </div>

        <?php } else { ?>
        <div class="col-md-2 col-sm-2 cart">    
                <img src="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
Public/images/banner/user.png" alt="<?php echo $_SESSION['ten'];?>
" title="<?php echo $_SESSION['ten'];?>
" width="23px"/>
                <p style="font-size:15px;"><?php echo $_smarty_tpl->tpl_vars['ten']->value;?>
</p>
                
        </div>
        
        <div class="col-md-1 col-sm-1 cart"> 
            <a href="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
dang_xuat.php">
                <img src="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
Public/images/banner/logout.gif" width="20px" alt="Đăng xuất" title="Đăng xuất"/>
            </a>  
        </div>
        
        
        <?php }?>
    </div>  

</div>
<?php }
}
