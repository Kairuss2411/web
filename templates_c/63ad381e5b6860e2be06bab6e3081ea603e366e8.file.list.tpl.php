<?php /* Smarty version Smarty-3.1.18, created on 2021-09-26 00:34:13
         compiled from "/Users/huan/Desktop/Data/Outsource/erp/posretail/templates/members/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1208681015610fa2aaad38a5-19257471%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63ad381e5b6860e2be06bab6e3081ea603e366e8' => 
    array (
      0 => '/Users/huan/Desktop/Data/Outsource/erp/posretail/templates/members/list.tpl',
      1 => 1632486680,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1208681015610fa2aaad38a5-19257471',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_610fa2aabbac19_79117857',
  'variables' => 
  array (
    'tpldirect' => 0,
    'session' => 0,
    'str_permission' => 0,
    'no_request' => 0,
    'lang' => 0,
    'setup' => 0,
    'decimal' => 0,
    'link' => 0,
    'opt_shop' => 0,
    'opt_group' => 0,
    'opt_all_department' => 0,
    'domain' => 0,
    'opt_city' => 0,
    'opt_title' => 0,
    'opt_all_user' => 0,
    'db_pos' => 0,
    'opt_payment_collect_fund' => 0,
    'otp_cs_type' => 0,
    'opt_period' => 0,
    'version' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610fa2aabbac19_79117857')) {function content_610fa2aabbac19_79117857($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Users/huan/Desktop/Data/Outsource/erp/posretail/library/smarty/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpldirect']->value)."supervisor/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="col-sm-12 col-xs-12">
    <div class="col-sm-12 col-xs-12">
        <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':members_listadd:'))!==false) {?> <a id="btn_waiting"
                title="Ch??? k???t n???i" class="btn btn-default top-5" href="javascript:;"><i
                    class="glyphicon glyphicon-time"></i> Ch??? k???t n???i <?php if ($_smarty_tpl->tpl_vars['no_request']->value!=0) {?><span
                    class="ring_alert"><?php echo $_smarty_tpl->tpl_vars['no_request']->value;?>
</span><?php }?></a>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':members_listimport_members:'))!==false) {?><a
            id="btn_import_excel" class="btn btn-default top-5 btn-width" href="javascript:;">Import Kh??ch H??ng</a><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':members_listmembers_group:'))!==false) {?><a
                id="btn_members_group" class="btn btn-default top-5 btn-width" href="javascript:;">QL nh??m th??nh
            vi??n</a><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':members_listmember_department:'))!==false) {?><a
            id="btn_member_department" class="btn btn-default top-5 btn-width" href="javascript:;">QL Ph??ng ban</a><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':members_listDCG:'))!==false) {?><a id="btn_commission_group"
            class="btn btn-default top-5 btn-width" href="javascript:;">QL nh??m chi???t kh???u & KPI</a><?php }?>
    </div>
</div>

<!--main content-->
<div class="container-fluid">
    <div class="row">

        <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':members_listloyalty:'))!==false) {?>
            <!--Begin Loyalty-->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 loyalty_holder hide">
                <div class="row">
                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 text-center top-5" style="margin-top: 8px;">
                        <?php echo $_smarty_tpl->tpl_vars['lang']->value['lb_cusRewP'];?>

                        <!--??i???m th?????ng--> <span class="badge" data-toggle="tooltip" data-placement="bottom"
                            title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['lb_cusRewN'];?>
">
                            <!--B???n c???n nh???p s??? ti???n ????? l??m h??? s??? quy ?????i ??i???m K. V?? d???: H??? s??? quy ?????i l?? 10,000 v?? t???ng h??a ????n l?? 150,000, kh??ch h??ng s??? ???????c th?????ng 15K. 1k = 1,000 VN??-->
                            ?
                        </span> :
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 top-5 nopadding">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 ncc_radio ncc_radio_add_customer"
                            style="margin-top: -6px;">
                            <label>
                                <input disabled id="ckb_loyalty_0" <?php if ($_smarty_tpl->tpl_vars['setup']->value['loyalty_status']=='0') {?>checked<?php }?> class="ace"
                                    type="radio" id="" name="lblchk">
                                <span class="lbl"></span>
                                <?php echo $_smarty_tpl->tpl_vars['lang']->value['lb_cusNotApp'];?>

                                <!--Kh??ng ??p d???ng-->
                            </label>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 loyalty-convert-hd ncc_radio ncc_radio_add_customer"
                            style="margin-top: -6px;">
                            <label>
                                <input disabled id="ckb_loyalty_1" <?php if ($_smarty_tpl->tpl_vars['setup']->value['loyalty_status']=='1') {?>checked<?php }?> class="ace"
                                    type="radio" id="" name="lblchk">
                                <span class="lbl"></span>
                                <?php echo $_smarty_tpl->tpl_vars['lang']->value['lb_cusKP'];?>

                                <!--Quy ?????i ??i???m K-->
                            </label>
                            <input disabled onkeyup="input_number('#loyalty_convert')" type="text" id="loyalty_convert"
                                value="<?php echo number_format($_smarty_tpl->tpl_vars['setup']->value['loyalty_convert'],$_smarty_tpl->tpl_vars['decimal']->value,'.',',');?>
"
                                style="    background: #fff;border: 1px solid #ddd;padding: 3px 6px;border-radius: 3px;margin-left: 5px;" />
                            = 1k
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 padding-l-70 padding-l-701 padding-l-70111">
                        <label class="top-5">
                            <input disabled <?php if ($_smarty_tpl->tpl_vars['setup']->value['k_pay_allow']=='1') {?>checked<?php }?> type="checkbox" class="ace"
                                id="k_pay">
                            <span class='lbl'></span> <?php echo $_smarty_tpl->tpl_vars['lang']->value['lb_cusAllowK'];?>

                            <!--S??? d???ng K cho thanh to??n bill-->
                        </label>
                        <button onclick="update_loyalty();" id="btn-loyalty"
                            class="btn btn-primary f-right btn-width"><?php echo $_smarty_tpl->tpl_vars['lang']->value['lb_update'];?>

                            <!--C???p nh???t-->
                        </button>
                    </div>
                </div>
            </div>
            <!--End loyalty-->
        <?php }?>

        <!--Begin block list members-->
        <div class="top-10">
            <div class="top-15">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 dsnd1 top-20">
                        <h4 class="title"> <?php echo $_smarty_tpl->tpl_vars['lang']->value['lb_cusCliLi'];?>

                            <!--DANH S??CH KH??CH H??NG--> <a id="total">(0)</a>
                        </h4>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-right text-right-left">
                        <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':members_listadd:'))!==false) {?><button
                            id="btn_add_member" class="btn btn-primary btn-width">Th??m kh??ch h??ng m???i</button><?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':members_listnoti:'))!==false) {?>
                            
                            <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
/?m=members&act=notifications"><button
                                    class="btn btn-info btn-width"><?php echo $_smarty_tpl->tpl_vars['lang']->value['lb_cusMess'];?>

                                    <!--Tin ???? g???i-->
                                </button></a>
                        <?php }?>
                    </div>
                </div>
            </div>
            <div class="top-10 mobile_top5div">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 top-5">
                        <div class="input-group input-group-small">
                            <input id="filter_joined_at" type="text" class="form-control" name="from_date"
                                placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value['lb_cusMemS'];?>
" aria-describedby="sizing-addon1">
                            <span class="input-group-addon" id="sizing-addon1">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 top-5">
                        <select id="filter_shop_id" class="form-control">
                            <option value="">T???t c??? chi nh??nh</option>
                            <?php echo $_smarty_tpl->tpl_vars['opt_shop']->value;?>

                        </select>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 top-5">
                        <select id="filter_is_official" class="form-control">
                            <option value="">Lo???i kh??ch h??ng</option>
                            <option value="1">Kh??ch h??ng c??</option>
                            <option value="0">Kh??ch h??ng m???i</option>
                        </select>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 top-5">
                        <select id="filter_member_group_id" class="form-control">
                            <option value="">T???t c??? nh??m kh??ch h??ng</option>
                            <?php echo $_smarty_tpl->tpl_vars['opt_group']->value;?>

                        </select>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 top-5">
                        <select id="filter_member_department_id" class="form-control">
                            <option value="">T???t c??? ph??ng ban</option>
                            <option value="0">Nh??m m???t ?????nh</option>
                            <?php echo $_smarty_tpl->tpl_vars['opt_all_department']->value;?>

                        </select>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 top-5">
                        <select id="filter_license_to" class="form-control">
                            <option value="0">T???t c??? lo???i t??i kho???n</option>
                            <option value="1">C?? tr??? ph??</option>
                        </select>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 relative top-5">
                        <div class="input-group1">
                            <input id="filter_txt" type="text" class="form-control" placeholder="Email / mobile"
                                aria-describedby="basic-addon1" />
                            <span onclick="list_searching();" id="manual_submit" class="input-group-addon hide"
                                id="basic-addon1"><i class="glyphicon glyphicon-search"></i></span><button
                                id="filter_btn_view" class="btn btn-primary"
                                style="position: absolute;right: 8px;z-index: 111;top: 0px;border-radius: 0px 4px 4px 0px;"><span
                                    class="glyphicon glyphicon-eye-open" style="top: 2px;"></span> <?php echo $_smarty_tpl->tpl_vars['lang']->value['lb_view'];?>

                                <!--Xem-->
                            </button>
                        </div>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':members_listdl_members:'))!==false) {?>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 top-5">
                            <button id="filter_btn_download" class="form-control btn btn-primary"> Download</button>
                        </div>
                    <?php }?>
                </div>
                <div class="top-10">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered text-center members member_list table-bg-no">
                            <thead id="">
                                <tr>
                                    <th width="5%"><input class="" id="ck_all"
                                            onclick="check_all('#ck_all', '.ck_items')" type="checkbox"></th>
                                    <th width="5%">#ID <a field="user_id"
                                            class="glyphicon glyphicon-chevron-up sortBy"></a> </th>
                                    <th width="5%">M?? KH <a field="code"
                                            class="glyphicon glyphicon-chevron-up sortBy"></a> </th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['lb_cusFullN'];?>

                                        <!--H??? T??n--> <a field="fullname"
                                            class="glyphicon glyphicon-chevron-up sortBy"></a>
                                    </th>
                                    <th>Nh??m kh??ch h??ng <a field="member_group_name"
                                            class="glyphicon glyphicon-chevron-up sortBy"></a></th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['lb_cusSince'];?>

                                        <!--T??? ng??y--> <a field="joined_at"
                                            class="glyphicon glyphicon-chevron-up sortBy"></a>
                                    </th>
                                    <th>Mobile</th>
                                    <th>Chi nh??nh <a field="shop_name"
                                            class="glyphicon glyphicon-chevron-up sortBy"></a></th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['lb_cusLasted'];?>

                                        <!--G???n nh???t--> <a field="last_transaction"
                                            class="glyphicon glyphicon-chevron-up sortBy"></a>
                                    </th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['lb_liabilities'];?>
 <a field="total_liabilities"
                                            class="glyphicon glyphicon-chevron-up sortBy"></a></th>
                                    <th>
                                        
                                            </a>
                                    </th>
                                    <th class="hide"><?php echo $_smarty_tpl->tpl_vars['lang']->value['lb_cusTolP'];?>

                                        <!--T???ng ??i???m--> <a field="point"
                                            class="glyphicon glyphicon-chevron-up sortBy"></a>
                                    </th>
                                </tr>
                            </thead>
                            <thead id="list_members">
                                <tr>
                                    <th colspan="4" class="text-right"></th>
                                    <th colspan="" class="text-right">T???ng c??ng n???:</th>
                                    <th class="" id="tpl_total_debt_value">-</th>
                                    <th class="" id="">???? tr???:</th>
                                    <th class="color-green" id="tpl_total_debt_paid">-</th>
                                    <th class="color-green" id="">C??n l???i:</th>
                                    <th class="color-red" id="tpl_total_debt_left">-</th>
                                    <th id="tpl_total_spent-">-</th>
                                </tr>
                            </thead>

                        </table>
                    </div>
                </div>
            </div>
        </div>

        <script>
            $('.profile_info .nav li a').click(function() {
                var data_toggle = $(this).attr('data-toggle');
                $(this).parents('.profile_info').find('.tab-content .tab_pro').removeClass('active');
                $(this).parents('.profile_info').find('.tab-content .' + data_toggle).addClass('active');
                $(this).parents('.nav').find('li').removeClass('active');
                $(this).parent().addClass('active');
            });
        </script>
        <!--End block list members-->

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="paging L" id="page_html">
            </div>
            <input id="recent_page" hidden class="hidden" value="1" />
        </div>
    </div>
</div>
<!--end main content-->

<div class="modal fade" id="modal_add_member" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="pop_up_T" id="modal_add_member_title">C???p nh???t th??ng tin kh??ch h??ng</div>
            <a class="btn_pop_close close" data-dismiss="modal" aria-label="Close"></a>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12 text-center">

                        <label class="label_name">H??nh ?????i di???n</label>
                        <div class="avatar_thumbs">
                            <a onclick="click_file('avatar_file')" id="load_img"
                                style="width: 130px;height: 130px;display:inline-block;">
                                <img id="avatar" src="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
/images/no_joined.png">
                            </a>
                        </div>
                        <span class="hide">
                            <input class="hide" name="files" type="file" accept="image/x-png,image/gif,image/jpeg"
                                id="avatar_file" value="">
                            <input class="hide" type="text" id="avatar_val" value="">
                        </span>
                        <div class="wrap_name hide">
                            <label class="label_name"></label>
                            <label class="field_L1">
                                Kh??ch s???
                                <input id="is_wholesale_customer" name="" checked="" class="ace" type="checkbox">
                                <span class="lbl active"></span>
                            </label>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">

                                <div class="wrap_name">
                                    <label class="label_name">M?? kh??ch h??ng</label>
                                    <div class="input_name">
                                        <input id="code" class="form-control" type="text" name="" value="">
                                    </div>
                                </div>

                                <div class="wrap_name">
                                    <label class="label_name">T??n kh??ch h??ng</label>
                                    <div class="input_name">
                                        <input id="fullname" class="form-control" type="text" name="" value="">
                                    </div>
                                </div>

                                <div class="wrap_name">
                                    <label class="label_name">CMND</label>
                                    <div class="input_name">
                                        <input id="cmnd" class="form-control" type="text" name="" value="">
                                    </div>
                                </div>
                                <div class="wrap_name">
                                    <label class="label_name">??i???n tho???i</label>
                                    <div class="input_name">
                                        <input id="mobile" class="form-control" type="text" name="" value="">
                                    </div>
                                </div>
                                <div class="wrap_name">
                                    <label class="label_name">Email</label>
                                    <div class="input_name">
                                        <input id="email" class="form-control" type="text" name="" value="">
                                    </div>
                                </div>
                                <div class="wrap_name">
                                    <label class="label_name">Website</label>
                                    <div class="input_name">
                                        <input id="facebook" class="form-control" type="text" name="" value="">
                                    </div>
                                </div>
                                <div class="wrap_name">
                                    <label class="label_name">Web ID:</label>
                                    <div class="input_name">
                                        <input id="web_id" class="form-control" type="text" name="" value="">
                                    </div>
                                </div>
                                <div class="wrap_name">
                                    <label class="label_name">Ng??y sinh</label>
                                    <div class="input_name">
                                        <input id="birth_day" class="form-control" type="text" name="" value="">
                                    </div>
                                </div>
                                <div class="wrap_name">
                                    <label class="label_name">T???nh/ Th??nh Ph???</label>
                                    <div class="input_name">
                                        <select class="form-control" id="city">
                                            <option value="0">Ch???n T???nh/ Th??nh</option>
                                            <?php echo $_smarty_tpl->tpl_vars['opt_city']->value;?>

                                        </select>
                                    </div>
                                </div>
                                <div class="wrap_name">
                                    <label class="label_name">Qu???n/ Huy???n</label>
                                    <div class="input_name">
                                        <select class="form-control" id="district">
                                            <option value="0">Ch???n Qu???n/ Huy???n</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="wrap_name">
                                    <label class="label_name">Ph?????ng/ X??</label>
                                    <div class="input_name">
                                        <select class="form-control" id="ward">
                                            <option value="0">Ch???n Ph?????ng/ X??</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="wrap_name">
                                    <label class="label_name">?????a ch???</label>
                                    <div class="input_name">
                                        <input id="address" class="form-control" type="text" name="" value="">
                                    </div>
                                </div>

                                <div class="wrap_name">
                                    <label class="label_name">T??n ng??n h??ng</label>
                                    <div class="input_name">
                                        <input id="bank_name" class="form-control" type="text" name="" value="">
                                    </div>
                                </div>
                                <div class="wrap_name">
                                    <label class="label_name">S??? t??i kho???n ng??n h??ng</label>
                                    <div class="input_name">
                                        <input id="bank_account" class="form-control" type="text" name="" value="">
                                    </div>
                                </div>
                                <div class="wrap_name">
                                    <label class="label_name">T??n ch??? t??i kho???n ng??n h??ng</label>
                                    <div class="input_name">
                                        <input id="bank_fullname" class="form-control" type="text" name="" value="">
                                    </div>
                                </div>
                                <div class="wrap_name">
                                    <label class="label_name">Chi nh??nh t??i kho???n ng??n h??ng</label>
                                    <div class="input_name">
                                        <input id="bank_branch" class="form-control" type="text" name="" value="">
                                    </div>
                                </div>
                                <div class="wrap_name">
                                    <label class="label_name">Ng??n h??ng thu???c t???nh th??nh</label>
                                    <div class="input_name">
                                        <input id="bank_city" class="form-control" type="text" name="" value="">
                                    </div>
                                </div>

                                <div class="wrap_name">
                                    <label class="label_name">Nh??m kh??ch h??ng</label>
                                    <div class="input_name">
                                        <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                                            <select class="form-control" id="member_group_id">
                                                <?php echo $_smarty_tpl->tpl_vars['opt_group']->value;?>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap_name">
                                    <label class="label_name">Ch???c danh</label>
                                    <div class="input_name">
                                        <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                                            <select class="form-control" id="member_title_id">
                                                <?php echo $_smarty_tpl->tpl_vars['opt_title']->value;?>

                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="wrap_name">
                                    <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                                        <label class="label_name">M???t kh???u</label>
                                        <div class="input_name">
                                            <input id="password" class="form-control text-center" type="text" name=""
                                                value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap_name">
                                    <div class="col-md-6 col-sm-6 col-xs-12 nopadding">
                                        <label class="label_name">T???ng ??i???m ???? d??ng</label>
                                        <div class="input_name">
                                            <input id="total_spent" class="form-control text-center" type="text" name=""
                                                value="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 nopadding">
                                        <label class="label_name">T???ng ??i???m t??ch l??y</label>
                                        <div class="input_name">
                                            <input id="point" class="form-control text-center" type="text" name=""
                                                value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap_name">
                                    <label class="label_name">M?? s??? thu???</label>
                                    <div class="input_name">
                                        <input id="tax" class="form-control" type="text" name="" value="">
                                    </div>
                                </div>
                                <div class="wrap_name">
                                    <label class="label_name">Gi???i t??nh</label>
                                    <div class="input_name">
                                        <div class="ncc_radio ncc_radio_add_customer"
                                            style="margin-top:0px;margin-bottom: -14px;">
                                            <label class="field_L1">
                                                <input id="sex_1" name="radio_gt" checked="" class="ace" type="radio">
                                                <span class="lbl active"></span>
                                                Nam
                                            </label>
                                            <label class="field_L1">
                                                <input id="sex_0" name="radio_gt" class="ace" type="radio">
                                                <span class="lbl"></span>
                                                N???
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap_name">
                                    <label class="label_name">Nh??n vi??n ph??? tr??ch</label>
                                    <div class="input_name">
                                        <select id="by_user_cs" class="form-control">
                                            <option value="0">M???c ?????nh</option>
                                            <?php echo $_smarty_tpl->tpl_vars['opt_all_user']->value;?>

                                        </select>
                                    </div>
                                </div>
                                <div class="wrap_name">
                                    <label class="label_name">Ph??ng ban</label>
                                    <div class="input_name">
                                        <select id="member_department_id" class="form-control">
                                            <option value="0">M???c ?????nh</option>
                                            <?php echo $_smarty_tpl->tpl_vars['opt_all_department']->value;?>

                                        </select>
                                    </div>
                                </div>
                                <div class="wrap_name hide">
                                    <label class="label_name">C???m</label>
                                    <div class="input_name">
                                        <input id="cum" class="form-control" type="text" name="" value="">
                                    </div>
                                </div>
                                <div class="wrap_name hide">
                                    <label class="label_name">Ph??ng kinh doanh</label>
                                    <div class="input_name">
                                        <input id="pkd" class="form-control" type="text" name="" value="">
                                    </div>
                                </div>
                                <div class="wrap_name hide">
                                    <label class="label_name">Khu v???c kinh doanh</label>
                                    <div class="input_name">
                                        <input id="kvkd" class="form-control" type="text" name="" value="">
                                    </div>
                                </div>
                                <div class="wrap_name hide">
                                    <label class="label_name">Gi??m ?????c kinh doanh</label>
                                    <div class="input_name">
                                        <input id="gdkd" class="form-control" type="text" name="" value="">
                                    </div>
                                </div>
                                <div class="wrap_name hide">
                                    <label class="label_name">Chi nh??nh</label>
                                    <div class="input_name">
                                        <input id="chinhanh" class="form-control" type="text" name="" value="">
                                    </div>
                                </div>
                                <div class="wrap_name">
                                    <label class="label_name">Ng?????i gi???i thi???u <?php if ($_smarty_tpl->tpl_vars['db_pos']->value=='derp') {?><b
                                            class="color-red">(ID Website)</b><?php }?></label>
                                    <div class="input_name">
                                        <input id="referral_by" class="form-control" type="text" name="" value="">
                                    </div>
                                </div>
                                <div class="wrap_name">
                                    <label class="label_name">Lo???i kh??ch h??ng</label>
                                    <div class="input_name">
                                        <select id="is_official" class="form-control">
                                            <option value="0">Kh??ch h??ng m???i</option>
                                            <option value="1">Kh??ch h??ng c??</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="wrap_name">
                                    <label class="label_name">Tr???ng th??i t??i kho???n</label>
                                    <div class="input_name">
                                        <select id="activate" class="form-control">
                                            <option value="0">V?? hi???u h??a</option>
                                            <option value="1">K??ch ho???t</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="wrap_name">
                                    <label class="label_name">Thu???c chi nh??nh</label>
                                    <div class="input_name">
                                        <select id="shop_id" class="form-control">
                                            <?php echo $_smarty_tpl->tpl_vars['opt_shop']->value;?>

                                        </select>
                                    </div>
                                </div>
                                <div class="wrap_name">
                                    <label class="label_name">Ghi ch??</label>
                                    <div class="input_name">
                                        <textarea id="note"
                                            style="width: 100% !important;border: none;border-bottom: 1px solid #ddd;min-height: 92px;"></textarea>
                                    </div>
                                </div>

                                <div class="wrap_name">
                                    <label class="label_name">T???nh/ Th??nh qu???n l??</label>
                                    <div class="input_name">
                                        <span id="city_allowed_holder"></span>
                                        <input id="city_allowed" placeholder="Nh???p T???nh/ Th??nh"
                                            class="form-control top-10" type="text" name="city_allowed"
                                            autocomplete="off" value="">
                                    </div>
                                </div>

                                <div class="wrap_name">
                                    <label class="label_name">Qu???n/ Huy???n qu???n l??</label>
                                    <div class="input_name">
                                        <span id="district_allowed_holder"></span>
                                        <input id="district_allowed" placeholder="Nh???p Qu???n/ Huy???n"
                                            class="form-control top-10" type="text" name="district_allowed"
                                            autocomplete="off" value="">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <label class="label_name">CMND m???t tr?????c</label>
                        <div class="avatar_thumbs">
                            <a onclick="click_file('cmnd_frontside')" id="load_img_cmnd_t"
                                style="width: 224px;height: 150px;display:inline-block;margin: 0px;">
                                <img id="avatar_cmnd_t" src="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
/images/cmnd_t.jpg">
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <label class="label_name">CMND m???t sau</label>
                        <div class="avatar_thumbs">
                            <a onclick="click_file('cmnd_backside')" id="load_img_cmnd_s"
                                style="width: 224px;height: 150px;display:inline-block;margin: 0px;">
                                <img id="avatar_cmnd_s" src="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
/images/cmnd_s.jpg">
                            </a>
                        </div>
                    </div>

                    <div class="hide">
                        <input class="hide" name="files" type="file" accept="image/x-png,image/gif,image/jpeg"
                            id="cmnd_frontside" value="">
                        <input class="hide" name="" type="text" id="cmnd_frontside_val" value="">
                        <input class="hide" name="files" type="file" accept="image/x-png,image/gif,image/jpeg"
                            id="cmnd_backside" value="">
                        <input class="hide" name="" type="text" id="cmnd_backside_val" value="">
                        <input class="hide" name="files" type="file"
                            accept="image/x-png,image/gif,image/jpeg,.pdf,.doc,.xls,.xlsx,.docx,.ptt,.pttx" id="docs"
                            value="">
                    </div>

                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <label class="label_name">H??nh ???nh li??n quan</label>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div id="before_docs" class="avatar_thumbs avatar_thumbs_lq col-sm-2">
                            <a onclick="click_file('docs')" id="load_img_docs">
                                <img id="avatar" src="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
/images/upload.png">
                            </a>
                        </div>
                    </div>

                    <div class="clear"></div>
                    <div class="text-right btn-success1">
                        <a class="close" data-dismiss="modal" aria-label="Close">Hu???</a>
                        <a id="btn_submit" href="javascript:;">L??u</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--BEGIN MODAL-->
<div class="modal fade" id="modal_send_notification" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-large">
        <div class="modal-header noborder">
            <a data-dismiss="modal" class="close" href="#">?? </a>
            <h4 class="background-header-blue">G???i tin nh???n ?????n kh??ch h??ng</h4>
        </div>
        <div class="modal-body nopadding margintop-10 bg-white bx-viewport">
            <div class="col-lg-5 col-md-5 col-sm-5">
                <div id="" class="col-lg-12 col-md-12 col-sm-12 nt-list-members">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped text-center">
                            <thead>
                                <tr>
                                    <td><label onclick="check_all('#ace_check_all', '.member-row');"><input
                                                id="ace_check_all" class="ace" type="checkbox"><span
                                                class="lbl"></span></label></td>
                                    <td>
                                        T??n kh??ch h??ng
                                    </td>
                                    <td>
                                        T???ng ??i???m
                                    </td>
                                    <td>
                                        T???nh/ Th??nh ph???
                                    </td>
                                    <td>
                                        T??? ng??y
                                    </td>
                                </tr>
                            </thead>
                            <tbody id="nt_list_members">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-7">
                <div id="nt-hd-content" class="col-lg-12 col-md-12 col-sm-12 nt-content">
                    <div class="col-lg-2 col-md-2 col-sm-2 top-5">
                        - Ti??u ?????:
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-10 top-5">
                        <input id="nt_title" class="form-control" name="">
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        - N???i dung:
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <textarea width="100%" id="nt_content"></textarea>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 top-10">
                        <button id="btn-nt-send" class="btn btn-primary"> G???i tin nh???n </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--END MODAL-->

<!--BEGIN MODAL-->
<div class="modal fade" id="modal_member_history" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-medium">
        <div class="modal-header noborder">
            <a data-dismiss="modal" class="close" href="#"> ?? </a>
            <h4 class="background-header-blue">Th???ng k?? mua h??ng</h4>
        </div>
        <div class="modal-body nopadding margintop-10 bg-white bx-viewport">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 top-10">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    <select id="shop_id" class="form-control">
                        <?php echo $_smarty_tpl->tpl_vars['opt_shop']->value;?>

                    </select>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <input placeholder="T??? ng??y" class="form-control" id="from_date"
                        value="<?php echo smarty_modifier_date_format(time(),"01/m/Y");?>
">
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <input placeholder="?????n ng??y" class="form-control" id="to_date"
                        value="<?php echo smarty_modifier_date_format(time(),"d/m/Y");?>
">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <button onclick="member_history();" class="btn btn-primary btn-width">Xem</button>
                    <button class="btn btn-primary btn-width">T???i</button>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <button onclick="member_history();" class="btn btn-primary btn-width">Xem</button>
                <button class="btn btn-primary btn-width">T???i</button>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 top-10 holder-member-history">
            <div class="table-responsive">
                <table class="table table-bordered table-triped text-center">
                    <thead>
                        <tr>
                            <th>M?? h??ng</th>
                            <th>T??n h??ng h??a</th>
                            <th>S??? l?????ng</th>
                            <th>????n gi??</th>
                            <th>Gi???m gi??</th>
                            <th>Th??nh ti???n</th>
                            <th>Gi?? v???n</th>
                            <th>L??i BH</th>
                        </tr>
                    </thead>
                    <tbody id="list_member_history">
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
<!--END MODAL-->

<!--BEGIN Modal import file excel-->
<div class="modal fade" id="modal_upload_excel" tabindex="-1" role="dialog" aria-spanledby="myModalspan"
    aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <a data-dismiss="modal" class="close" href="#">?? </a>
                <h4 class="title" id="title_menu">Nh???p kh??ch h??ng t??? Excel</h4>
            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 top-5 text-center">
                                - Ch???n file Excel:
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                <input type="file" class="form-control" name="" id="file_excel"
                                    accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel"
                                    value="">
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
                                <button id="btn_exe_import_excel" class="btn btn-primary btn-width">Import</button>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4 top-5">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
/uploads/attachment/FormCustomerImport.xlsx" download>
                                    T???i file m???u v???
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 top-10">
                            <div id="hd_table_import_excel_menu" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <table id="table_import_excel_menu" class="table table-striped">
                                    <tbody id="html_excel">

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!--END Modal import file excel-->

<!--BEGIN Modal member group-->
<div class="modal fade" id="modal_member_groups" tabindex="-1" role="dialog" aria-spanledby="myModalspan"
    aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-md-height">
        <div class="modal-content">
            <div class="modal-header">
                <a data-dismiss="modal" class="close" href="#">?? </a>
                <h4 class="title" id="title_menu">Nh??m kh??ch h??ng</h4>
            </div>
            <div class="modal-body">

                <div class="row modal-tag-height">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="col-sm-10 col-xs-10 text-right">
                            <a id="dl_member_group_detail" class="cursor-pointer"><i><u>T???i chi ti???t</u></i></a>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="table-responsive">
                            <div class="col-sm-12 col-xs-12">

                                <div class="hold-gid-add pull-right wrap-info-in">
                                    <div id="hd_member_group_add_name" class="col-sm-10 hide">
                                        <input id="member_group_add_name" class="" value=""
                                            placeholder="Nh???p t??n nh??m" />
                                    </div>
                                    <div class="col-sm-2">
                                        <span id="mb_group_btn_add" style="display: inline;">
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
/images/add_pro.png" width="30">
                                        </span>
                                    </div>
                                </div>

                                <div class="col-sm-12 top-20">
                                    <ul id="tab_list_member_group" class="nav nav-tabs nav-storing tab-list-gid">
                                    </ul>
                                </div>

                            </div>
                            <div class="col-sm-12 col-xs-12 top-20">
                                <ul id="list_member_groups" class="child-group">
                                </ul>
                                <table class="table table-striped">
                                    <tbody id="list_member_groupsxx">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <div class="bootstrap-dialog-footer">
                        <div class="bootstrap-dialog-footer-buttons">
                            <button data-dismiss="modal" class="btn btn_w btn-primary"><?php echo $_smarty_tpl->tpl_vars['lang']->value['lb_done'];?>
</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!--END Modal member group-->

<!--BEGIN Modal Member department-->
<div class="modal fade" id="modal_department" tabindex="-1" role="dialog" aria-spanledby="myModalspan"
    aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a data-dismiss="modal" class="close" href="#">?? </a>
                <h4 class="title" id="title_menu">Ph??ng ban - Khu v???c kinh doanh</h4>
            </div>
            <div class="modal-body">

                <div class="row modal-tag-height">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="col-sm-10 col-xs-10 text-right">
                            <a id="dl_member_department_detail" class="cursor-pointer"><i><u>T???i chi ti???t</u></i></a>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div role="tabpanel">

                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#departmentlevel" aria-controls="departmentlevel" role="tab"
                                        data-toggle="tab">
                                        Ph??n c???p ph??ng ban
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#departmentleveldetail" aria-controls="departmentleveldetail" role="tab"
                                        data-toggle="tab">
                                        Chi ti???t ph??ng ban
                                    </a>
                                </li>
                                <li id="tab_departMRe" role="presentation">
                                    <a href="#departmentleveldetaillist" aria-controls="departmentleveldetaillist"
                                        role="tab" data-toggle="tab">
                                        Theo danh s??ch
                                    </a>
                                </li>

                            </ul>

                            <!-- Tab panes -->
                            <div class="custome-tab-content tab-content tab-setting">

                                <!-- Tab Ph??n c???p -->
                                <div role="tabpanel" class="tab-pane active" id="departmentlevel">
                                    <ul id="list_department" class="nav nav-tabs nav-storing child-group">
                                    </ul>
                                </div>

                                <!-- Tab Chi ti???t -->
                                <div role="tabpanel" class="tab-pane" id="departmentleveldetail">
                                    <div id="list_department_sub" class="table-responsive">
                                    </div>
                                </div>

                                <!-- Tab Chi ti???t -->
                                <div role="tabpanel" class="tab-pane" id="departmentleveldetaillist">
                                    <div class="col-sm-12 col-xs-12 nopadding top-10">
                                        <div class="col-sm-4 col-xs-12">
                                            <select id="departMRe_root_id" class="form-control top-5">
                                                <option value="">T???t c??? c???p ph??ng ban</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-4 col-xs-12 top-5 nopadding">
                                            <div class="input-group1">
                                                <input id="departMRe_keyword" type="text" class="form-control"
                                                    placeholder="T??n/ M?? ph??ng ban" aria-describedby="basic-addon1">
                                                <span id="manual_submit" class="input-group-addon hide">
                                                    <i class="glyphicon glyphicon-search"></i>
                                                </span>
                                                <button id="departMRe_btn_view" class="btn btn-primary"
                                                    style="position: absolute;right: 0px;z-index: 111;top: 0px;border-radius: 0px 4px 4px 0px;">
                                                    <span class="glyphicon glyphicon-eye-open" style="top: 2px;"></span>
                                                    Xem
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-xs-12 nopadding top-10">
                                    </div>
                                    <div class="table-responsive top-10">
                                        <table
                                            class="table  table-striped table-bordered text-center members table-bg-no">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>C???p ph??ng ban</th>
                                                    <th>T??n ph??ng ban</th>
                                                    <th>Qu???n l?? hoa h???ng</th>
                                                    <th>Qu???n l?? doanh s???</th>
                                                    <th>Nh??m chi???t kh???u</th>
                                                    <th>Nh??m KPI</th>
                                                    <th width="6%">@</th>
                                                </tr>
                                            </thead>
                                            <tbody id="departMRe_by_list" class="row-membersx">
                                            </tbody>
                                        </table>

                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="paging L" id="departMRe_page_html">
                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>

            <div class="modal-footer">
                <div class="bootstrap-dialog-footer">
                    <div class="bootstrap-dialog-footer-buttons">
                        <button data-dismiss="modal" class="btn btn_w btn-default"><?php echo $_smarty_tpl->tpl_vars['lang']->value['lb_done'];?>
</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!--END Modal Member department-->

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpldirect']->value)."members/subtpl/kpicom_modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<!--BEGIN modal Thu c??ng n???-->
<div class="modal fade" id="modal_liabilities_collect_fund" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-small">
        <div class="modal-content">
            <div id="md_liabilities_title" class="pop_up_T">Chi tr??? ti???n c??ng n??? nh?? cung c???p/Thu c??ng n??? kh??ch h??ng
            </div>
            <a class="btn_pop_close close" data-dismiss="modal" aria-label="Close"></a>
            <div class="modal-body">
                <div class="row">

                    <div class="col-sm-12 wrap_name">
                        <div class="col-sm-3 col-xs-12">
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div id="md_liabilities_payment_type" class="col-sm-12 col-xs-12 top-5">
                                H??nh th???c thu chi
                            </div>
                            <div class="col-sm-12 col-xs-12 input_name top-5">
                                <select id="payment_type" class="form-control">
                                    <?php echo $_smarty_tpl->tpl_vars['opt_payment_collect_fund']->value;?>

                                </select>
                            </div>
                        </div>

                        <div class="col-sm-12 wrap_name">
                            <div class="col-sm-3 col-xs-12 top-10">
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="col-sm-12 col-xs-12 top-5">
                                    L?? do
                                </div>
                                <div class="col-sm-12 col-xs-12 input_name top-5">
                                    <select id="lia_treasurer_group_id" class="form-control">
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-12 wrap_name top-10">
                                <div class="col-sm-3 text-right">
                                </div>
                                <div class="col-sm-6">
                                    <div class="col-sm-12 input_name">
                                        Ghi ch??:
                                    </div>
                                    <div class="col-sm-12 input_name">
                                        <textarea id="liabilities_note" class="form-control" rows="2"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 text-center label_name" id="md_liabilities_notice">
                            </div>
                            <div class="col-sm-12 wrap_name top-10">
                                <div class="col-sm-3 text-right">
                                </div>
                                <div class="col-sm-6 input_name">
                                    <a id="liabilities_all" class="collected-all">T???t c???</a>
                                    <input id="liabilities_total_paid" placeholder="S??? ti???n thu"
                                        class="form-control number-format" value="" />
                                    <span id="liabilities_err" class="color-red"></span>
                                </div>
                            </div>

                            <div class="col-sm-12 wrap_name top-10">
                                <div class="col-sm-4">
                                </div>
                                <div class="col-sm-2 text-center">
                                    <p id="md_liabilities_lb_total_left">C??n n???</p>
                                    <p id="md_total_left">-</p>
                                </div>
                                <div class="col-sm-2 text-center color-red">
                                    <p id="md_liabilities_lb_total_paid">???? chi</p>
                                    <p id="md_total_paid">-</p>
                                </div>
                            </div>
                            <div class="col-sm-12 wrap_name top-10">
                                <div class="col-sm-3">
                                </div>
                                <div class="col-sm-6 text-center">
                                    <span id="liabilities_status"></span>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="modal-footer">
                        <div class="bootstrap-dialog-footer">
                            <div class="bootstrap-dialog-footer-buttons">
                                <button data-dismiss="modal" class="btn btn_w btn-default"><?php echo $_smarty_tpl->tpl_vars['lang']->value['lb_cancel'];?>
</button>
                                <button id="btn_liabilities_done" class="btn btn_w btn-success"><?php echo $_smarty_tpl->tpl_vars['lang']->value['lb_done'];?>
</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!--END modal Thu c??ng n???-->

<!--BEGIN modal ch???n ng??y xu???t c??ng n???-->
<div class="modal fade" id="modal_export_liabilities" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-small">
        <div class="modal-content">
            <div class="pop_up_T">Ch???n k??? c??ng n???</div>
            <a class="btn_pop_close close" data-dismiss="modal" aria-label="Close"></a>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2">
                        </div>
                        <div class="col-sm-4">
                            <div class="input-group">
                                <input id="liability_period_from" type="text" class="form-control" placeholder="T??? ng??y"
                                    aria-describedby="basic-addon1">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="input-group">
                                <input id="liability_period_to" type="text" class="form-control" placeholder="?????n ng??y"
                                    aria-describedby="basic-addon1">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <div class="bootstrap-dialog-footer">
                    <div class="bootstrap-dialog-footer-buttons">
                        <button data-dismiss="modal" class="btn btn_w btn-default"><?php echo $_smarty_tpl->tpl_vars['lang']->value['lb_cancel'];?>
</button>
                        <button id="btn_liability_period" class="btn btn_w btn-success">Xu???t Excel</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!--END modal Thu c??ng n???-->

<!--BEGIN modal request-->
<div class="modal fade" id="modal_request_list" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-small">
        <div class="modal-content">
            <div class="pop_up_T">Danh s??ch y??u c???u</div>
            <a class="btn_pop_close close" data-dismiss="modal" aria-label="Close"></a>
            <div class="modal-body">
                <div class="row">
                    <div id="body_request_list" class="col-sm-12">
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <div class="bootstrap-dialog-footer">
                    <div class="bootstrap-dialog-footer-buttons">
                        <button data-dismiss="modal" class="btn btn_w btn-default">OK</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!--END modal Thu c??ng n???-->

<!--BEGIN modal ADD CS LOG-->
<div class="modal fade" id="modal_cs_add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
    data-backdrop="static">
    <div class="modal-dialog modal-small">
        <div class="modal-content">
            <div class="pop_up_T">Th??m nh???t k??</div>
            <a class="btn_pop_close close" data-dismiss="modal" aria-label="Close"></a>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <div class="wrap_name">
                            <label class="label_name">Nh??m nh???t k??</label>
                            <div class="input_name">
                                <select id="cs_log_type" class="form-control">
                                    <?php echo $_smarty_tpl->tpl_vars['otp_cs_type']->value;?>

                                </select>
                            </div>
                        </div>
                        <div class="wrap_name">
                            <label class="label_name">N???i dung</label>
                            <div class="input_name">
                                <textarea id="cs_log_content"
                                    style="width: 100% !important;border: none;border-bottom: 1px solid #ddd;min-height: 92px;"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <div class="bootstrap-dialog-footer">
                    <div class="bootstrap-dialog-footer-buttons">
                        <button data-dismiss="modal" class="btn btn_w btn-default">H???y</button>
                        <button id="btn_cs_log_add" class="btn btn_w btn-success">Th??m</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!--END modal ADD CS LOG-->

<!--BEGIN modal Thu c??ng n??? h??ng lo???t-->
<div class="modal fade" id="modal_liabilities_collect_fund_all" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-small">
        <div class="modal-content">
            <div id="md_liabilities_title" class="pop_up_T">Chi tr??? ti???n c??ng n??? nh?? cung c???p/Thu c??ng n??? kh??ch h??ng
            </div>
            <a class="btn_pop_close close" data-dismiss="modal" aria-label="Close"></a>
            <div class="modal-body">
                <div class="row">

                    <div class="col-sm-12 wrap_name">
                        <div class="col-sm-3 col-xs-12">
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div id="md_liabilities_payment_type" class="col-sm-12 col-xs-12 top-5">
                                H??nh th???c thu chi
                            </div>
                            <div class="col-sm-12 col-xs-12 input_name top-5">
                                <select id="lia_all_payment_type" class="form-control">
                                    <?php echo $_smarty_tpl->tpl_vars['opt_payment_collect_fund']->value;?>

                                </select>
                            </div>
                        </div>

                        <div class="col-sm-12 wrap_name">
                            <div class="col-sm-3 col-xs-12 top-10">
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="col-sm-12 col-xs-12 top-5">
                                    L?? do
                                </div>
                                <div class="col-sm-12 col-xs-12 input_name top-5">
                                    <select id="lia_all_treasurer_group_id" class="form-control">
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-12 wrap_name top-10">
                                <div class="col-sm-3 text-right">
                                </div>
                                <div class="col-sm-6">
                                    <div class="col-sm-12 input_name">
                                        Ghi ch??:
                                    </div>
                                    <div class="col-sm-12 input_name">
                                        <textarea id="lia_all_note" class="form-control" rows="2"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 text-center label_name" id="md_liabilities_notice">
                            </div>
                            <div class="col-sm-12 wrap_name top-10">
                                <div class="col-sm-3 text-right">
                                </div>
                                <div class="col-sm-6 input_name">
                                    <a id="lia_all_liabilities_all" class="collected-all">T???t c???</a>
                                    <input id="lia_all_total_paid" placeholder="S??? ti???n thu"
                                        class="form-control number-format" value="" />
                                    <span id="lia_all_err" class="color-red"></span>
                                </div>
                            </div>

                            <div class="col-sm-12 wrap_name top-10">
                                <div class="col-sm-4">
                                </div>
                                <div class="col-sm-2 text-center">
                                    <p id="md_lia_all_lb_total_left">C??n n???</p>
                                    <p id="md_lia_all_total_left" total_left="">-</p>
                                </div>
                                <div class="col-sm-2 text-center color-red">
                                    <p id="md_lia_all_lb_total_paid">???? chi</p>
                                    <p id="md_lia_all_total_paid">-</p>
                                </div>
                            </div>
                            <div class="col-sm-12 wrap_name top-10">
                                <div class="col-sm-3">
                                </div>
                                <div class="col-sm-6 text-center">
                                    <span id="lia_all_status"></span>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="modal-footer">
                        <div class="bootstrap-dialog-footer">
                            <div class="bootstrap-dialog-footer-buttons">
                                <button data-dismiss="modal" class="btn btn_w btn-default"><?php echo $_smarty_tpl->tpl_vars['lang']->value['lb_cancel'];?>
</button>
                                <button id="btn_lia_all_done" class="btn btn_w btn-success"><?php echo $_smarty_tpl->tpl_vars['lang']->value['lb_done'];?>
</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!--END modal Thu c??ng n??? h??ng lo???t-->

<!--BEGIN modal t???o c??ng n???-->
<div class="modal fade" id="modal_liabilities_collect_fund_add" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-small">
        <div class="modal-content">
            <div id="md_liabilities_title" class="pop_up_T">T???o c??ng n???
            </div>
            <a class="btn_pop_close close" data-dismiss="modal" aria-label="Close"></a>
            <div class="modal-body">
                <div class="row">

                    <div class="col-sm-12 wrap_name">
                        <div class="col-sm-3 col-xs-12">
                        </div>

                        <div class="col-sm-12 wrap_name">
                            <div class="col-sm-3 col-xs-12 top-10">
                            </div>
                            <div class="col-sm-12 wrap_name top-10">
                                <div class="col-sm-3 text-right">
                                </div>
                                <div class="col-sm-6">
                                    <div class="col-sm-12 input_name">
                                        M?? ????n h??ng:
                                    </div>
                                    <div class="col-sm-12 input_name">
                                        <textarea id="lia_add_order_id" class="form-control" rows="2"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 wrap_name top-10">
                                <div class="col-sm-3 text-right">
                                </div>
                                <div class="col-sm-6">
                                    <div class="col-sm-12 input_name">
                                        Ghi ch??:
                                    </div>
                                    <div class="col-sm-12 input_name">
                                        <textarea id="lia_add_note" class="form-control" rows="2"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 wrap_name top-10">
                                <div class="col-sm-3 text-right">
                                </div>
                                <div class="col-sm-6">
                                    <div class="col-sm-12 input_name">
                                        Ch???n s??? ng??y c??ng n???:
                                    </div>
                                    <div class="col-sm-12 input_name">
                                        <select id="lia_add_hold_date" class="form-control">
                                            <?php echo $_smarty_tpl->tpl_vars['opt_period']->value;?>

                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 text-center label_name" id="md_liabilities_notice">
                            </div>
                            <div class="col-sm-12 wrap_name top-10">
                                <div class="col-sm-3 text-right">
                                </div>
                                <div class="col-sm-6 input_name">
                                    <a id="" class="collected-all"></a>
                                    <input id="lia_add_total_paid" placeholder="S??? ti???n thu"
                                        class="form-control number-format" value="" />
                                    <span id="lia_add_err" class="color-red"></span>
                                </div>
                            </div>
                            <div class="col-sm-12 wrap_name top-10">
                                <div class="col-sm-3">
                                </div>
                                <div class="col-sm-6 text-center">
                                    <span id="lia_add_status"></span>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="modal-footer">
                        <div class="bootstrap-dialog-footer">
                            <div class="bootstrap-dialog-footer-buttons">
                                <button data-dismiss="modal" class="btn btn_w btn-default"><?php echo $_smarty_tpl->tpl_vars['lang']->value['lb_cancel'];?>
</button>
                                <button id="btn_lia_add" class="btn btn_w btn-success"><?php echo $_smarty_tpl->tpl_vars['lang']->value['lb_done'];?>
</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!--END modal t???o c??ng n???-->

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
/js/chosen/chosen.min.css">
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
/js/chosen/chosen.jquery.min.js?<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
/js/upload/jquery.fileupload.js?<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
/js/upload/jquery.iframe-transport.js?<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
/js/upload/uploadfunction.js?<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
/js/js_act/members_list.js?<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
"></script><?php }} ?>
