<?php
/* Smarty version 3.1.30, created on 2018-05-14 10:18:08
  from "C:\wamp64\www\MVCShopFinal\View\template\layoutAdmin\aside.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5af9626085e778_64149147',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e258ea26c6d976f280a1e3d1f55e5cfb11e7e6fc' => 
    array (
      0 => 'C:\\wamp64\\www\\MVCShopFinal\\View\\template\\layoutAdmin\\aside.tpl',
      1 => 1525287148,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5af9626085e778_64149147 (Smarty_Internal_Template $_smarty_tpl) {
?>
<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
Public/images/banner/user.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?php echo $_smarty_tpl->tpl_vars['ten']->value;?>
</p>
              <a href="#"><i class="fa fa-circle text-success"></i>Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">DANH MỤC QUẢN LÝ</li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Sản Phẩm</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
quan-tri/danh-sach-san-pham.html"><i class="fa fa-circle-o"></i> Danh Sách Sản Phẩm</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
quan-tri/them-san-pham.html"><i class="fa fa-circle-o"></i> Thêm Sản Phẩm</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Loại sản phẩm</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
quan-tri/danh-sach-loai-san-pham.html"><i class="fa fa-circle-o"></i>Danh Sách Loại sản phẩm</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
quan-tri/them-loai-san-pham.html"><i class="fa fa-circle-o"></i>Thêm Loại sản phẩm</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
quan-tri/don-dat-hang.html">
                <i class="fa fa-dashboard"></i> <span>Đơn đặt hàng</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Tài khoản</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
quan-tri/danh-sach-tai-khoan.html"><i class="fa fa-circle-o"></i>Danh sách tài khoản</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
quan-tri/them-tai-khoan.html"><i class="fa fa-circle-o"></i>Thêm tài khoản</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Bài viết</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
quan-tri/danh-sach-bai-viet.html"><i class="fa fa-circle-o"></i>Danh sách bài viết</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
quan-tri/them-bai-viet.html"><i class="fa fa-circle-o"></i>Thêm bài viết</a></li>
              </ul>
            </li>
            
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside><?php }
}
