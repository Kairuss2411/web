<?php /* Smarty version Smarty-3.1.18, created on 2021-12-13 17:05:41
         compiled from "/Users/tungla/code/vina/web/web_erp/templates/user/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1990982357615f0448e61ab7-30846358%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f340afdfc70bd1a336a75616a9c0840590c24204' => 
    array (
      0 => '/Users/tungla/code/vina/web/web_erp/templates/user/menu.tpl',
      1 => 1639381877,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1990982357615f0448e61ab7-30846358',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_615f0448e77010_25101967',
  'variables' => 
  array (
    'dM' => 0,
    'domain' => 0,
    'session' => 0,
    'm' => 0,
    'act' => 0,
    'version' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_615f0448e77010_25101967')) {function content_615f0448e77010_25101967($_smarty_tpl) {?><div class="item">
    <div class="wrap-info">
        <div class="img" id="avatar_menu">
            <a id="load_avatar">
                <img src="<?php if (isset($_smarty_tpl->tpl_vars['dM']->value['avatar'])&&$_smarty_tpl->tpl_vars['dM']->value['avatar']!='') {?><?php echo $_smarty_tpl->tpl_vars['dM']->value['avatar'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
/images/user_profile.png<?php }?>" />
            </a>
            <div class="camera" onclick="click_file('avatar_file')"><img src="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
/images/camera.png"></div>
        </div>
        <div class="hide">
            <input class="hide" name="files" type="file" accept="image/x-png,image/gif,image/jpeg" id="avatar_file"
                value="<?php if ($_smarty_tpl->tpl_vars['dM']->value['avatar']!='') {?><?php echo $_smarty_tpl->tpl_vars['dM']->value['avatar'];?>
<?php }?>">
            <input class="hide img-list-all" name="" type="text" id="avatar_val"
                value="<?php if ($_smarty_tpl->tpl_vars['dM']->value['avatar']!='') {?><?php echo $_smarty_tpl->tpl_vars['dM']->value['avatar'];?>
<?php }?>">
        </div>
        <div class="info"> T??i kho???n c???a<b><?php if ($_smarty_tpl->tpl_vars['session']->value['fullname_client']!='') {?><?php echo $_smarty_tpl->tpl_vars['session']->value['fullname_client'];?>
<?php }?></b></div>
        <span>Xem th??m</span>
    </div>
    <ul>
        <li class="<?php if (((string)$_smarty_tpl->tpl_vars['m']->value).((string)$_smarty_tpl->tpl_vars['act']->value)=='userprofile') {?>active<?php }?>"><a href="/thong-tin" title="Th??ng tin t??i kho???n"><i
                    class="fa fa-user"></i>Th??ng tin t??i kho???n</a></li>
        <li class="<?php if (((string)$_smarty_tpl->tpl_vars['m']->value).((string)$_smarty_tpl->tpl_vars['act']->value)=='userpaymentcard') {?>active<?php }?>"><a href="/thong-tin-thanh-toan"
                title="Qu???n l?? ng??n h??ng"><i class="fa fa-credit-card-alt"></i>Qu???n l?? ng??n h??ng</a></li>
        <li class="<?php if (((string)$_smarty_tpl->tpl_vars['m']->value).((string)$_smarty_tpl->tpl_vars['act']->value)=='usernotification') {?>active<?php }?>"><a href="/thong-bao" title="Th??ng b??o c???a t??i"><i
                    class="fa fa-bell"></i>Th??ng b??o c???a t??i</a></li>
        <li class="<?php if (((string)$_smarty_tpl->tpl_vars['m']->value).((string)$_smarty_tpl->tpl_vars['act']->value)=='userorder') {?>active<?php }?>"><a href="/quan-ly-don-hang" title="Qu???n l?? ????n h??ng"><i
                    class="fa fa-server"></i>Qu???n l?? ????n h??ng</a></li>
        <li class="<?php if (((string)$_smarty_tpl->tpl_vars['m']->value).((string)$_smarty_tpl->tpl_vars['act']->value)=='useraddress') {?>active<?php }?>"><a href="/so-dia-chi" title="S??? ?????a ch???"><i
                    class="fa fa-map"></i>S??? ?????a ch???</a></li>
        <li class="<?php if (((string)$_smarty_tpl->tpl_vars['m']->value).((string)$_smarty_tpl->tpl_vars['act']->value)=='userwallet') {?>active<?php }?>"><a href="/quan-ly-vi" title="Qu???n l?? v??"><i
                    class="fa fa-money"></i>Qu???n l?? v??</a></li>
        <li class="<?php if (((string)$_smarty_tpl->tpl_vars['m']->value).((string)$_smarty_tpl->tpl_vars['act']->value)=='userdepartmental_roses') {?>active<?php }?>"><a href="/hoa-hong-quan-ly-phong-ban"
                title="Hoa h???ng qu???n l?? ph??ng ban"><i class="fa fa-server"></i>Hoa h???ng qu???n l?? ph??ng ban</a></li>
        <li class="<?php if (((string)$_smarty_tpl->tpl_vars['m']->value).((string)$_smarty_tpl->tpl_vars['act']->value)=='userdepartmental_revenue') {?>active<?php }?>"><a href="/doanh-thu-phong-ban"
                title="Doanh thu ph??ng ban"><i class="fa fa-server"></i>Doanh thu ph??ng ban</a></li>
        <li class="<?php if (((string)$_smarty_tpl->tpl_vars['m']->value).((string)$_smarty_tpl->tpl_vars['act']->value)=='usertraining_roses') {?>active<?php }?>"><a href="/hoa-hong-huan-luyen" title="Hoa h???ng hu???n luy???n"><i
                    class="fa fa-server"></i>Hoa h???ng hu???n luy???n</a></li>
        <li class="<?php if (((string)$_smarty_tpl->tpl_vars['m']->value).((string)$_smarty_tpl->tpl_vars['act']->value)=='usermember') {?>active<?php }?>"><a href="/quan-ly-doi-nhom" title="Qu???n l?? ?????i nh??m"><i
                    class="fa fa-server"></i>Qu???n l?? ?????i nh??m</a></li>
        
    </ul>
</div>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
/js/js_act/user_menu.js?<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
"></script><?php }} ?>
