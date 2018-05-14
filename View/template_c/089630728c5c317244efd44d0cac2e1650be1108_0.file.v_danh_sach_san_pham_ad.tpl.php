<?php
/* Smarty version 3.1.30, created on 2018-05-14 10:18:16
  from "C:\wamp64\www\MVCShopFinal\View\template\sanpham\v_danh_sach_san_pham_ad.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5af962681568a9_72760913',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '089630728c5c317244efd44d0cac2e1650be1108' => 
    array (
      0 => 'C:\\wamp64\\www\\MVCShopFinal\\View\\template\\sanpham\\v_danh_sach_san_pham_ad.tpl',
      1 => 1525287148,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layoutAdmin/master.tpl' => 1,
  ),
),false)) {
function content_5af962681568a9_72760913 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_283865af96268150708_62828043', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layoutAdmin/master.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_283865af96268150708_62828043 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              <h1 align="center" class="text-info">DANH SÁCH SẢN PHẨM</h1>
                          </header>
                          <div class="panel-body">

                                <table class="table">
                                <thead>
                                  <tr>
                                    <th>Mã sản phẩm</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Mã loại</th>
                                    <th>Đơn giá</th>
                                    <th>Hình</th>
                                    <th>Sản phẩm mới</th>
                                    <th>Số lần xem</th>
                                    <th>Ngày tạo</th>
                                    <th>Trả góp</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DSSanPham']->value, 'sp');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sp']->value) {
?>
                                      <tr>
                                        <td><?php echo $_smarty_tpl->tpl_vars['sp']->value['ma_san_pham'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['sp']->value['ten_san_pham'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['sp']->value['ma_loai'];?>
</td>
                                        <td><?php echo number_format($_smarty_tpl->tpl_vars['sp']->value['don_gia']);?>
</td>
                                        <td><img src="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
Public/images/hinh_san_pham/<?php echo $_smarty_tpl->tpl_vars['sp']->value['hinh'];?>
" width="50px" class="rounded"></td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['sp']->value['san_pham_moi'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['sp']->value['so_lan_xem'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['sp']->value['ngay_tao'];?>
</td>
                                        <td><a href="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
quan-tri/sua-san-pham/<?php echo $_smarty_tpl->tpl_vars['sp']->value['ma_san_pham'];?>
">Sửa</a></td>
                                        <td><a onclick="return confirm('Bạn có chắc chắn muốn xoá sản phẩm này?')" href="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
quan-tri/xoa-san-pham/<?php echo $_smarty_tpl->tpl_vars['sp']->value['ma_san_pham'];?>
">Xóa</a></td>
                                        <td><a href="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
quan-tri/tra-gop-san-pham/<?php echo $_smarty_tpl->tpl_vars['sp']->value['ma_san_pham'];?>
">Trả góp</a></td>
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
