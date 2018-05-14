<?php
/* Smarty version 3.1.30, created on 2018-05-14 10:19:05
  from "C:\wamp64\www\MVCShopFinal\View\template\nguoi_dung\v_danh_sach_nguoi_dung.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5af962991c1432_52756263',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da896dc0bfcd8371b619c4f447cc8ef71e417266' => 
    array (
      0 => 'C:\\wamp64\\www\\MVCShopFinal\\View\\template\\nguoi_dung\\v_danh_sach_nguoi_dung.tpl',
      1 => 1525287148,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layoutAdmin/master.tpl' => 1,
  ),
),false)) {
function content_5af962991c1432_52756263 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_258235af962991bbc15_74689370', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layoutAdmin/master.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_258235af962991bbc15_74689370 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              <h1 align="center" class="text-info">DANH SÁCH TÀI KHOẢN</h1>
                          </header>
                          <div class="panel-body">

                                <table class="table">
                                <thead>
                                  <tr>
                                    <th>Mã người dùng</th>
                                    <th>Loại người dùng</th>
                                    <th>Họ Tên</th>
                                    <th>Tên đăng nhập</th>
                                    <th>Mật khẩu</th>
                                    <th>Email</th>
                                    <th>Điện thoại</th>
                                    <th>Ngày đăng ký</th>
                                  </tr>
                                </thead>
                                <tbody>
                                     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DSNguoiDung']->value, 'nd');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['nd']->value) {
?>
                                      <tr>
                                        <td><?php echo $_smarty_tpl->tpl_vars['nd']->value['ma_nguoi_dung'];?>
</td>
                                        <td><?php if ($_smarty_tpl->tpl_vars['nd']->value['ma_loai_nguoi_dung'] == 1) {?>Admin <?php } else { ?> Khách hàng <?php }?></td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['nd']->value['ho_ten'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['nd']->value['ten_dang_nhap'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['nd']->value['mat_khau'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['nd']->value['email'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['nd']->value['dien_thoai'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['nd']->value['ngay_dang_ky'];?>
</td>
                                        <td><a href="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
quan-tri/sua-tai-khoan/<?php echo $_smarty_tpl->tpl_vars['nd']->value['ma_nguoi_dung'];?>
">Sửa</a></td>
                                        <td><a onclick="return confirm('Bạn có chắc chắn muốn xoá sản phẩm này?')" href="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
quan-tri/xoa-tai-khoan/<?php echo $_smarty_tpl->tpl_vars['nd']->value['ma_nguoi_dung'];?>
">Xóa</a></td>
                                      </tr>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                </tbody>
                              </table>

                          </div>
                      </section>
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

              </div>
<?php
}
}
/* {/block 'content'} */
}
