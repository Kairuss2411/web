<?php /* Smarty version Smarty-3.1.18, created on 2021-09-25 18:16:55
         compiled from "/Users/huan/Desktop/Data/Outsource/erp/posretail/templates/extend/bank_transaction.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1286033704614f0527f37346-37830439%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1547d6fb918db660b4ccbbcdf30b99974b26831' => 
    array (
      0 => '/Users/huan/Desktop/Data/Outsource/erp/posretail/templates/extend/bank_transaction.tpl',
      1 => 1632486679,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1286033704614f0527f37346-37830439',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tpldirect' => 0,
    'domain' => 0,
    'opt_shop' => 0,
    'session' => 0,
    'str_permission' => 0,
    'link' => 0,
    'version' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_614f0528082658_42451920',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_614f0528082658_42451920')) {function content_614f0528082658_42451920($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpldirect']->value)."supervisor/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<script src="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
/js/angularjs/angular.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
/js/angularjs/angular-messages.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
/js/angularjs/angular-sanitize.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
/js/angularjs/libraries/ui-bootstrap-tpls-2.5.0.js"></script>

<div ng-app="ASFA">

<div ng-controller="withdrawController" ng-init="getWithDraws()">
    <div class="search-order extend content-form">
        <div class="row">
            <div class="col-md-2 col-sm-2 col-xs-12">
                <input id="txt_searching" type="text" name="" ng-model="filterElements.keyword" placeholder="T??m ki???m theo H??? t??n/ S??T/ M?? Giao d???ch" ng-change="getWithDraws()">
                <i class="fa fa-search" aria-hidden="true"></i>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-12">
                <select id="type" class="" type="text" name="" ng-model="filterElements.type" ng-change="getWithDraws()">
                    <option value="">T???t c??? lo???i</option>
                    <option value="1">Giao d???ch n???p ??i???m</option>
                    <option value="-1">Giao d???ch r??t ??i???m</option>
                </select>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-12">
                <select id="shop_id" class="form-format" type="text" name="" ng-model="filterElements.shop_id" ng-change="getWithDraws()">
                    <option value="">T???t c??? chi nh??nh</option>
                   <?php echo $_smarty_tpl->tpl_vars['opt_shop']->value;?>

                </select>
            </div>
            
            <div class="col-md-2 col-sm-2 col-xs-12">
                <select id="type" class="" type="text" name="" ng-model="filterElements.status" ng-change="getWithDraws()">
                    <option value="">T???t c??? tr???ng th??i</option>
                    <option value="1">Ho??n th??nh</option>
                    <option value="2">??ang x??? l??</option>
                    <option value="0">L???nh ch??? x??? l??</option>
                    <option value="-1">Kh??ch t??? h???y</option>
                    <option value="-2">Admin t??? ch???i</option>
                </select>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-6">
                <input id="from" class="input-datepicker" type="text" name="" ng-model="filterElements.from_date" placeholder="T??? ng??y" ng-change="getWithDraws()">
                <img src="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
/public/images/date.png" width="30" class="icon-date">
            </div>
            <div class="col-md-2 col-sm-6 col-xs-6">
                <input id="to" class="input-datepicker-to" type="text" name="" ng-model="filterElements.to_date" placeholder="?????n ng??y" ng-change="getWithDraws()">
                <img src="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
/public/images/date.png" width="30" class="icon-date">
            </div>
            <div class="col-md-2 col-sm-6 col-xs-6 text-center top-10">
                <span id="btn_view" class="icon1"><img src="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
/images/eye.png" ng-click="getWithDraws()" width="30"></span>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-6 text-center top-10">
                <?php if ($_smarty_tpl->tpl_vars['session']->value['gid']=='0'||(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':extend_bank_changeidx:'))!==false) {?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
/?m=extend&act=bank_change">
                L???ch s??? bi???n ?????ng s??? d??
                </a>
                <?php }?>
            </div>
            
        </div>

        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-6">
                <span ng-click="getDownload()" id="btn_dl" class="icon1"><img src="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
/images/download.png" 
                        width="30"> Danh s??ch r??t ti???n</span>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <span ng-click="getDownloadAll()" id="btn_dl" class="icon1"><img src="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
/images/download.png" ng-click="getDownload()"
                        width="30"> To??n b??? danh s??ch</span>
            </div>
        </div>
        <div class="row top-10 ">
            <div class="col-sm-6 col-xs-6">
                <b>T???ng giao d???ch: <span><<?php ?>%total_record%<?php ?>></span></b>
            </div>
            <div class="col-sm-6 col-xs-6">
                    <b>T???ng giao d???ch: <span><<?php ?>%total_sum%<?php ?>></span></b>
            </div>
        </div>
    </div>
    
    <div class="content-pr bg-white">
        <div class="wrap-table-detail">
            <div class="table-responsive table-detail table-0-15 content-form">
                <table class="table table-bg-no table-hover ng-cloak">
                    <thead>
                    <tr>
                        <th>
                            <a href="javascript:void(0)" ng-click="filterElements.orderField='id'; filterElements.asc = !filterElements.asc; getWithDraws()" style="color: #337ab7;">
                                ID
                                <span ng-show="filterElements.orderField != 'id'"><i class="fa fa-sort"></i></span>
                                <span ng-show="filterElements.orderField == 'id'">
                                    <span ng-show="filterElements.asc"><i class="fa fa-sort-asc"></i></span>
                                    <span ng-show="!filterElements.asc"><i class="fa fa-sort-desc"></i></span>
                                </span>
                            </a>
                        </th>
                        <th>
                            <a href="javascript:void(0)" ng-click="filterElements.orderField='client_id'; filterElements.asc = !filterElements.asc; getWithDraws()" style="color: #337ab7;">
                                ID ng?????i d??ng
                                <span ng-show="filterElements.orderField != 'client_id'"><i class="fa fa-sort"></i></span>
                                <span ng-show="filterElements.orderField == 'client_id'">
                                    <span ng-show="filterElements.asc"><i class="fa fa-sort-asc"></i></span>
                                    <span ng-show="!filterElements.asc"><i class="fa fa-sort-desc"></i></span>
                                </span>
                            </a>
                        </th>
                        <th>
                            <a href="javascript:void(0)">
                                M?? ng?????i d??ng
                            </a>
                        </th>
                        <th>
                            <a href="javascript:void(0)" ng-click="filterElements.orderField='client_name'; filterElements.asc = !filterElements.asc; getWithDraws()" style="color: #337ab7;">
                                T??n ng?????i d??ng
                                <span ng-show="filterElements.orderField != 'client_name'"><i class="fa fa-sort"></i></span>
                                <span ng-show="filterElements.orderField == 'client_name'">
                                    <span ng-show="filterElements.asc"><i class="fa fa-sort-asc"></i></span>
                                    <span ng-show="!filterElements.asc"><i class="fa fa-sort-desc"></i></span>
                                </span>
                            </a>
                        </th>
                        <th>
                            <a href="javascript:void(0)" ng-click="filterElements.orderField='created_at'; filterElements.asc = !filterElements.asc; getWithDraws()" style="color: #337ab7;">
                                Ng??y y??u c???u
                                <span ng-show="filterElements.orderField != 'created_at'"><i class="fa fa-sort"></i></span>
                                <span ng-show="filterElements.orderField == 'created_at'">
                                    <span ng-show="filterElements.asc"><i class="fa fa-sort-asc"></i></span>
                                    <span ng-show="!filterElements.asc"><i class="fa fa-sort-desc"></i></span>
                                </span>
                            </a>
                        </th>
                        <th>
                            <a href="javascript:void(0)" ng-click="filterElements.orderField='amount'; filterElements.asc = !filterElements.asc; getWithDraws()" style="color: #337ab7;">
                                S??? ??i???m n???p/ r??t
                                <span ng-show="filterElements.orderField != 'amount'"><i class="fa fa-sort"></i></span>
                                <span ng-show="filterElements.orderField == 'amount'">
                                    <span ng-show="filterElements.asc"><i class="fa fa-sort-asc"></i></span>
                                    <span ng-show="!filterElements.asc"><i class="fa fa-sort-desc"></i></span>
                                </span>
                            </a>
                        </th>
                        <th style="width: 15%;">Ghi ch?? c???a ng?????i d??ng</th>
                        <th style="width: 15%;">N???i dung CK</th>
                        <th>
                            <a href="javascript:void(0)" ng-click="filterElements.orderField='status'; filterElements.asc = !filterElements.asc; getWithDraws()" style="color: #337ab7;">
                                Tr???ng Th??i
                                <span ng-show="filterElements.orderField != 'status'"><i class="fa fa-sort"></i></span>
                                <span ng-show="filterElements.orderField == 'status'">
                                    <span ng-show="filterElements.asc"><i class="fa fa-sort-asc"></i></span>
                                    <span ng-show="!filterElements.asc"><i class="fa fa-sort-desc"></i></span>
                                </span>
                            </a>
                        </th>
                        <th style="width: 15%;">Ghi ch?? b???i admin</th>
                        <th>Duy???t b???i</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr ng-repeat="item in withdraws track by $index">
                        <td  style="cursor: default;">#<<?php ?>%item.id%<?php ?>></td>
                        <td  style="cursor: default;"><img height="30" src="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
/public/images/<<?php ?>%item.type == 1 ? 'moneyin':'moneyout'%<?php ?>>.png" ><<?php ?>%item.client_id%<?php ?>></td>
                        <td style="cursor: default;"><<?php ?>%item.code%<?php ?>></td>
                        <td style="cursor: default;">
                            <<?php ?>%item.client_name == '' ? item.mobile:item.client_name%<?php ?>></td>
                        <td  style="cursor: default;"><<?php ?>%item.created_at%<?php ?>></td>
                        <td  style="cursor: default;"><<?php ?>%item.amount|number_format_replace_cog%<?php ?>></td>
                        <td  style="cursor: default;"><<?php ?>%item.note_by_client%<?php ?>></td>
                        <td style="cursor: default;"><a class="memo-transaction cursor-pointer"><<?php ?>%item.memo%<?php ?>></a></td>
                        <td  style="cursor: default;">
                            <button type="button" class="btn-no-style btn-update-allow" ng-if="item.status == 0" ng-click="processRequest(item)">
                                <span class="dt-span"><img src="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
/public/images/waiting.png" alt="" width="24"> Ch??? x??? l??</span>
                            </button>
                            <button type="button" class="btn-no-style btn-update-allow" ng-if="item.status == 2" ng-click="processRequest(item)">
                                <span class="dt-span"><img src="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
/public/images/excel.png" alt="" width="24"> ??ang x??? l??</span>
                            </button>
                            <span class="dt-span" ng-if="item.status == 1"><img src="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
/public/images/sold.png" alt="" width="24"><font color="56BA47">???? x??? l??</font></span>
                            <span class="dt-span" ng-if="item.status == -1"><img src="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
/public/images/error.png" alt="" width="24">H???y y??u c???u</span>
                            <span class="dt-span" ng-if="item.status == -2"><img src="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
/public/images/error.png" alt="" width="24">???? t??? ch???i</span>
                        </td>
                        <td style="cursor: default;"><<?php ?>% (item.note_by_admin != null && item.note_by_admin != '' ) ? item.note_by_admin : '-' %<?php ?>></td>
                        <td style="cursor: default;"><<?php ?>%item.executed_by_name%<?php ?>></td>
                    </tr>
                    </tbody>
                </table>
                <ul ng-hide="withdraws.length === 0" uib-pagination total-items="pages" items-per-page="items_per_page" ng-model="currentPage" max-size="maxSize" class="pagination" boundary-links="true" rotate="false" previous-text="&lsaquo;" next-text="&rsaquo;" first-text="&laquo;" last-text="&raquo;" ng-change="filterElements.page = currentPage; getWithDraws()"></ul>
            </div>
            <div id="md-withdraw" class="modal fade modalAlert custom-md" tabindex="-1" role="dialog" aria-hidden="false">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-body" style="text-align: left;">
                            <form autocomplete="off" name="form.formWithDraw" novalidate ng-submit="form.formWithDraw.$valid && submitProcess()">
                                <span class="close" ng-click="cancelAction()">x</span>
                                <h3>C???p nh???t tr???ng th??i l???nh</h3>
                                <div class="row">
                                    <div class="col-sm-6 col-xs-4">
                                        <label class="label_name">Tr???ng th??i duy???t:</label>
                                        <select name="status" id="status-execute" class="form-control" ng-model="dataProcess.status">
                                            <option value="0">Ch??? x??? l??</option>
                                            <option value="2">??ang x??? l??</option>
                                            <option value="1">Duy???t</option>
                                            <option value="-2">T??? ch???i</option>
                                        </select>
                                    </div>
                                    <div class="col-xs-12">
                                        <label class="label_name" ng-if="dataProcess.status != -2">Ghi ch??:</label>
                                        <label class="label_name" ng-if="dataProcess.status == -2">L?? do (<span class="text-red">*</span>):</label>
                                        <div class="input_name">
                                            <input type="text" class="form-control" ng-class="{invalid_bottom: (form.formShop.note.$touched || form.formShop.$submitted) && form.formShop.note.$invalid}" name="note" ng-model="dataProcess.note_by_admin" ng-required="dataProcess.status == -2" ng-pattern="/^[\da-zA-Z????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????\s\:]*$/"/>
                                            <div ng-messages="form.formWithDraw.note.$error" ng-if="form.formWithDraw.$submitted || form.formWithDraw.note.$touched">
                                                <div ng-message="required" class="error-msg">Vui l??ng nh???p ghi ch??.</div>
                                                <div ng-message="pattern" class="error-msg">Ghi ch?? kh??ng ???????c ch???a k?? t??? ?????c bi???t.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn" ng-click="cancelAction()">Hu???</button>
                                    <button type="submit" class="btn btn-warning">X??c nh???n</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<input id="copytoclipboard" type="text" style="opacity:0" value=""/>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
/js/js_act/extend_bank_transaction.js?<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
/js/angularjs/angular_factories/factories.js?<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
/js/angularjs/angular_directive/directives.js?<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
"></script>

<style>
<?php if ($_smarty_tpl->tpl_vars['session']->value['gid']!='0'&&(strpos($_smarty_tpl->tpl_vars['str_permission']->value,':extend_bank_transactionupdate:'))===false) {?>
button.btn-update-allow{
	display:none!important;
	z-index:-1000;
}
<?php }?>
</style><?php }} ?>
