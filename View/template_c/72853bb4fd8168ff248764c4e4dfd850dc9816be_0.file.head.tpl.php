<?php
/* Smarty version 3.1.30, created on 2018-05-14 10:13:21
  from "C:\wamp64\www\MVCShopFinal\View\template\layout\head.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5af96141b4a968_08871642',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72853bb4fd8168ff248764c4e4dfd850dc9816be' => 
    array (
      0 => 'C:\\wamp64\\www\\MVCShopFinal\\View\\template\\layout\\head.tpl',
      1 => 1525287148,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5af96141b4a968_08871642 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
    
    <title> <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_281715af96141b3fcd1_56472915', 'title');
?>
 </title>
    
    <!-- Bootstrap core CSS -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
Public/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
Public/dist/css/carousel.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
Public/dist/css/style.css" rel="stylesheet">
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"><?php echo '</script'; ?>
>
  
</head>
 <?php }
/* {block 'title'} */
class Block_281715af96141b3fcd1_56472915 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'title'} */
}
