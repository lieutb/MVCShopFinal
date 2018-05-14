<?php
/* Smarty version 3.1.30, created on 2018-05-14 10:18:01
  from "C:\wamp64\www\MVCShopFinal\View\template\nguoi_dung\v_dang_nhap.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5af96259be9a32_69817600',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05c6b12a24add12fd3a54abdcea937013cfcd74f' => 
    array (
      0 => 'C:\\wamp64\\www\\MVCShopFinal\\View\\template\\nguoi_dung\\v_dang_nhap.tpl',
      1 => 1525287148,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/master.tpl' => 1,
  ),
),false)) {
function content_5af96259be9a32_69817600 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_54025af96259b91002_73150067', 'title');
?>
 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_62195af96259b9a742_71970165', 'keywords');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_251285af96259be3466_30904822', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout/master.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_54025af96259b91002_73150067 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Đăng nhập vào tài khoản của bạn - DTGear Shop - Shop Gaming Gear HCM<?php
}
}
/* {/block 'title'} */
/* {block 'keywords'} */
class Block_62195af96259b9a742_71970165 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Bai viet cong nghe cua dtgearshop<?php
}
}
/* {/block 'keywords'} */
/* {block 'content'} */
class Block_251285af96259be3466_30904822 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="container">
        <form class="form-horizontal" role="form" method="POST" action="">
            <div class="row" style="padding-top:3em">
                <div class="col-md-3 col-sm-3"></div>
                <div class="col-md-6 col-sm-6">
                    <h2 align="center" style="padding-bottom:1em">Đăng nhập vào tài khoản của bạn</h2>
                    <hr>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-3 col-sm-3"></div>
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <h5>Tên đăng nhập</h5>
                        <div class="">
                            <input type="text" class="form-control" placeholder="Tên đăng nhập..." name="ten_dn" 
                        value="<?php if (isset($_POST['ten_dn'])) {
echo $_POST['ten_dn'];
}?>">
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-3"></div>
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <h5>Mật khẩu</h5>
                        <div class="">
                            <input type="password" class="form-control" placeholder="Mật khẩu..." name="mat_khau">
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                        <!-- Put password error message here form-check-input -->    
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-3"></div>
                <div class="col-md-6 col-sm-6">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" <?php if (isset($_POST['chkGhiNho'])) {?> checked="checked" <?php }?> name="chkGhiNho"> Ghi nhớ
                        </label>
                    </div>
                </div>
            </div>
            
            <hr />
            
            <div class="row">
                <div class="col-md-3"></div>
                <div align="center" class="col-md-6" style="padding-bottom:3em">
                	<?php if (isset($_smarty_tpl->tpl_vars['err']->value)) {?>
                        <p class="login-box-msg text-danger"><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</p>
                    <?php }?>
                	<a class="btn btn-link" href="#">Quên mật khẩu?</a>
                    <a class="btn btn-link" href="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
dang-ky-tai-khoan.html">Đăng ký tài khoản</a><br>
					
                    <button type="submit" class="btn btn-success">Đăng nhập</button>
                     
                </div>
            </div>
            
        </form>
    </div>
<?php
}
}
/* {/block 'content'} */
}
