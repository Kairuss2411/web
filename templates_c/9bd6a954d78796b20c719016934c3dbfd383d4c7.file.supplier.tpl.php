<?php /* Smarty version Smarty-3.1.18, created on 2021-09-06 15:55:08
         compiled from "/Users/huan/Desktop/Data/Outsource/erp/posretail/templates/accountant/supplier.tpl" */ ?>
<?php /*%%SmartyHeaderCode:583695206135d76c7059f3-23331982%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9bd6a954d78796b20c719016934c3dbfd383d4c7' => 
    array (
      0 => '/Users/huan/Desktop/Data/Outsource/erp/posretail/templates/accountant/supplier.tpl',
      1 => 1628747002,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '583695206135d76c7059f3-23331982',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tpldirect' => 0,
    'link' => 0,
    'lang' => 0,
    'session' => 0,
    'str_permission' => 0,
    'domain' => 0,
    'opt_payment_collect_fund' => 0,
    'opt_period' => 0,
    'version' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_6135d76c7801e9_45702924',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6135d76c7801e9_45702924')) {function content_6135d76c7801e9_45702924($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpldirect']->value)."supervisor/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="col-sm-12 col-xs-12">
    <div class="col-sm-9 col-xs-12">
    </div>
    <div class="col-sm-3 col-xs-12">
        <div class="btn btn-group">
            <a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
/?m=accountant&act=storing" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['lb_acin_import'];?>
"><i
                    class="icon-cate icon-other-store"></i></a>
            <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':accountant_supplierimport:'))!==false) {?>
                <a id="btn_import_excel" class="btn btn-default" href="javascript:;" title="Import Excel"><i
                        class="glyphicon glyphicon-upload"></i></a>
            <?php }?>
        </div>
    </div>
</div>

<!--Start - Qu???n l?? nh?? cung c???p - Mr T??n -->
<div class="primary-provider primary-provider-m">
    <div class="container1">
        <div class="row">
            <div class="col-md-10 col-sm-9 col-xs-12">
                <div class="form-search">
                    <input id="txt_searching" type="text" name="" placeholder="T??m ki???m nh?? cung c???p">
                    <button><span class="icon-cate icon-other-search1"></span></button>
                </div>
            </div>
            <div class="col-md-2 col-sm-3 col-xs-12">
                <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':accountant_supplieradd:'))!==false) {?>
                    <span class="btn-img" data-toggle="modal" id="btn_modal_provider"><img
                            src="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
/images/add_pro.png" width="30"></span>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':accountant_supplierdl:'))!==false) {?>
                    <span class="btn-img" data-toggle="modal" id="btn_dl_supplier"><img src="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
/images/download.png"
                            width="30"></span>
                <?php }?>
            </div>
        </div>
        <hr>
        <ul class="nav nav-tabs nav-check nav-check-m">
            <li onclick="fnc_filter('');" class="active tab-type" type=""><a data-toggle="tab" href="#ncc">T???t c??? nh??
                    cung c???p</a></li>
            <li onclick="fnc_filter('citipos');" class="tab-type" type="citipos"><a data-toggle="tab" href="#ncc">NCC s???
                    d???ng ERP</a></li>
            <li onclick="fnc_filter('no_citipos');" class="tab-type" type="no_citipos"><a data-toggle="tab"
                    href="#ncc">NCC ch??a tham gia ERP</a></li>
        </ul>
        <div class="tab-content">

            <div id="ncc1" class="tab-pane fade in active">
                <div class="row">
                    <!--main content-->

                    <!--Begin block list members-->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 top-10">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 top-10">
                            <div class="table-responsive">
                                <table
                                    class="table table-striped table-bordered text-center members member_list table-bg-no">
                                    <thead id="">
                                        <tr>
                                            <th><input class="" id="ck_all" onclick="check_all('#ck_all', '.ck_items')"
                                                    type="checkbox"></th>
                                            <th>T??n <a id="sortby_name"
                                                    class="glyphicon glyphicon-chevron-up sortBy"></a> </th>
                                            <th>S???n ph???m</th>
                                            <th>Li??n h???</th>
                                            <th>S??T</th>
                                            <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['lb_cusLasted'];?>

                                                <!--G???n nh???t--> <a id="sortby_last_spent"
                                                    class="glyphicon glyphicon-chevron-up sortBy"></a>
                                            </th>
                                            <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['lb_liabilities'];?>
 <a id="sortby_total_liabilities"
                                                    class="glyphicon glyphicon-chevron-up sortBy"></a></th>
                                            <th>
                                                
                                            </th>
                                        </tr>
                                    </thead>
                                    <thead id="list_supplier">
                                        <tr>
                                            <th></th>
                                            <th>T???ng c??ng n???</th>
                                            <th id="total_debt_value">-</th>
                                            <th>???? tr???</th>
                                            <th class="color-red" id="total_debt_paid">-</th>
                                            <th>C??n l???i:</th>
                                            <th class="color-red" id="total_debt_left">-</th>
                                            <th id="total_spent-">-</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>

                    <script>
                        $('.profile_info .nav li a').click(function() {
                            var data_toggle = $(this).attr('data-toggle');
                            $(this).parents('.profile_info').find('.tab-content .tab_pro').removeClass(
                            'active');
                            $(this).parents('.profile_info').find('.tab-content .' + data_toggle).addClass(
                                'active');
                            $(this).parents('.nav').find('li').removeClass('active');
                            $(this).parent().addClass('active');
                        });
                    </script>
                    <!--End block list members-->

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 top-20">
                        <div class="paging L" id="page_html">
                        </div>
                        <input id="recent_page" hidden class="hidden" value="1" />
                    </div>
                </div>
                <!--end main content-->
            </div>
        </div>
    </div>
</div>

<!--BEGIN Modal import file excel-->
<div class="modal fade" id="modal_upload_excel" tabindex="-1" role="dialog" aria-spanledby="myModalspan"
    aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <a data-dismiss="modal" class="close" href="#">?? </a>
                <h4 class="title" id="title_menu">Nh???p Nh?? Cung C???p t??? Excel</h4>
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
/uploads/attachment/FormProviderImport.xlsx" download>
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

<div class="modal fade" id="modal_provider" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="pop_up_T">Th??m nh?? cung c???p</div>
            <a class="btn_pop_close close" data-dismiss="modal" aria-label="Close"></a>
            <div class="modal-body">
                <br>
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="ncc_radio">
                            <label class="field_L1">
                                <input id="is_citipos" name="ncc" checked="" class="ace" type="radio" value="1">
                                <span class="lbl active"></span>
                                NCC s??? d???ng ERP
                            </label>
                            <label class="field_L1">
                                <input id="no_citipos" name="ncc" class="ace" type="radio" value="0">
                                <span class="lbl"></span>
                                NCC ch??a tham gia ERP
                            </label>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <div class="form-search" style="margin-top: 3px;">
                            <input id="txt_email" type="text" name="" placeholder="Email/s??? ??i???n tho???i nh?? cung c???p">
                            <button id="btn_find_pos"><span class="icon-cate icon-other-search1"></span></button>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="content-provider">
                    <div class="item">
                        <ul>
                            <li class="row">
                                <div class="col-md-3 col-sm-3 col-xs-12 name"><?php echo $_smarty_tpl->tpl_vars['lang']->value['lb_nameprovider'];?>
</div>
                                <div class="col-md-9 col-sm-9 col-xs-12 info"><input class="txt-input" id="name"
                                        type="text" name="" value="Get started with the Exchange" placeholder=""></div>
                            </li>
                            <li class="row">
                                <div class="col-md-3 col-sm-3 col-xs-12 name"><?php echo $_smarty_tpl->tpl_vars['lang']->value['lb_acimp_code'];?>
</div>
                                <div class="col-md-9 col-sm-9 col-xs-12 info"><input class="txt-input" id="vat_code"
                                        type="text" name="" value="0398653" placeholder=""></div>
                            </li>
                            <li class="row">
                                <div class="col-md-3 col-sm-3 col-xs-12 name"><?php echo $_smarty_tpl->tpl_vars['lang']->value['lb_contact'];?>
</div>
                                <div class="col-md-9 col-sm-9 col-xs-12 info"><input class="txt-input" id="contact"
                                        type="text" name="" value="Mr T??n" placeholder=""></div>
                            </li>
                            <li class="row">
                                <div class="col-md-3 col-sm-3 col-xs-12 name"><?php echo $_smarty_tpl->tpl_vars['lang']->value['lb_acimp_mobile'];?>
</div>
                                <div class="col-md-9 col-sm-9 col-xs-12 info"><input class="txt-input" id="mobile"
                                        type="text" name="" value="0976 674 647" placeholder=""></div>
                            </li>
                            <li class="row">
                                <div class="col-md-3 col-sm-3 col-xs-12 name"><?php echo $_smarty_tpl->tpl_vars['lang']->value['lb_address'];?>
</div>
                                <div class="col-md-9 col-sm-9 col-xs-12 info"><input class="txt-input" id="address"
                                        type="text" name="" value="23 Nguy???n Ki???m, P13, Qu???n G?? G???p" placeholder="">
                                </div>
                            </li>
                            <li class="row">
                                <div class="col-md-3 col-sm-3 col-xs-12 name">Email</div>
                                <div class="col-md-9 col-sm-9 col-xs-12 info"><input class="txt-input" id="email"
                                        type="text" name="" value="tannt2103@gmail.com" placeholder=""></div>
                            </li>
                            <li class="row">
                                <div class="col-md-3 col-sm-3 col-xs-12 name"><?php echo $_smarty_tpl->tpl_vars['lang']->value['lb_gdsprovider'];?>
</div>
                                <div class="col-md-9 col-sm-9 col-xs-12 info"><input class="txt-input"
                                        id="goods_provide" type="text" name="" value="VNDS" placeholder=""></div>
                            </li>
                            <li class="row">
                                <div class="col-md-3 col-sm-3 col-xs-12 name"><?php echo $_smarty_tpl->tpl_vars['lang']->value['lb_acimp_accno'];?>
</div>
                                <div class="col-md-9 col-sm-9 col-xs-12 info"><input class="txt-input" id="account_bank"
                                        type="text" name="" value="1900 0126 3627" placeholder=""></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="text-right btn-success1">
                <a class="close" data-dismiss="modal" aria-label="Close">Hu???</a>
                <a id="btn_save" href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['lb_done'];?>
</a>
            </div>
        </div>
    </div>
</div>
<!--End - Qu???n l?? nh?? cung c???p - Mr T??n -->

<!--BEGIN modal Thu c??ng n???-->

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
                                <input id="liability_period_from" type="text" class="form-control"
                                    placeholder="T??? ng??y" aria-describedby="basic-addon1">
                                <span class="input-group-addon"><i
                                        class="glyphicon glyphicon-calendar"></i></span>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="input-group">
                                <input id="liability_period_to" type="text" class="form-control"
                                    placeholder="?????n ng??y" aria-describedby="basic-addon1">
                                <span class="input-group-addon"><i
                                        class="glyphicon glyphicon-calendar"></i></span>
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

<!--BEGIN modal tr??? c??ng n??? h??ng lo???t-->
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
<!--END modal tr??? c??ng n??? h??ng lo???t-->

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

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
/js/js_act/accountant_supplier.js?<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
"></script>
<style>
    <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']!='0'&&(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':accountant_suppliersave:'))===false) {?>
        a.supplier_edit {
            display: none !important;
        }

    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']!='0'&&(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':accountant_supplierdelete:'))===false) {?>
        a.supplier_delete {
            display: none !important;
            position: absolute;
            z-index: -100;
        }

    <?php }?>
</style><?php }} ?>
