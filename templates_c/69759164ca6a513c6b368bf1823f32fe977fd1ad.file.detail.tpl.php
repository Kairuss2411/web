<?php /* Smarty version Smarty-3.1.18, created on 2021-10-07 15:47:53
         compiled from "/Users/tungla/code/vina/web_retail/seesfrontend/templates/product/detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:331052124615d6eccd8b784-30396279%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69759164ca6a513c6b368bf1823f32fe977fd1ad' => 
    array (
      0 => '/Users/tungla/code/vina/web_retail/seesfrontend/templates/product/detail.tpl',
      1 => 1633596286,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '331052124615d6eccd8b784-30396279',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_615d6eccde5d67_94224688',
  'variables' => 
  array (
    'data' => 0,
    'session' => 0,
    'rewrite_url' => 0,
    'domain' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_615d6eccde5d67_94224688')) {function content_615d6eccde5d67_94224688($_smarty_tpl) {?><style type="text/css">
    @media(max-width:767px) {
        body {
            padding-bottom: 30px;
        }
    }
</style>
<div class="content-product-detail">
    <div class="container">
        <div class="detail-product">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12 images-product-detail">
                    <div class="zoom-image targetarea">
                        <img alt="" class="cloudzoom" id="zoom-fancybox" src="<?php echo $_smarty_tpl->tpl_vars['data']->value['img_1'];?>
"
                            data-cloudzoom="zoomImage: '<?php echo $_smarty_tpl->tpl_vars['data']->value['img_1'];?>
'">
                    </div>
                    <div class="thumbs">
                        <div>
                            <?php if ($_smarty_tpl->tpl_vars['data']->value['img_1']!='') {?>
                                <div class="item">
                                    <img alt="" class="cloudzoom-gallery" src="<?php echo $_smarty_tpl->tpl_vars['data']->value['img_1'];?>
"
                                        data-cloudzoom="useZoom:'.cloudzoom', image: '<?php echo $_smarty_tpl->tpl_vars['data']->value['img_1'];?>
' , zoomImage: '<?php echo $_smarty_tpl->tpl_vars['data']->value['img_1'];?>
' ">
                                    <input class="hide" id="link_img" type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['img_1'];?>
" />
                                </div>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['data']->value['img_2']!='') {?>
                                <div class="item">
                                    <img alt="" class="cloudzoom-gallery" src="<?php echo $_smarty_tpl->tpl_vars['data']->value['img_2'];?>
"
                                        data-cloudzoom="useZoom:'.cloudzoom', image: '<?php echo $_smarty_tpl->tpl_vars['data']->value['img_2'];?>
' , zoomImage: '<?php echo $_smarty_tpl->tpl_vars['data']->value['img_2'];?>
' ">
                                </div>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['data']->value['img_3']!='') {?>
                                <div class="item">
                                    <img alt="" class="cloudzoom-gallery" src="<?php echo $_smarty_tpl->tpl_vars['data']->value['img_3'];?>
"
                                        data-cloudzoom="useZoom:'.cloudzoom', image: '<?php echo $_smarty_tpl->tpl_vars['data']->value['img_3'];?>
' , zoomImage: '<?php echo $_smarty_tpl->tpl_vars['data']->value['img_3'];?>
' ">
                                </div>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['data']->value['img_4']!='') {?>
                                <div class="item">
                                    <img alt="" class="cloudzoom-gallery" src="<?php echo $_smarty_tpl->tpl_vars['data']->value['img_4'];?>
"
                                        data-cloudzoom="useZoom:'.cloudzoom', image: '<?php echo $_smarty_tpl->tpl_vars['data']->value['img_4'];?>
' , zoomImage: '<?php echo $_smarty_tpl->tpl_vars['data']->value['img_4'];?>
' ">
                                </div>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['data']->value['img_5']!='') {?>
                                <div class="item">
                                    <img alt="" class="cloudzoom-gallery" src="<?php echo $_smarty_tpl->tpl_vars['data']->value['img_5'];?>
"
                                        data-cloudzoom="useZoom:'.cloudzoom', image: '<?php echo $_smarty_tpl->tpl_vars['data']->value['img_5'];?>
' , zoomImage: '<?php echo $_smarty_tpl->tpl_vars['data']->value['img_5'];?>
' ">
                                </div>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['data']->value['img_6']!='') {?>
                                <div class="item">
                                    <img alt="" class="cloudzoom-gallery" src="<?php echo $_smarty_tpl->tpl_vars['data']->value['img_6'];?>
"
                                        data-cloudzoom="useZoom:'.cloudzoom', image: '<?php echo $_smarty_tpl->tpl_vars['data']->value['img_6'];?>
' , zoomImage: '<?php echo $_smarty_tpl->tpl_vars['data']->value['img_6'];?>
' ">
                                </div>
                            <?php }?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 infomation-product-detail">
                    <div class="wrap-scroll-detail">
                        <div class="scroll-detail">
                            <h1 class="title"><?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
</h1>
                            <span class="ma-sp"><b>SKU:</b> <?php echo $_smarty_tpl->tpl_vars['data']->value['sku_code'];?>
<?php if (isset($_smarty_tpl->tpl_vars['session']->value['fullname_client'])) {?><button
                                        type="button" class="btn-share" product_id="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" id="btnCopy">Chia
                                    s???</button><?php }?></span>
                            <div class="clear"></div>
                            <div class="info"><?php echo $_smarty_tpl->tpl_vars['data']->value['short_description'];?>
</div>
                            <?php if ($_smarty_tpl->tpl_vars['data']->value['decrement']>0) {?>
                                <p class="old-price-detail">Gi?? g???c: <span><?php echo number_format($_smarty_tpl->tpl_vars['data']->value['price'],"0",".",",");?>

                                        vn??</span></p>
                            <?php }?>
                            <p class="price-detail"><?php echo number_format($_smarty_tpl->tpl_vars['data']->value['price_decrement'],"0",".",",");?>
 vn??</p>
                            <div class="clear"></div>
                            <div class="size">
                                <label class="col-md-2 col-sm-3">S??? l?????ng:</label>
                                <div class="col-md-3 col-sm-3">
                                    <input class="form-control input-sm quantity-size" id="quantity" type="number" min=1
                                        value="1" />
                                    
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="clear"></div>
                            <div class="color hide">
                                <label class="col-md-2 col-sm-3">M??u s???c</label>
                                <div class="col-md-10 col-sm-9">
                                    <ul>
                                        <li class="select_product active">
                                            <a href="" title=""><span style="background-color:#007000"></span></a>
                                        </li>
                                        <li class="select_product ">
                                            <a href="" title=""><span style="background-color:#ff0000"></span></a>
                                        </li>
                                        <li class="select_product ">
                                            <a href="" title=""><span style="background-color:#0080ff"></span></a>
                                        </li>
                                        <li class="select_product ">
                                            <a href="" title=""><span style="background-color:#ff0000"></span></a>
                                        </li>
                                        <li class="select_product ">
                                            <a href="" title=""><span style="background-color:#0080ff"></span></a>
                                        </li>
                                        <li class="select_product">
                                            <a href="" title=""><span style="background-color:#007000"></span></a>
                                        </li>
                                        <li class="select_product ">
                                            <a href="" title=""><span style="background-color:#ff0000"></span></a>
                                        </li>
                                        <li class="select_product ">
                                            <a href="" title=""><span style="background-color:#0080ff"></span></a>
                                        </li>
                                        <li class="select_product ">
                                            <a href="" title=""><span style="background-color:#ff0000"></span></a>
                                        </li>
                                        <li class="select_product ">
                                            <a href="" title=""><span style="background-color:#0080ff"></span></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <input class="hide" id="title" type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
" />
                        <input class="hide" id="price" type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['price'];?>
" />
                        <input class="hide" id="unique_id" type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['unique_id'];?>
" />
                        <input class="hide" id="decrement" type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['decrement'];?>
" />
                        <input class="hide" id="link" type="text"
                            value="<?php echo $_smarty_tpl->tpl_vars['rewrite_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['data']->value['product_link'];?>
-p<?php echo $_smarty_tpl->tpl_vars['data']->value['unique_id'];?>
/<?php if (isset($_smarty_tpl->tpl_vars['session']->value['username_client'])) {?><?php echo $_smarty_tpl->tpl_vars['session']->value['username_client'];?>
<?php }?>" />
                        <div class="action">
                            <!-- Load l???i c??i h??nh ???nh ?????i di???n ????? l??m s??? ki???n th??m v??o gi??? h??ng cho ?????p =)) -->
                            <div class="img_add_cart">
                                <?php if ($_smarty_tpl->tpl_vars['data']->value['img_1']!='') {?>
                                    <img alt="" src="<?php echo $_smarty_tpl->tpl_vars['data']->value['img_1'];?>
" />
                                <?php }?>
                            </div>
                            <!-- End -->

                            <button type="button" class="btn btn-add-cart btn-width" product_id="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
"
                                id="add_cart">Th??m v??o gi??? h??ng</button>
                            <button type="button" class="btn btn-key btn-width" product_id="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" id="buy_now">MUA
                                NGAY</button>
                            <div class="clear"></div>
                        </div>
                        <div class="box_addcart_success">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
images/addcart_success.png" alt="" class="img-responsive" />
                            <p>???? th??m v??o gi???</p>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-detail">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab1" data-toggle="tab">M?? t??? s???n ph???m</a></li>
                
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="tab1">
                    <div class="content">
                        
                        <?php echo $_smarty_tpl->tpl_vars['data']->value['description'];?>

                    </div>
                    
                </div>
                <!--other info-->
                <div class="tab-pane" id="tab2">
                    <div class="content">
                        <div class="content">
                            <table class="table table-key">
                                <thead>
                                    <tr>
                                        <th>T??n</th>
                                        <th>M?? t???</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong>T??n s???n ph???m</strong></td>
                                        <td>Lavabo ???? t??? nhi??n cao c???p Naston LDTN001</td>
                                    </tr>
                                    <tr>
                                        <td><strong>M?? s???</strong></td>
                                        <td>LDTN001</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Th????ng hi???u</strong></td>
                                        <td>NASTON</td>
                                    </tr>
                                    <tr>
                                        <td><strong>M??u s???c</strong></td>
                                        <td>H???ng</td>
                                    </tr>
                                    <tr>
                                        <td><strong>C??n n???ng</strong></td>
                                        <td>8kg</td>
                                    </tr>
                                    <tr>
                                        <td><strong>K??ch th?????c</strong></td>
                                        <td>410x410x140mm</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Ch???t li???u</strong></td>
                                        <td>???? t??? nhi??n</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Xu???t s???</strong></td>
                                        <td>Y??n B??i - Vi???t Nam</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!--other info-->
            </div>
        </div>
    </div>
</div><?php }} ?>
