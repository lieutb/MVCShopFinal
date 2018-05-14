<?php
/* Smarty version 3.1.30, created on 2018-05-14 10:18:08
  from "C:\wamp64\www\MVCShopFinal\View\template\layoutAdmin\master.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5af96260712e23_80155384',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3ecbe3f1de43c6261e074d0c58cb68a3d637d0d' => 
    array (
      0 => 'C:\\wamp64\\www\\MVCShopFinal\\View\\template\\layoutAdmin\\master.tpl',
      1 => 1525287148,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layoutAdmin/head.tpl' => 1,
    'file:layoutAdmin/header.tpl' => 1,
    'file:layoutAdmin/aside.tpl' => 1,
    'file:layoutAdmin/footer.tpl' => 1,
    'file:layoutAdmin/slidebar.tpl' => 1,
    'file:layoutAdmin/script.tpl' => 1,
  ),
),false)) {
function content_5af96260712e23_80155384 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>
  <!-- head-->
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_231225af962606d6582_62536952', 'head');
?>
 
  <body class="skin-blue sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
      <!-- header-->
	  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_84835af962606e0e09_89155919', 'header');
?>
 

	  <!--aside-->
	  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_302405af962606eacd8_72069448', 'aside');
?>
 

      <div class="content-wrapper">
			<!-- Main content -->
			<section class="content">
	 			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_153215af962606f1858_10424499', 'content');
?>
    		
			</section>
      </div>

     <!-- footer-->
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_188465af962606fae42_72880498', 'footer');
?>
 

     <!--slidebar-->
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_113915af962607045d1_71063516', 'slidebar');
?>
 
	 
	 
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- javascript -->
   <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_215805af9626070e3d3_48988625', 'script');
?>
 	
  </body>
</html>
<?php }
/* {block 'head'} */
class Block_231225af962606d6582_62536952 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:layoutAdmin/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'head'} */
/* {block 'header'} */
class Block_84835af962606e0e09_89155919 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:layoutAdmin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'header'} */
/* {block 'aside'} */
class Block_302405af962606eacd8_72069448 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:layoutAdmin/aside.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'aside'} */
/* {block 'content'} */
class Block_153215af962606f1858_10424499 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_188465af962606fae42_72880498 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:layoutAdmin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'footer'} */
/* {block 'slidebar'} */
class Block_113915af962607045d1_71063516 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:layoutAdmin/slidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'slidebar'} */
/* {block 'script'} */
class Block_215805af9626070e3d3_48988625 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:layoutAdmin/script.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'script'} */
}
