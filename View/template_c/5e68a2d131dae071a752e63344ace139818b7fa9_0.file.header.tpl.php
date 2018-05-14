<?php
/* Smarty version 3.1.30, created on 2018-05-14 10:18:08
  from "C:\wamp64\www\MVCShopFinal\View\template\layoutAdmin\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5af962607daaa6_36542112',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e68a2d131dae071a752e63344ace139818b7fa9' => 
    array (
      0 => 'C:\\wamp64\\www\\MVCShopFinal\\View\\template\\layoutAdmin\\header.tpl',
      1 => 1525287148,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5af962607daaa6_36542112 (Smarty_Internal_Template $_smarty_tpl) {
?>
<header class="main-header">
        <!-- Logo -->
        <a href="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
quan-tri/he-thong.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>ADMIN</b>DT</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Admin</b> DT Gear Shop</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
Public/images/banner/user.png"" class="user-image" alt="User Image">
                  <span class="hidden-xs"><?php echo $_smarty_tpl->tpl_vars['ten']->value;?>
</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
Public/css_js_admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    <p>
                      <?php echo $_smarty_tpl->tpl_vars['ten']->value;?>
 - ADMIN
                      <small>Member since Nov. 2012</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>

               <li>
                  <a href="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
dang_xuat.php">
                     <img src="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
Public/images/banner/logout.gif" width="20px" alt="Đăng xuất" title="Đăng xuất" />Đăng xuất
                 </a>  
              </li>

              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </header><?php }
}
