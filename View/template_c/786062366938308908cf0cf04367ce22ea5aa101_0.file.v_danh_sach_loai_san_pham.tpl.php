<?php
/* Smarty version 3.1.30, created on 2018-05-14 10:18:57
  from "C:\wamp64\www\MVCShopFinal\View\template\sanpham\v_danh_sach_loai_san_pham.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5af962916615f9_48692368',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '786062366938308908cf0cf04367ce22ea5aa101' => 
    array (
      0 => 'C:\\wamp64\\www\\MVCShopFinal\\View\\template\\sanpham\\v_danh_sach_loai_san_pham.tpl',
      1 => 1525287148,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layoutAdmin/master.tpl' => 1,
  ),
),false)) {
function content_5af962916615f9_48692368 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13285af9629165c580_45094601', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layoutAdmin/master.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_13285af9629165c580_45094601 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              <h1 align="center" class="text-info">DANH SÁCH LOẠI SẢN PHẨM</h1>
                          </header>
                          <div class="panel-body">

                                <table class="table">
                                <thead>
                                  <tr>
                                    <th>Mã loại</th>
                                    <th>Tên loại</th>
                                    <th>Tên loại url</th>
                                    <th>Mã loại cha</th>
                                    <th>Hình</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DSLoaiSanPham']->value, 'sp');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sp']->value) {
?>
                                      <tr>
                                        <td><?php echo $_smarty_tpl->tpl_vars['sp']->value['ma_loai'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['sp']->value['ten_loai'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['sp']->value['ten_loai_url'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['sp']->value['ma_loai_cha'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['sp']->value['hinh'];?>
</td>
                                        <td><a href="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
quan-tri/sua-loai-san-pham/<?php echo $_smarty_tpl->tpl_vars['sp']->value['ma_loai'];?>
">Sửa</a></td>
                                        <td><a onclick="return confirm('Bạn có chắc chắn muốn xoá sản phẩm này?')" href="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
quan-tri/xoa-loai-san-pham/<?php echo $_smarty_tpl->tpl_vars['sp']->value['ma_loai'];?>
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
