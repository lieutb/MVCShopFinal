<?php
/* Smarty version 3.1.30, created on 2018-05-14 10:13:21
  from "C:\wamp64\www\MVCShopFinal\View\template\layout\script.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5af96141f1a821_70538524',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43950f4bd4eda042b53e5e0ddd70d465627e810d' => 
    array (
      0 => 'C:\\wamp64\\www\\MVCShopFinal\\View\\template\\layout\\script.tpl',
      1 => 1525287148,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5af96141f1a821_70538524 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
Public/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
Public/assets/js/vendor/holder.min.js"><?php echo '</script'; ?>
>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
Public/assets/js/ie10-viewport-bug-workaround.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
Public/assets/js/vendor/popper.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
Public/dist/js/jquery-1.11.2.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
Public/dist/js/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>


<!--Về đầu trang-->
<?php echo '<script'; ?>
 type="text/javascript">
	$(document).ready(function(){
      $('body').append('<div id="toTop" class="btn btn-primary" style="width:45px"><img src="<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
Public/images/glyphicon/glyphicon-chevron-up.png" width="100%" /></div>');
    	$(window).scroll(function () {
			if ($(this).scrollTop() != 0) {
				$('#toTop').fadeIn();
			} else {
				$('#toTop').fadeOut();
			}
		}); 
    $('#toTop').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });
	});
<?php echo '</script'; ?>
>
<!--end-->

<?php echo '<script'; ?>
 type="text/javascript">
	$(document).ready(function(){
    $("#btnMua").click(function(){
			
	   		var sl=$("#txtSoLuong").val();
			if(sl<=0)
			{
				alert('Số lượng không hợp lệ');
				return;
			}
			var id=$(this).attr('name');
			<!--end ajax-->
			$.ajax({
		        	url: "<?php echo $_smarty_tpl->tpl_vars['path_smarty']->value;?>
khach-hang/them-san-pham.html", 
		        	dataType: "text",
		        	type: "POST",
		        	data: { ma_san_pham : id , so_luong : sl },

		        	success: function(result)
		        	{
						if(result == 1)
						{
							alert("Thêm vào giỏ hàng không thành công");	
						}
						else
						{
							alert("Đã thêm thành công vào giỏ hàng của bạn");		
						}
		        	}
		    	});
			<!--end ajax-->
    	});
	});
<?php echo '</script'; ?>
>

<?php }
}
