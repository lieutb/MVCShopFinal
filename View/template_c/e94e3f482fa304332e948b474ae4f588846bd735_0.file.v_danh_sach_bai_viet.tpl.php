<?php
/* Smarty version 3.1.30, created on 2018-05-14 10:13:26
  from "C:\wamp64\www\MVCShopFinal\View\template\baiviet\v_danh_sach_bai_viet.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5af96146978ed8_01212785',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e94e3f482fa304332e948b474ae4f588846bd735' => 
    array (
      0 => 'C:\\wamp64\\www\\MVCShopFinal\\View\\template\\baiviet\\v_danh_sach_bai_viet.tpl',
      1 => 1525287148,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/master.tpl' => 1,
  ),
),false)) {
function content_5af96146978ed8_01212785 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_35315af96146909651_47443374', 'title');
?>
 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_270485af96146911b64_55175212', 'keywords');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_237455af96146972fe6_80861054', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout/master.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_35315af96146909651_47443374 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Tin Tức Công Nghệ, Bài Viết Shop DTGear - DTGear Shop - Shop Gaming Gear HCM<?php
}
}
/* {/block 'title'} */
/* {block 'keywords'} */
class Block_270485af96146911b64_55175212 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Bai viet cong nghe cua dtgearshop<?php
}
}
/* {/block 'keywords'} */
/* {block 'content'} */
class Block_237455af96146972fe6_80861054 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DSBV']->value, 'bv');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['bv']->value) {
?>
	<div class="container" style="margin-top: 20px">
        <div class="row">
            <div class="col-md-12">
                
                <div style="float: left" class="col-md-3">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
Public/images/banner/icon_lich.png" width="25px" style="float: left" />
                    <p><?php echo $_smarty_tpl->tpl_vars['bv']->value['ngay_xuat_ban'];?>
</p>
                </div>
                <div style="float: left" class="col-md-3">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
Public/images/banner/icon_folder.png" width="25px" style="float: left" />
                     <p><?php echo $_smarty_tpl->tpl_vars['bv']->value['ten_loai_bai_viet'];?>
</p>
                </div>
                <div>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
Public/images/banner/icon_view.png" width="25px" style="float: left" />
                    <p><?php echo $_smarty_tpl->tpl_vars['bv']->value['so_lan_xem'];?>
</p>
                </div>
                <h3 style="color:black"><?php echo $_smarty_tpl->tpl_vars['bv']->value['tieu_de'];?>
</h3>

                <hr/>
                <div class="row">
                    <div class="col-md-4">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
Public/images/bai_viet/<?php echo $_smarty_tpl->tpl_vars['bv']->value['hinh'];?>
" width="100%" />
                    </div>
                    <div class="col-md-8">
                        <p><?php echo $_smarty_tpl->tpl_vars['bv']->value['noi_dung_tom_tat'];?>
</p>
                    </div>
                        
                </div>

                <a href="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
bai-viet/<?php echo $_smarty_tpl->tpl_vars['bv']->value['tieu_de_bai_viet_url'];?>
-<?php echo $_smarty_tpl->tpl_vars['bv']->value['ma_bai_viet'];?>
.html" style="text-decoration: none; color:#ff6600">Đọc Thêm</a>
            </div>
        </div>
    </div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<?php if (isset($_smarty_tpl->tpl_vars['linkPage']->value)) {?>
    <div class="container">
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
    </div>
<?php }?>

<?php
}
}
/* {/block 'content'} */
}
