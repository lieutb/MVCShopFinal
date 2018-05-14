<?php
/* Smarty version 3.1.30, created on 2018-05-14 10:18:08
  from "C:\wamp64\www\MVCShopFinal\View\template\layoutAdmin\script.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5af962609abcc6_18881968',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0bfbb9b179d469706efe5bb68f60d988933738cc' => 
    array (
      0 => 'C:\\wamp64\\www\\MVCShopFinal\\View\\template\\layoutAdmin\\script.tpl',
      1 => 1525287148,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5af962609abcc6_18881968 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
Public/css_js_admin/plugins/jQuery/jQuery-2.1.4.min.js"><?php echo '</script'; ?>
>
    <!-- Bootstrap 3.3.5 -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
Public/css_js_admin/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <!-- SlimScroll -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
Public/css_js_admin/plugins/slimScroll/jquery.slimscroll.min.js"><?php echo '</script'; ?>
>
    <!-- FastClick -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
Public/css_js_admin/plugins/fastclick/fastclick.min.js"><?php echo '</script'; ?>
>
    <!-- AdminLTE App -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
Public/css_js_admin/dist/js/app.min.js"><?php echo '</script'; ?>
>
    <!-- AdminLTE for demo purposes -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
Public/css_js_admin/dist/js/demo.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>
        $(document).ready(function(){
            $("#ten_id").blur(function(){
                var ten_mon=$("#ten_id").val();
                if(ten_mon !="")
                {
                    $("#ten_id_url").val(bodau(ten_mon));
                }
            });
        });
        
        function bodau(str){
        str= str.toLowerCase();
        str= str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g,"a");
        str= str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g,"e");
        str= str.replace(/ì|í|ị|ỉ|ĩ/g,"i");
        str= str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g,"o");
        str= str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g,"u");
        str= str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g,"y");
        str= str.replace(/đ/g,"d");
        str= str.replace(/!|@|\$|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\'| |\"|\&|\#|\[|\]|~/g,"-");
        str= str.replace(/-+-/g,"-");
        str= str.replace(/^\-+|\-+$/g,"");
        return str;
        }
    <?php echo '</script'; ?>
><?php }
}
