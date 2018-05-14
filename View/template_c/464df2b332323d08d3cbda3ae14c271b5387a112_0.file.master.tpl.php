<?php
/* Smarty version 3.1.30, created on 2018-05-14 10:13:21
  from "C:\wamp64\www\MVCShopFinal\View\template\layout\master.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5af96141ace637_44278599',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '464df2b332323d08d3cbda3ae14c271b5387a112' => 
    array (
      0 => 'C:\\wamp64\\www\\MVCShopFinal\\View\\template\\layout\\master.tpl',
      1 => 1525287148,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/head.tpl' => 1,
    'file:layout/header.tpl' => 1,
    'file:layout/nav.tpl' => 1,
    'file:layout/footer.tpl' => 1,
    'file:layout/script.tpl' => 1,
  ),
),false)) {
function content_5af96141ace637_44278599 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
 <!--head-->
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_80835af96141a93b39_47298703', 'head');
?>
 
  <body>

  <!--header-->
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_276005af96141a9daf5_32819172', 'header');
?>
 
  
  <!--nav-->
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_306655af96141aa7be4_11338042', 'nav');
?>
 
    <!-- banner-->
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_283665af96141aaf5e9_43122611', 'banner');
?>
 
    <!--content-->
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_86875af96141ab6e57_16693000', 'content');
?>
 
      <!-- FOOTER -->
      
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_299485af96141ac0dd4_68023684', 'footer');
?>
 


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_183095af96141acac17_65324910', 'script');
?>
 
  </body>
</html><?php }
/* {block 'head'} */
class Block_80835af96141a93b39_47298703 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:layout/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'head'} */
/* {block 'header'} */
class Block_276005af96141a9daf5_32819172 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'header'} */
/* {block 'nav'} */
class Block_306655af96141aa7be4_11338042 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:layout/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'nav'} */
/* {block 'banner'} */
class Block_283665af96141aaf5e9_43122611 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'banner'} */
/* {block 'content'} */
class Block_86875af96141ab6e57_16693000 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_299485af96141ac0dd4_68023684 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'footer'} */
/* {block 'script'} */
class Block_183095af96141acac17_65324910 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:layout/script.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'script'} */
}
