<?php
/* Smarty version 3.1.30, created on 2018-05-14 10:19:03
  from "C:\wamp64\www\MVCShopFinal\View\template\sanpham\v_them_loai_san_pham.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5af962971ddc55_64251375',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37a0d41ebcb51f180f25a8f0341fedf6266ebc7e' => 
    array (
      0 => 'C:\\wamp64\\www\\MVCShopFinal\\View\\template\\sanpham\\v_them_loai_san_pham.tpl',
      1 => 1525287148,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layoutAdmin/master.tpl' => 1,
  ),
),false)) {
function content_5af962971ddc55_64251375 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_59345af962971d6bd5_68333784', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layoutAdmin/master.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_59345af962971d6bd5_68333784 extends Smarty_Internal_Block
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
                              <h1 align="center" class="text-info">THÊM LOẠI SẢN PHẨM</h1>
                          </header>
                          <div class="panel-body">
                            <h3 align="center"><?php echo $_smarty_tpl->tpl_vars['dataErr']->value['err'];?>
</h3>
                              <div class="form">
                                  <form class="form-validate form-horizontal" id="feedback_form" method="post" action="" enctype="multipart/form-data">
                                  
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Tên Loại
                                          <span class="required"><?php echo $_smarty_tpl->tpl_vars['dataErr']->value['ten_loai'];?>
</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="ten_id" name="ten_loai" type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['ten_loai'];?>
"/>
                                          </div>
                                      </div>
                                      <!--ten_mon_url-->
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Tên URL 
                                          <span class="required"><?php echo $_smarty_tpl->tpl_vars['dataErr']->value['ten_loai_url'];?>
</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="ten_id_url" name="ten_loai_url"  type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['ten_loai_url'];?>
"/>
                                          </div>
                                      </div>
                                       <!--ten_mon_url-->
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Mã loại sản phẩm cha</label>
                                          <div class="col-lg-10">
                                              <select name="slMa_loai">
                                                <option value="0">0</option>
                                                <?php if ($_smarty_tpl->tpl_vars['DSLoaiSp']->value) {?>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DSLoaiSp']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>   
                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['ma_loai'];?>
" 
                                                                  <?php if ($_smarty_tpl->tpl_vars['item']->value['ma_loai'] == $_smarty_tpl->tpl_vars['data']->value['ma_loai_cha']) {?> selected="selected" <?php }?>
                                                                  ><?php echo $_smarty_tpl->tpl_vars['item']->value['ten_loai'];?>

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
                                          <label for="cname" class="control-label col-lg-2">Hình
                                          <span class="required"><?php echo $_smarty_tpl->tpl_vars['dataErr']->value['hinh'];?>
</span></label>
                                          <div class="col-lg-10">
                                              <input type="file" name="hinh"/>
                                          </div>
                                      </div>

        
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Mô Tả
                                          <span class="required"></span></label>
                                          <div class="col-lg-10">
                                              <textarea name="mo_ta" class="ckeditor"><?php echo $_smarty_tpl->tpl_vars['data']->value['mo_ta'];?>
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
