<?php
/* Smarty version 3.1.30, created on 2018-05-14 10:19:07
  from "C:\wamp64\www\MVCShopFinal\View\template\nguoi_dung\v_sua_tai_khoan.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5af9629ba25623_07805311',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb90613c94235821da4f305567b126128961dd30' => 
    array (
      0 => 'C:\\wamp64\\www\\MVCShopFinal\\View\\template\\nguoi_dung\\v_sua_tai_khoan.tpl',
      1 => 1525287148,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layoutAdmin/master.tpl' => 1,
  ),
),false)) {
function content_5af9629ba25623_07805311 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_71575af9629ba1d683_74802849', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layoutAdmin/master.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_71575af9629ba1d683_74802849 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
Public/ckeditor/ckeditor.js"><?php echo '</script'; ?>
>
    <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              <h1 align="center" class="text-info">SỬA TÀI KHOẢN</h1>
                          </header>
                          <div class="panel-body">
                            <h3 align="center"><?php echo $_smarty_tpl->tpl_vars['dataErr']->value['err'];?>
</h3>
                              <div class="form">
                                  <form class="form-validate form-horizontal" id="feedback_form" method="post" action="" enctype="multipart/form-data">
                                  
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Họ Tên
                                          <span class="required"><?php echo $_smarty_tpl->tpl_vars['dataErr']->value['ho_ten'];?>
</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="ho_ten" name="ho_ten" type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['ho_ten'];?>
"/>
                                          </div>
                                      </div>
                                      <!--ten_mon_url-->
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Tên Đăng Nhập
                                          <span class="required"><?php echo $_smarty_tpl->tpl_vars['dataErr']->value['ten_dang_nhap'];?>
</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="ten_dang_nhap" name="ten_dang_nhap"  type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['ten_dang_nhap'];?>
"/>
                                          </div>
                                      </div>

                                       <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Mật khẩu
                                          <span class="required"><?php echo $_smarty_tpl->tpl_vars['dataErr']->value['mat_khau'];?>
</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="mat_khau" name="mat_khau"  type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['mat_khau'];?>
"/>
                                          </div>
                                      </div>

                                       <!--ten_mon_url-->
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Loại người dùng</label>
                                          <div class="col-lg-10">
                                              <select name="slMa_loai">
                                               <?php if ($_smarty_tpl->tpl_vars['DSNguoiDung']->value) {?>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DSNguoiDung']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>   
                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['ma_loai_nguoi_dung'];?>
" 
                                                                  <?php if ($_smarty_tpl->tpl_vars['item']->value['ma_loai_nguoi_dung'] == $_smarty_tpl->tpl_vars['data']->value['ma_loai_nguoi_dung']) {?> selected="selected" <?php }?>
                                                                  ><?php echo $_smarty_tpl->tpl_vars['item']->value['ten_loai_nguoi_dung'];?>

                                                            </option>
                                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                                <?php }?>
                                              </select>
                                          </div>
                                      </div>
                                      <!--don_gia-->
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Email
                                          <span class="required"><?php echo $_smarty_tpl->tpl_vars['dataErr']->value['email'];?>
</span></label>
                                          <div class="col-lg-4">
                                              <input class="form-control" id="email" name="email" type="email" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['email'];?>
"/>
                                          </div>
                                      </div>

                                       <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Điện thoại
                                          <span class="required"><?php echo $_smarty_tpl->tpl_vars['dataErr']->value['dien_thoai'];?>
</span></label>
                                          <div class="col-lg-4">
                                              <input class="form-control" id="dien_thoai" name="dien_thoai" type="number" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['dien_thoai'];?>
"/>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <input class="btn btn-primary" type="submit" value="Thêm" name="btnSua"/>
                                              <a href="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
quan-tri/sua-tai-khoan/<?php echo $_smarty_tpl->tpl_vars['matk']->value;?>
"><input class="btn btn-warning" type="submit" value="Reset" name="btnReset"/></a>
                                          </div>
                                      </div>
                                  </form>
                              </div>

                          </div>
                      </section>
                  </div>
              </div>
<?php
}
}
/* {/block 'content'} */
}
