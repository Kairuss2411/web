<?php /* Smarty version Smarty-3.1.18, created on 2022-01-11 17:20:58
         compiled from "D:\web\web_erp\templates\home\error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3156861dd5a0ac33a75-91617848%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0a75189eda13e7a073988590efc173f4c2b0226' => 
    array (
      0 => 'D:\\web\\web_erp\\templates\\home\\error.tpl',
      1 => 1641545056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3156861dd5a0ac33a75-91617848',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'domain' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_61dd5a0ac87c12_90796730',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61dd5a0ac87c12_90796730')) {function content_61dd5a0ac87c12_90796730($_smarty_tpl) {?><div class="page404 z2">
    <div class="container">
        <img src="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
/images/404.png" />
        <p class="title1">Lỗi</p>
        <p class="title2">Rất tiếc...</p>
        <p class="title2">Chúng tôi không tìm thấy trang mà bạn yêu cầu.</p>
        <a href="/trang-chu" class="btn btn-key">Quay lại trang chủ</a>
    </div>
</div>
<?php }} ?>
