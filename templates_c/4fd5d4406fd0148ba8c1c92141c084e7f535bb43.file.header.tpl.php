<?php /* Smarty version Smarty-3.1.18, created on 2021-09-30 22:01:34
         compiled from "/Users/tungla/code/vina/erp/posretail/templates/supervisor/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:273303361615475c68ea982-29968126%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4fd5d4406fd0148ba8c1c92141c084e7f535bb43' => 
    array (
      0 => '/Users/tungla/code/vina/erp/posretail/templates/supervisor/header.tpl',
      1 => 1633014049,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '273303361615475c68ea982-29968126',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_615475c6a94113_79578372',
  'variables' => 
  array (
    'link' => 0,
    'setup' => 0,
    'domain' => 0,
    'version' => 0,
    'session' => 0,
    'str_permission' => 0,
    'm' => 0,
    'act' => 0,
    'lShops' => 0,
    'item' => 0,
    'lang' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_615475c6a94113_79578372')) {function content_615475c6a94113_79578372($_smarty_tpl) {?><section class="head-new">
    <div class="container">
        <div class="logo-news">
            <div class="icon-menu-pc">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </div>
            <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
/?m=supervisor&act=index">
                <?php if (isset($_smarty_tpl->tpl_vars['setup']->value['url_logo'])&&$_smarty_tpl->tpl_vars['setup']->value['url_logo']!='') {?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['setup']->value['url_logo'];?>
" alt="" class="" />
                <?php } else { ?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
/assets/images/ecoposlogo.png?<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
" alt="" class="" />
                <?php }?>
            </a>
        </div>
        <ul class="nav-admin">
            <li role="presentation" class="dropdown">
                <a href="#" class="dropdown-toggle profile-pic" data-toggle="dropdown" role="button"
                    aria-haspopup="true" aria-expanded="false">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
/assets/images/user_profile.png?<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
" alt="user-img" width="36"
                        class="img-circle">
                    <span><?php echo $_smarty_tpl->tpl_vars['session']->value['fullname'];?>
</span>
                    <i class="fa fa-caret-down" aria-hidden="true"></i>
                </a>
                <ul class="dropdown-menu sub-menu">
                    <li class="change_password_user"><a href="javascript:;"><img
                                src="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
/assets/images/change_pw.png?<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
">Thay ?????i m???t kh???u</a>
                    </li>
                    <?php if (isset($_smarty_tpl->tpl_vars['session']->value['gid'])&&$_smarty_tpl->tpl_vars['session']->value['gid']==0) {?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
/?m=setting&act=config"><img
                                    src="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
/assets/images/setting.png?<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
">C??i ?????t h??? th???ng</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
/?m=setting&act=config_web"><img
                                    src="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
/assets/images/setting.png?<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
">C??i ?????t cho web</a></li>
                        
                    <?php }?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
/logout.php"><img src="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
/assets/images/logout.png?<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
">Tho??t</a>
                    </li>
                </ul>
            </li>
        </ul>
        <div class="toolbar-new">
            <ul>
                <li><a><i class="fa fa-paint-brush"></i> <span>Ch??? ?????</span></a></li>
                <li><a><i class="fa fa-comments-o" aria-hidden="true"></i> <span>H??? tr???</span></a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
/?m=setting&act=pos"><i class="fa fa-cog" aria-hidden="true"></i> <span>Thi???t
                            l???p</span></a></li>
            </ul>
        </div>
    </div>
</section>

<section class="menu-new">
    <div class="container">
        <div class="logo-mobile">
            <img src="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
/assets/images/ecoposlogo.png?<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
" alt="" class="" />
            <div class="back-menu"><i class="fa fa-arrow-left" aria-hidden="true"></i></div>
        </div>
        <ul class="menu1">

            <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':supervisorshop:'))!==false||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':supervisorpayment:'))!==false||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':showroomindex:'))!==false||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':themelist:'))!==false||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':themecategory:'))!==false) {?>
            <li <?php if (((string)$_smarty_tpl->tpl_vars['m']->value).((string)$_smarty_tpl->tpl_vars['act']->value)=='supervisorindex'||((string)$_smarty_tpl->tpl_vars['m']->value).((string)$_smarty_tpl->tpl_vars['act']->value)=='supervisorshop'||((string)$_smarty_tpl->tpl_vars['m']->value).((string)$_smarty_tpl->tpl_vars['act']->value)=='supervisorpayment'||((string)$_smarty_tpl->tpl_vars['m']->value).((string)$_smarty_tpl->tpl_vars['act']->value)=='showroomindex'||((string)$_smarty_tpl->tpl_vars['m']->value).((string)$_smarty_tpl->tpl_vars['act']->value)=='themecategory'||((string)$_smarty_tpl->tpl_vars['m']->value).((string)$_smarty_tpl->tpl_vars['act']->value)=='themelist') {?>class="active" <?php }?>>
                <span class="menu-minus">-</span>
                <span class="menu-plus">+</span>
                <a title="" href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
/?m=supervisor&act=index"><i class="fa fa-dashboard" aria-hidden="true"></i>
                    T???ng quan</a>
                <ul class="sub" style="right: auto;">

                    <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':supervisorshop:'))!==false) {?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
/?m=supervisor&act=shop" title="Chi nh??nh"><i
                                    class="icon-cate icon-other-store3" aria-hidden="true"></i> Chi nh??nh</a></li>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':showroomindex:'))!==false) {?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
/?m=showroom&act=index" title="Showroom"><i class="icon-cate icon-other-store3"
                                    aria-hidden="true"></i> Showroom</a></li>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':supervisorpayment:'))!==false) {?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
/?m=supervisor&act=payment" title="H??nh th???c thanh to??n"><i
                                    class="glyphicon glyphicon-usd" aria-hidden="true"></i> H??nh th???c thanh to??n</a></li>
                    <?php }?>

                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
/?m=theme&act=category" title="Tin t???c">
                                    <i class="fa fa-th-large" aria-hidden="true"></i>QL Danh m???c giao
                                    di???n KH</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
/?m=theme&act=slide" title="Tin t???c">
                                    <i class="fa fa-th-large" aria-hidden="true"></i>QL Slide giao
                                    di???n KH</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
/?m=theme&act=product" title="Tin t???c">
                                    <i class="fa fa-th-large" aria-hidden="true"></i>QL S???n ph???m giao
                                    di???n KH</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
/?m=theme&act=block" title="Qu???n l?? block giao di???n"><i class="fa fa-th-list"
                                        aria-hidden="true"></i>Qu???n l?? Block giao di???n KH</a>
                            </li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
/?m=theme&act=list" title="Qu???n l?? giao di???n"><i class="fa fa-th-list"
                                        aria-hidden="true"></i>Qu???n l?? giao di???n KH</a>
                            </li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
/?m=setting&act=home" title="C??i ?????t trang ch???"><i class="fa fa-th-list"
                                        aria-hidden="true"></i>C??i ?????t trang ch???</a>
                            </li>


                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
/?m=lottery&act=config" title="C??i ?????t x??? s??? may m???n"><i class="fa fa-th-list"
                                        aria-hidden="true"></i>C??i ?????t x??? s??? may m???n</a>
                            </li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
/?m=lottery&act=number" title="L???ch s??? ph??t s??? may m???n"><i class="fa fa-th-list"
                                        aria-hidden="true"></i>L???ch s??? ph??t s??? may m???n</a>
                            </li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
/?m=lottery&act=result" title="K???t qu??? gi???i th?????ng"><i class="fa fa-th-list"
                                        aria-hidden="true"></i>K???t qu??? gi???i th?????ng</a>
                            </li>
                            
                </ul>
            </li>
            <?php } else { ?>
            <li>
                <span class="menu-minus">-</span>
                <span class="menu-plus">+</span>
                <a title=""><i class=""
                        aria-hidden="true"></i>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </a>
            </li>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':supervisorindex:mainretail:supervisoron_shop:'))!==false) {?>
                <li>
                    <span class="menu-minus">-</span>
                    <span class="menu-plus">+</span>
                    <a title="POS b??n h??ng"><i class="fa fa-desktop" aria-hidden="true"></i> POS</a>
                    <ul class="sub" style="right: auto;">
                        <?php if (COUNT($_smarty_tpl->tpl_vars['lShops']->value)==1) {?>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
/?m=supervisor&act=on_shop&shop_id=<?php echo $_smarty_tpl->tpl_vars['lShops']->value[0]['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['lShops']->value[0]['name'];?>
"><i
                                        class="fa fa-barcode" aria-hidden="true"></i><?php echo $_smarty_tpl->tpl_vars['lShops']->value[0]['name'];?>
</a></li>
                        <?php } else { ?>
                            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['lShops']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
/?m=supervisor&act=on_shop&shop_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
"><i
                                            class="fa fa-barcode" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></li>
                            <?php }
if (!$_smarty_tpl->tpl_vars['item']->_loop) {
?>
                                <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']<1||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,'supervisorshop:'))!==false) {?>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
/?m=supervisor&act=shop" title="Th??m m???i c???a h??ng"><i
                                                class="glyphicon glyphicon-plus-sign" aria-hidden="true"></i> Th??m m???i c???a h??ng</a></li>
                                <?php } else { ?>
                                    <li><a>Li??n h??? Admin ????? th??m c???a h??ng</a></li>
                                <?php }?>
                            <?php } ?>
                        <?php }?>
                    </ul>
                </li>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':supervisorcategory:'))!==false||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':productposts:'))!==false||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':productindex:'))!==false||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':accountantstoring:'))!==false||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':inventoryindex:'))!==false||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':productprice:'))!==false||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':accountantstock:'))!==false||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':productqrcode:'))!==false) {?>
            <li <?php if (((string)$_smarty_tpl->tpl_vars['m']->value).((string)$_smarty_tpl->tpl_vars['act']->value)=='supervisorcategory'||((string)$_smarty_tpl->tpl_vars['m']->value).((string)$_smarty_tpl->tpl_vars['act']->value)=='inventoryindex'||((string)$_smarty_tpl->tpl_vars['m']->value).((string)$_smarty_tpl->tpl_vars['act']->value)=='productposts'||((string)$_smarty_tpl->tpl_vars['m']->value).((string)$_smarty_tpl->tpl_vars['act']->value)=='productindex'||((string)$_smarty_tpl->tpl_vars['m']->value).((string)$_smarty_tpl->tpl_vars['act']->value)=='accountantstoring'||((string)$_smarty_tpl->tpl_vars['m']->value).((string)$_smarty_tpl->tpl_vars['act']->value)=='productqrcode'||((string)$_smarty_tpl->tpl_vars['m']->value).((string)$_smarty_tpl->tpl_vars['act']->value)=='productprice'||((string)$_smarty_tpl->tpl_vars['m']->value).((string)$_smarty_tpl->tpl_vars['act']->value)=='accountantstock') {?>class="active" <?php }?>>
                <span class="menu-minus">-</span>
                <span class="menu-plus">+</span>
                <a title="S???n ph???m h??ng h??a"><i class="fa fa-cubes" aria-hidden="true"></i> H??ng h??a</a>
                <ul class="sub">

                    <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':supervisorcategory:'))!==false) {?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
/?m=supervisor&act=category" title="T???o/ ch???nh s???a s???n ph???m h??ng h??a"><i
                                    class="fa fa-cube" aria-hidden="true"></i> T???o/ ch???nh s???a h??ng h??a</a></li>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':productposts:'))!==false) {?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
/?m=product&act=posts" title="T???o/ ch???nh s???a s???n ph???m h??ng h??a"><i
                                    class="fa fa-cube" aria-hidden="true"></i> B??i vi???t m???u</a></li>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':productbrand:'))!==false) {?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
/?m=product&act=brand" title="Qu???n l?? th????ng hi???u s???n ph???m"><i
                                    class="fa fa-cube" aria-hidden="true"></i> Th????ng hi???u s???n ph???m</a></li>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':productqrcode:'))!==false) {?>

                        <li class=""><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
/?m=product&act=qrcode" title="Ph??t h??nh QR-BARCODE"><i
                                    class="fa fa-cube" aria-hidden="true"></i> Ph??t h??nh QR-BARCODE</a></li>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':accountantstoring:'))!==false) {?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
/?m=accountant&act=storing" title=""><i class="fa fa-square"
                                    aria-hidden="true"></i> Xu???t nh???p kho</a></li>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':accountantstock:'))!==false) {?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
/?m=accountant&act=stock" title=""><i class="fa fa-archive"
                                    aria-hidden="true"></i> L???ch s??? nh???p/ xu???t m???t s???n ph???m</a></li>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':productindex:'))!==false) {?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
?m=product&act=commission" title=""><i class="fa fa-delicious"
                                    aria-hidden="true"></i>
                                C??i ?????t chi???t kh???u s???n ph???m</a></li>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':productindex:'))!==false) {?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
?m=product&act=index" title=""><i class="fa fa-star" aria-hidden="true"></i>
                                Chi???t kh???u theo kh??ch h??ng</a></li>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':productprice:'))!==false) {?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
?m=product&act=price" title=""><i class="fa fa-money" aria-hidden="true"></i>
                                C??i ?????t gi?? cho nh??m kh??ch h??ng</a></li>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':inventoryindex:'))!==false) {?>
                        <li class=""><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
?m=inventory&act=index" title=""><i class="glyphicon glyphicon-filter"
                                    aria-hidden="true"></i> Ki???m kho</a></li>
                    <?php }?>

                </ul>
            </li>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':accountantbills:'))!==false||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':accountantorder:'))!==false||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':accountantmanage_order:'))!==false||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':extendbank:'))!==false||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':extendbank_transaction:'))!==false||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':extendbank_change:'))!==false||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':extendtransaction_history:'))!==false||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':extendpackage:'))!==false||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':supervisorshifts_history:'))!==false||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':membersinternal_ordering:'))!==false||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':reportdeleted_order:'))!==false||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':membersorder:'))!==false||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':membersorder_lstream:'))!==false) {?>
            <li <?php if (((string)$_smarty_tpl->tpl_vars['m']->value).((string)$_smarty_tpl->tpl_vars['act']->value)=='accountantbills'||((string)$_smarty_tpl->tpl_vars['m']->value).((string)$_smarty_tpl->tpl_vars['act']->value)=='accountantorder'||((string)$_smarty_tpl->tpl_vars['m']->value).((string)$_smarty_tpl->tpl_vars['act']->value)=='accountantmanage_order'||((string)$_smarty_tpl->tpl_vars['m']->value).((string)$_smarty_tpl->tpl_vars['act']->value)=='extendbank'||((string)$_smarty_tpl->tpl_vars['m']->value).((string)$_smarty_tpl->tpl_vars['act']->value)=='extendbank_transaction'||((string)$_smarty_tpl->tpl_vars['m']->value).((string)$_smarty_tpl->tpl_vars['act']->value)=='extendbank_change'||((string)$_smarty_tpl->tpl_vars['m']->value).((string)$_smarty_tpl->tpl_vars['act']->value)=='extendtransaction_history'||((string)$_smarty_tpl->tpl_vars['m']->value).((string)$_smarty_tpl->tpl_vars['act']->value)=='extendpackage'||((string)$_smarty_tpl->tpl_vars['m']->value).((string)$_smarty_tpl->tpl_vars['act']->value)=='supervisorshifts_history'||((string)$_smarty_tpl->tpl_vars['m']->value).((string)$_smarty_tpl->tpl_vars['act']->value)=='membersinternal_ordering'||((string)$_smarty_tpl->tpl_vars['m']->value).((string)$_smarty_tpl->tpl_vars['act']->value)=='reportdeleted_order'||((string)$_smarty_tpl->tpl_vars['m']->value).((string)$_smarty_tpl->tpl_vars['act']->value)=='membersorder'||((string)$_smarty_tpl->tpl_vars['m']->value).((string)$_smarty_tpl->tpl_vars['act']->value)=='membersorder_lstream'||((string)$_smarty_tpl->tpl_vars['m']->value).((string)$_smarty_tpl->tpl_vars['act']->value)=='contractindex') {?>class="active" <?php }?>>
                <span class="menu-minus">-</span>
                <span class="menu-plus">+</span>
                <a title=""><i class="fa fa-exchange" aria-hidden="true"></i> Giao d???ch</a>
                <ul class="sub">

                    <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':accountantbills:'))!==false) {?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
/?m=accountant&act=bills" title="L???ch s??? ????n h??ng"><i
                                    class="icon-cate icon-other-map" aria-hidden="true"></i> L???ch s??? ????n h??ng</a></li>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':supervisorshifts_history:'))!==false) {?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
/?m=supervisor&act=shifts_history" title=""><i
                                    class="glyphicon glyphicon-list-alt" aria-hidden="true"></i> L???ch s??? giao ca</a></li>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':accountantorder:'))!==false) {?>
                        <li class=""><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
/?m=accountant&act=order" title=""><i
                                    class="glyphicon glyphicon-list-alt" aria-hidden="true"></i> ????n h??ng li??n th??ng POS</a>
                        </li>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':accountantmanage_order:'))!==false) {?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
/?m=accountant&act=manage_order" title=""><i class="fa fa-list-ol"
                                    aria-hidden="true"></i> QL ????n ?????t h??ng</a></li>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':showroomorder:'))!==false) {?>
                        <li class=""><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
/?m=showroom&act=order" title=""><i class="fa fa-list-ol"
                                    aria-hidden="true"></i>
                                QL ????n h??ng kh??ch h??ng</a></li>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':membersorder:'))!==false) {?>
                        <li class="hide"><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
/?m=members&act=order" title=""><i class="fa fa-list-ol"
                                    aria-hidden="true"></i>
                                QL ????n h??ng ???ng d???ng</a></li>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':membersorder_lstream:'))!==false) {?>
                        <li class="hide"><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
/?m=members&act=order_lstream" title=""><i class="fa fa-list-ol"
                                    aria-hidden="true"></i>Nh???p ????n h??ng live stream</a></li>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':membersinternal_ordering:'))!==false) {?>
                        <li class="hide"><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
/?m=members&act=internal_ordering" title=""><i
                                    class="fa fa-list-ol" aria-hidden="true"></i> Gi??m s??t ????n h??ng n???i b??? NPP</a></li>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':extendbank:'))!==false) {?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
/?m=extend&act=bank" title=""><i class="fa fa-bank" aria-hidden="true"></i> Danh
                                s??ch ng??n h??ng</a></li>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':extendbank_change:'))!==false) {?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
/?m=extend&act=bank_change" title=""><i class="glyphicon glyphicon-list-alt"
                                    aria-hidden="true"></i> S??? d?? ng??n h??ng thay ?????i</a></li>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':extendbank_transaction:'))!==false) {?>
                        <li class="" class=""><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
/?m=extend&act=bank_transaction" title=""><i
                                    class="fa fa-exchange" aria-hidden="true"></i> L???nh n???p/ r??t ??i???m</a></li>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':reportdeleted_order:'))!==false) {?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
?m=report&act=deleted_order" title=""><i class="fa fa-star"
                                    aria-hidden="true"></i> L???ch s??? x??a ????n h??ng</a></li>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':contractindex:'))!==false) {?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
?m=contract&act=index" title=""><i class="fa fa-star" aria-hidden="true"></i>
                                H???p ?????ng cho thu??</a></li>
                    <?php }?>

                </ul>
            </li>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':accountantsupplier:'))!==false||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':memberslist:'))!==false||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':trainingindex:'))!==false||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':traininguser:'))!==false) {?>
            <li <?php if (((string)$_smarty_tpl->tpl_vars['m']->value).((string)$_smarty_tpl->tpl_vars['act']->value)=='accountantsupplier'||((string)$_smarty_tpl->tpl_vars['m']->value).((string)$_smarty_tpl->tpl_vars['act']->value)=='memberslist'||((string)$_smarty_tpl->tpl_vars['m']->value).((string)$_smarty_tpl->tpl_vars['act']->value)=='trainingindex'||((string)$_smarty_tpl->tpl_vars['m']->value).((string)$_smarty_tpl->tpl_vars['act']->value)=='traininguser') {?>class="active" <?php }?>>

                <span class="menu-minus">-</span>
                <span class="menu-plus">+</span>
                <a title=""><i class="fa fa-user" aria-hidden="true"></i> ?????i t??c</a>
                <ul class="sub">
                    <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':accountantsupplier:'))!==false) {?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
/?m=accountant&act=supplier" title=""><i class="icon-cate icon-other-store4"
                                    aria-hidden="true"></i>Nh?? cung c???p</a></li>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':memberslist:'))!==false) {?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
/?m=members&act=list" title=""><i class="icon-cate icon-other-group"
                                    aria-hidden="true"></i>Kh??ch h??ng</a></li>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':memberslogs:'))!==false) {?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
/?m=members&act=logs" title=""><i class="glyphicon glyphicon-list-alt"
                                    aria-hidden="true"></i>Nh???t k?? ch??m s??c kh??ch h??ng</a></li>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':trainingindex:'))!==false) {?>
                        <li class=""><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
/?m=training&act=index" title=""><i
                                    class="glyphicon glyphicon-list-alt" aria-hidden="true"></i>H??? th???ng ch???ng ch???</a></li>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':traininguser:'))!==false) {?>
                        <li class=""><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
/?m=training&act=user" title=""><i class="glyphicon glyphicon-list-alt"
                                    aria-hidden="true"></i>Ch???ng ch??? c???a kh??ch h??ng</a></li>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':memberstitle:'))!==false) {?>
                        <li class=""><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
/?m=members&act=title" title=""><i class="glyphicon glyphicon-list-alt"
                                    aria-hidden="true"></i>Ch???c danh kh??ch h??ng</a></li>
                    <?php }?>
                </ul>
            </li>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':supervisoruser:'))!==false||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':supervisorlog:'))!==false) {?>
                <li <?php if (((string)$_smarty_tpl->tpl_vars['m']->value).((string)$_smarty_tpl->tpl_vars['act']->value)=='supervisoruser'||((string)$_smarty_tpl->tpl_vars['m']->value).((string)$_smarty_tpl->tpl_vars['act']->value)=='supervisorcalendar'||((string)$_smarty_tpl->tpl_vars['m']->value).((string)$_smarty_tpl->tpl_vars['act']->value)=='supervisorlog') {?>class="active" <?php }?>>
                <span class="menu-minus">-</span>
                <span class="menu-plus">+</span>
                <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
/?m=supervisor&act=user" title="Nh??n vi??n"><i class="fa fa-users"
                        aria-hidden="true"></i> Nh??n vi??n</a>
                <ul class="sub">

                    <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':supervisorcalendar:'))!==false) {?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
/?m=supervisor&act=user" title=""><i class="fa fa-users"
                                    aria-hidden="true"></i>Nh??n vi??n</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
/?m=supervisor&act=calendar" title=""><i class="fa fa-calendar"
                                    aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['lang']->value['tt_calendar'];?>
</a></li>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':supervisorlog:'))!==false) {?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
/?m=supervisor&act=log" title=""><i class="glyphicon glyphicon-tasks"
                                    aria-hidden="true"></i> Nh???t k??</a></li>
                    <?php }?>

                </ul>
            </li>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':treasurerindex:'))!==false) {?>
                <li <?php if (((string)$_smarty_tpl->tpl_vars['m']->value).((string)$_smarty_tpl->tpl_vars['act']->value)=='treasurerindex') {?>class="active" <?php }?>>
                    <span class="menu-minus">-</span>
                    <span class="menu-plus">+</span>
                    <a title=""><i class="fa fa-bank" aria-hidden="true"></i> S??? qu???</a>
                    <ul class="sub">

                        <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':treasurerindex:'))!==false) {?>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
/?m=treasurer&act=index" title="S??? qu???"><i class="fa fa-bank"
                                        aria-hidden="true"></i> S??? qu???</a></li>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':treasurerindex:'))!==false) {?>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
/?m=treasurer&act=setting" title="T???o l?? do thu/ chi"><i class="fa fa-bank"
                                        aria-hidden="true"></i> T???o l?? do thu/ chi</a></li>
                        <?php }?>

                    </ul>
                </li>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':walletindex:'))!==false||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':walletcashback:'))!==false||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':wallettransaction:'))!==false||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':walletclient:'))!==false||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':walletmember:'))!==false||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':walletvoucher:'))!==false) {?>
            <li class="" <?php if (((string)$_smarty_tpl->tpl_vars['m']->value).((string)$_smarty_tpl->tpl_vars['act']->value)=='walletindex'||((string)$_smarty_tpl->tpl_vars['m']->value).((string)$_smarty_tpl->tpl_vars['act']->value)=='walletcashback'||((string)$_smarty_tpl->tpl_vars['m']->value).((string)$_smarty_tpl->tpl_vars['act']->value)=='wallettransaction'||((string)$_smarty_tpl->tpl_vars['m']->value).((string)$_smarty_tpl->tpl_vars['act']->value)=='walletclient'||((string)$_smarty_tpl->tpl_vars['m']->value).((string)$_smarty_tpl->tpl_vars['act']->value)=='walletmember'||((string)$_smarty_tpl->tpl_vars['m']->value).((string)$_smarty_tpl->tpl_vars['act']->value)=='walletvoucher') {?>class="active" <?php }?>>
                <span class="menu-minus">-</span>
                <span class="menu-plus">+</span>
                <a title=""><i class="fa fa-bank" aria-hidden="true"></i> V??</a>
                <ul class="sub">

                    <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':walletindex:'))!==false) {?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
/?m=wallet&act=index" title="V??"><i class="fa fa-bank" aria-hidden="true"></i>
                                Danh s??ch v??</a></li>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':wallettransaction:'))!==false) {?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
/?m=wallet&act=transaction" title="Giao d???ch c??c v??"><i class="fa fa-bank"
                                    aria-hidden="true"></i> Giao d???ch c??c v??</a></li>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':walletclient:'))!==false) {?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
/?m=wallet&act=client" title="Giao d???ch c??c v?? theo c?? nh??n"><i class="fa fa-bank"
                                    aria-hidden="true"></i> Giao d???ch theo c?? nh??n</a></li>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':walletmember:'))!==false) {?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
/?m=wallet&act=member" title="T??i kho???n v?? kh??ch h??ng"><i class="fa fa-bank"
                                    aria-hidden="true"></i> T??i kho???n v?? kh??ch h??ng</a></li>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':walletcashback:'))!==false) {?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
/?m=wallet&act=cashback" title="V??"><i class="fa fa-bank"
                                    aria-hidden="true"></i>
                                C??i ?????t t??ch/ ?????i ??i???m kh??ch h??ng</a></li>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':walletvoucher:'))!==false) {?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
/?m=wallet&act=voucher" title="V??"><i class="fa fa-bank" aria-hidden="true"></i>
                                C??i ?????t g??i ??i???m Voucher</a></li>
                    <?php }?>

                </ul>
            </li>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':accountantreport:'))!==false||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':commissioncoaching:'))!==false||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':reportstoring:'))!==false||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':commissionbocom:'))!==false||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':reportgroup_product:'))!==false||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':reportdetail_product:'))!==false||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':reporttop:'))!==false||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':reportorder_list:'))!==false) {?>
            <li <?php if (((string)$_smarty_tpl->tpl_vars['m']->value).((string)$_smarty_tpl->tpl_vars['act']->value)=='accountantreport'||((string)$_smarty_tpl->tpl_vars['m']->value).((string)$_smarty_tpl->tpl_vars['act']->value)=='commissioncoaching'||((string)$_smarty_tpl->tpl_vars['m']->value).((string)$_smarty_tpl->tpl_vars['act']->value)=='reportstoring'||((string)$_smarty_tpl->tpl_vars['m']->value).((string)$_smarty_tpl->tpl_vars['act']->value)=='commissionbocom'||((string)$_smarty_tpl->tpl_vars['m']->value).((string)$_smarty_tpl->tpl_vars['act']->value)=='reportgroup_product'||((string)$_smarty_tpl->tpl_vars['m']->value).((string)$_smarty_tpl->tpl_vars['act']->value)=='reportdetail_product'||((string)$_smarty_tpl->tpl_vars['m']->value).((string)$_smarty_tpl->tpl_vars['act']->value)=='reporttop'||((string)$_smarty_tpl->tpl_vars['m']->value).((string)$_smarty_tpl->tpl_vars['act']->value)=='voucher'||((string)$_smarty_tpl->tpl_vars['m']->value).((string)$_smarty_tpl->tpl_vars['act']->value)=='showroomstoring'||((string)$_smarty_tpl->tpl_vars['m']->value).((string)$_smarty_tpl->tpl_vars['act']->value)=='reportorder_list') {?>class="active" <?php }?>>
                <span class="menu-minus">-</span>
                <span class="menu-plus">+</span>
                <a title="H??? th???ng b??o c??o"><i class="fa fa-line-chart" aria-hidden="true"></i> B??o c??o</a>
                <ul class="sub">
                    <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':accountantreport:'))!==false) {?>
                        <li class="hide"><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
?m=accountant&act=report" title=""><i class="fa fa-line-chart"
                                    aria-hidden="true"></i> B??o c??o</a></li>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':commissioncoaching:'))!==false) {?>
                        <li class=""><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
?m=commission&act=coaching" title=""><i class="fa fa-star"
                                    aria-hidden="true"></i> Hoa h???ng hu???n luy???n</a></li>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':commissioncoaching:'))!==false) {?>
                        <li class=""><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
?m=commission&act=department" title=""><i class="fa fa-star"
                                    aria-hidden="true"></i> Hoa h???ng ph??ng ban</a></li>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':reportgroup_product:'))!==false) {?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
?m=report&act=group_product" title=""><i class="fa fa-star"
                                    aria-hidden="true"></i> Doanh s??? theo kho h??ng</a></li>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':reportgroup_product:'))!==false) {?>
                        <li class="hide"><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
?m=report&act=warehouse_borrowed" title=""><i class="fa fa-star"
                                    aria-hidden="true"></i> B??o c??o kho h??ng m?????n</a></li>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':reportdetail_product:'))!==false) {?>
                        <li class=""><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
?m=report&act=detail_product" title=""><i class="fa fa-star"
                                    aria-hidden="true"></i> B??o c??o th???ng k?? xu???t h??ng</a></li>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':reportgp_department:'))!==false) {?>
                        <li class=""><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
?m=report&act=gp_department" title=""><i class="fa fa-star"
                                    aria-hidden="true"></i> DS nh??m chi???t kh???u & ph??ng ban</a></li>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':reportstoring:'))!==false) {?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
?m=report&act=storing" title=""><i class="fa fa-star" aria-hidden="true"></i>
                                B??o c??o nh???p kho</a></li>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':showroomstoring:'))!==false) {?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
?m=showroom&act=storing" title=""><i class="fa fa-star" aria-hidden="true"></i>
                                BC t???n kho Showroom</a></li>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':commissionbocom:'))!==false) {?>
                        <li class=""><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
?m=commission&act=bocom" title=""><i class="fa fa-star"
                                    aria-hidden="true"></i>
                                B??o c??o hoa h???ng BO</a></li>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':reporttop:'))!==false) {?>
                        <li class="hide"><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
?m=report&act=top" title=""><i class="fa fa-star"
                                    aria-hidden="true"></i> Top
                                h??ng b??n ch???y</a></li>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':reportvoucher:'))!==false) {?>
                        <li class="hide"><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
?m=report&act=voucher" title=""><i class="fa fa-star"
                                    aria-hidden="true"></i>
                                B??o c??o danh s??ch voucher</a></li>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':reportvoucher:'))!==false) {?>
                        <li class="hide"><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
?m=dlc&act=revenue" title=""><i class="fa fa-star"
                                    aria-hidden="true"></i>
                                Doanh s??? c?? nh??n</a></li>
                        <li class="hide"><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
?m=dlc&act=week" title=""><i class="fa fa-star"
                                    aria-hidden="true"></i>
                                Doanh s??? chia s???</a></li>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':commissionbocom:'))!==false) {?>
                        <li class=""><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
?m=report&act=product_debt" title=""><i class="fa fa-star"
                                    aria-hidden="true"></i>B??o c??o h??ng n??? th??nh vi??n</a></li>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':reportorder_list:'))!==false) {?>
                        <li class=""><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
?m=report&act=order_list" title=""><i
                                    class="glyphicon glyphicon-filter" aria-hidden="true"></i> Danh s??ch ????n h??ng</a></li>
                    <?php }?>
                </ul>
            </li>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':newsconfig:'))!==false||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':newscategory:'))!==false||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':newsnews:'))!==false||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':managerinfo:'))!==false||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':managerfooter:'))!==false||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':managercontact:'))!==false||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':managercontact_list:'))!==false||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':managerslide:'))!==false) {?>
                <li <?php if (((string)$_smarty_tpl->tpl_vars['m']->value).((string)$_smarty_tpl->tpl_vars['act']->value)=='newsconfig'||((string)$_smarty_tpl->tpl_vars['m']->value).((string)$_smarty_tpl->tpl_vars['act']->value)=='newscategory'||((string)$_smarty_tpl->tpl_vars['m']->value).((string)$_smarty_tpl->tpl_vars['act']->value)=='newsnews'||((string)$_smarty_tpl->tpl_vars['m']->value).((string)$_smarty_tpl->tpl_vars['act']->value)=='managerinfo'||((string)$_smarty_tpl->tpl_vars['m']->value).((string)$_smarty_tpl->tpl_vars['act']->value)=='managerfooter'||((string)$_smarty_tpl->tpl_vars['m']->value).((string)$_smarty_tpl->tpl_vars['act']->value)=='managercontact'||((string)$_smarty_tpl->tpl_vars['m']->value).((string)$_smarty_tpl->tpl_vars['act']->value)=='managercontact_list'||((string)$_smarty_tpl->tpl_vars['m']->value).((string)$_smarty_tpl->tpl_vars['act']->value)=='managerslide') {?>class="active" <?php }?>>
                <span class="menu-minus">-</span>
                <span class="menu-plus">+</span>
                <a title=""><i class="fa fa-globe" aria-hidden="true"></i> Website</a>
                <ul class="sub">

                    <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':treasurerindex:'))!==false) {?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
/?m=news&act=news" title="Tin t???c"><i class="fa fa-globe"
                                    aria-hidden="true"></i> Tin t???c</a></li>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':treasurerindex:'))!==false) {?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
/?m=news&act=category" title="Danh m???c"><i class="fa fa-globe"
                                    aria-hidden="true"></i> Danh m???c</a></li>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':treasurerindex:'))!==false) {?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
/?m=news&act=config" title="C??i ?????t"><i class="fa fa-globe"
                                    aria-hidden="true"></i> C??i ?????t</a></li>
                    <?php }?>


                    <!--Danh cho menu qu???n l?? web-->
                    <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':treasurerindex:'))!==false) {?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
/?m=manager&act=info" title="Th??ng tin gi???i thi???u"><i class="fa fa-globe"
                                    aria-hidden="true"></i> Th??ng tin gi???i thi???u</a></li>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':treasurerindex:'))!==false) {?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
/?m=manager&act=footer" title="Th??ng tin footer"><i class="fa fa-globe"
                                    aria-hidden="true"></i> Th??ng tin footer</a></li>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':treasurerindex:'))!==false) {?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
/?m=manager&act=contact" title="Th??ng tin li??n h???"><i class="fa fa-globe"
                                    aria-hidden="true"></i> Th??ng tin li??n h???</a></li>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':treasurerindex:'))!==false) {?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
/?m=manager&act=contact_list" title="Danh s??ch li??n h???"><i class="fa fa-globe"
                                    aria-hidden="true"></i> Danh s??ch li??n h???</a></li>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':treasurerindex:'))!==false) {?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
/?m=manager&act=menu" title="Danh s??ch menu"><i class="fa fa-globe"
                                    aria-hidden="true"></i> Danh s??ch menu</a></li>
                    <?php }?>
                    
                </ul>
            </li>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':creditcredit:'))!==false) {?>
                

                    
                    
                    
                
            <?php }?>

        </ul>
    </div>
</section>
<div class="overlay-menu-new"></div>


<script>
    $('body').on('click', '.icon-menu-pc', function() {
        $('.menu-new').toggleClass('active');
        $('.overlay-menu-new').toggle();
    });
    $('body').on('click', '.overlay-menu-new', function() {
        $('.menu-new').toggleClass('active');
        $('.overlay-menu-new').toggle();
    });
    $('body').on('click', '.back-menu', function() {
        $('.menu-new').toggleClass('active');
        $('.overlay-menu-new').toggle();
    });
    $('body').on('click', '.menu-minus', function() {
        $(this).parents('li').find('.sub').slideToggle();
        $('.menu-new ul.menu1>li').removeClass('active');
        $('.menu-minus').removeClass('active');
        $(this).parents('li').addClass('active');
        $(this).removeClass('active');
        $(this).parents('li').find('.menu-plus').addClass('active');
    });
    $('body').on('click', '.menu-plus', function() {
        $(this).parents('li').find('.sub').slideToggle();
        $('.menu-new ul.menu1>li').removeClass('active');
        $('.menu-minus').removeClass('active');
        $(this).parents('li').addClass('active');
        $(this).removeClass('active');
        $(this).parents('li').find('.menu-minus').addClass('active');
    });
    $(window).load(function() {
        var screenHeight = $(this).height() - 61;
        if (screenHeight < 768) {
            $('.menu-new ul.menu1').css('height', screenHeight);
        }
    });
    $(window).resize(function() {
        var screenHeight = $(this).height() - 61;
        if (screenHeight < 768) {
            $('.menu-new ul.menu1').css('height', screenHeight);
        }
    });
</script>


<div class="container">
    <h2 class="title-page"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h2>
</div><?php }} ?>
