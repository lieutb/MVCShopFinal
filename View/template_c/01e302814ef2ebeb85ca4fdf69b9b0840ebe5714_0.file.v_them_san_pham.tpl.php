<?php
/* Smarty version 3.1.30, created on 2018-05-14 10:19:10
  from "C:\wamp64\www\MVCShopFinal\View\template\sanpham\v_them_san_pham.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5af9629eb32792_63316473',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01e302814ef2ebeb85ca4fdf69b9b0840ebe5714' => 
    array (
      0 => 'C:\\wamp64\\www\\MVCShopFinal\\View\\template\\sanpham\\v_them_san_pham.tpl',
      1 => 1525287148,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layoutAdmin/master.tpl' => 1,
  ),
),false)) {
function content_5af9629eb32792_63316473 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_286675af9629eb28d08_72631921', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layoutAdmin/master.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_286675af9629eb28d08_72631921 extends Smarty_Internal_Block
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
                              <h1 align="center" class="text-info">THÊM SẢN PHẨM</h1>
                          </header>
                          <div class="panel-body">
                            <h3 align="center"><?php echo $_smarty_tpl->tpl_vars['dataErr']->value['err'];?>
</h3>
                              <div class="form">
                                  <form class="form-validate form-horizontal" id="feedback_form" method="post" action="" enctype="multipart/form-data">
                                  
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Tên sản phẩm
                                          <span class="required"><?php echo $_smarty_tpl->tpl_vars['dataErr']->value['ten_san_pham'];?>
</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="ten_id" name="ten_san_pham" type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['ten_san_pham'];?>
"/>
                                          </div>
                                      </div>
                                      <!--ten_mon_url-->
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Tên URL 
                                          <span class="required"><?php echo $_smarty_tpl->tpl_vars['dataErr']->value['ten_san_pham_url'];?>
</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="ten_id_url" name="ten_san_pham_url"  type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['ten_san_pham_url'];?>
"/>
                                          </div>
                                      </div>
                                       <!--ten_mon_url-->
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Loại sản phẩm</label>
                                          <div class="col-lg-10">
                                              <select name="slMa_loai">
                                                <?php if ($_smarty_tpl->tpl_vars['DSLoaiMonAn']->value) {?>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DSLoaiMonAn']->value, 'itemSL');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['itemSL']->value) {
?>
                                                        <?php $_smarty_tpl->_assignInScope('LoaiChaSL', $_smarty_tpl->tpl_vars['itemSL']->value[0]);
?>
                                                        <?php $_smarty_tpl->_assignInScope('DSLoaiConSL', $_smarty_tpl->tpl_vars['itemSL']->value[1]);
?>
                                                        <optgroup label="<?php echo $_smarty_tpl->tpl_vars['LoaiChaSL']->value['ten_loai'];?>
">
                                                            <?php if ($_smarty_tpl->tpl_vars['DSLoaiConSL']->value) {?>
                                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DSLoaiConSL']->value, 'LoaiConSL');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['LoaiConSL']->value) {
?>
                                                                    
                                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['LoaiConSL']->value['ma_loai'];?>
" 
                                                                        <?php if ($_smarty_tpl->tpl_vars['LoaiConSL']->value['ma_loai'] == $_smarty_tpl->tpl_vars['data']->value['ma_loai']) {?> selected="selected" <?php }?>
                                                                        ><?php echo $_smarty_tpl->tpl_vars['LoaiConSL']->value['ten_loai'];?>

                                                                    </option>

                                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                                            <?php }?>
                                                        </optgroup>
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
                                          <label for="cname" class="control-label col-lg-2">Đơn giá 
                                          <span class="required"><?php echo $_smarty_tpl->tpl_vars['dataErr']->value['don_gia'];?>
</span></label>
                                          <div class="col-lg-4">
                                              <input class="form-control" id="don_gia" name="don_gia" type="number" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['don_gia'];?>
"/>
                                          </div>
                                      </div>

                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Hình
                                          <span class="required"><?php echo $_smarty_tpl->tpl_vars['dataErr']->value['hinh'];?>
</span></label>
                                          <div class="col-lg-10">
                                              <input type="file" name="hinh"/>
                                          </div>
                                      </div>

                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Nội Dung Tóm Tắt 
                                          <span class="required"><?php echo $_smarty_tpl->tpl_vars['dataErr']->value['mo_ta_tom_tat'];?>
</span></label>
                                          <div class="col-lg-10">
                                              <textarea name="mo_ta_tom_tat" class="form-control"><?php echo $_smarty_tpl->tpl_vars['data']->value['mo_ta_tom_tat'];?>
</textarea>                                             
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Nội Dung Chi tiết 
                                          <span class="required"><?php echo $_smarty_tpl->tpl_vars['dataErr']->value['mo_ta_chi_tiet'];?>
</span></label>
                                          <div class="col-lg-10">
                                              <textarea name="mo_ta_chi_tiet" class="ckeditor"><?php echo $_smarty_tpl->tpl_vars['data']->value['mo_ta_chi_tiet'];?>
</textarea>                                             
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <input class="btn btn-primary" type="submit" value="Thêm" name="btnThem"/>
                                              <a href="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
quan-tri/san-pham/them-san-pham.html"><input class="btn btn-warning" type="button" value="Reset" name="btnReset"/></a>
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
