<?php
/* Smarty version 3.1.30, created on 2018-05-14 10:13:21
  from "C:\wamp64\www\MVCShopFinal\View\template\layout\nav.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5af96141d03e90_63850528',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2489e91ed90a1bd42aa041d38edaeeae61e6bad' => 
    array (
      0 => 'C:\\wamp64\\www\\MVCShopFinal\\View\\template\\layout\\nav.tpl',
      1 => 1525287148,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5af96141d03e90_63850528 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container-field" style="background-color: #f2f2f2">
    <div class="container">
        <nav class="navbar navbar-toggleable-md navbar-light">
              <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
">
                <img src="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
Public/images/banner/img_banner_04.jpg" width="150px" class="rounded">
              </a>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
    
                  <li class="nav-item dropdown " style="margin:0">
                            <a class="nav-link dropdown-toggle list"  href="#">
                                <strong style="color:black">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
Public/images/banner/red_list.png" width="21px">DANH MỤC
                                </strong>  
                            </a>
                            
                            <div class="dropdown-menu dropdown-content" style="margin:0">
                                <ul style="list-style-type:none; padding:0; transition: all 0.3s ease-out;">
                                <?php if ($_smarty_tpl->tpl_vars['DSLoaiSanPham']->value) {?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DSLoaiSanPham']->value, 'tenLoai');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tenLoai']->value) {
?>
        								                <?php $_smarty_tpl->_assignInScope('LoaiCha', $_smarty_tpl->tpl_vars['tenLoai']->value[0]);
?>
                                        <?php $_smarty_tpl->_assignInScope('DSLoaiCon', $_smarty_tpl->tpl_vars['tenLoai']->value[1]);
?>
                                        <li class="dropdown-submenu">
                                            <a class="border-bottom" href=""><?php echo $_smarty_tpl->tpl_vars['LoaiCha']->value['ten_loai'];?>
</a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                	<?php if ($_smarty_tpl->tpl_vars['DSLoaiCon']->value) {?>
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DSLoaiCon']->value, 'loaiCon');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['loaiCon']->value) {
?>
                                                            <a class="dropdown-item border-bottom" href="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
danh-muc/<?php echo $_smarty_tpl->tpl_vars['LoaiCha']->value['ten_loai_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['loaiCon']->value['ten_loai_url'];?>
-<?php echo $_smarty_tpl->tpl_vars['loaiCon']->value['ma_loai'];?>
.html"><?php echo $_smarty_tpl->tpl_vars['loaiCon']->value['ten_loai'];?>
</a>
                                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                                    <?php }?>
                                                </li> 
                                            </ul>
                                        </li>
        
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                <?php }?>
                                </ul>
                            </div>
                        </li>
    				
                    
                  <li class="nav-item">
                    <a class="nav-link text-dark" href="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
san-pham/danh-sach-san-pham.html"><b>Sản Phẩm</b></a>
                  </li>
                  <li class="nav-item" >
                    <a class="nav-link text-dark" href="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
bai-viet/danh-sach-bai-viet.html"><b>Bài Viết</b></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-danger" href="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
lien-he-chung-toi.html"><b>Liên Hệ</b></a>
                  </li>
                </ul>
              </div>
        </nav>
    </div>
</div>
<?php }
}
