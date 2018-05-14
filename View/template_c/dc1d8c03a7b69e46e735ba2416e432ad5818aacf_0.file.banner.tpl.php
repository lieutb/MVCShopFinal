<?php
/* Smarty version 3.1.30, created on 2018-05-14 10:13:47
  from "C:\wamp64\www\MVCShopFinal\View\template\layout\banner.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5af9615bc087b6_16901221',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc1d8c03a7b69e46e735ba2416e432ad5818aacf' => 
    array (
      0 => 'C:\\wamp64\\www\\MVCShopFinal\\View\\template\\layout\\banner.tpl',
      1 => 1525287148,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5af9615bc087b6_16901221 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
<div class="row">
    <div class="col-md-9">
        <div id="myCarousel" class="carousel slide container" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                  <img class="first-slide" src="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
Public/images/banner/Banner_04.jpg" class="img-fluid">
                  <div class="container">
                    <div class="carousel-caption d-none d-md-block text-left">
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <img class="second-slide" src="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
Public/images/banner/Banner_05.jpg" class="img-fluid">
                  <div class="container">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <img class="third-slide" src="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
Public/images/banner/Banner_06.jpg" class="img-fluid">
                  <div class="container">
                    <div class="carousel-caption d-none d-md-block text-right">
                    </div>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
        </div>
    </div>
        
    <div class="col-md-3 img_banner" align="center">
        <img src="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
Public/images/banner/img_banner_01.jpg" class="rounded img-hover">
        <img src="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
Public/images/banner/img_banner_02.jpg" class="rounded img-hover">
        <img src="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
Public/images/banner/img_banner_03.jpg" class="rounded img-hover">
    </div>
</div>
</div><?php }
}
