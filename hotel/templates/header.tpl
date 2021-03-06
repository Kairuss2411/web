<!DOCTYPE html>
<html lang="vi" debug="true">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="keywords" content="{if isset($meta_title)}{$meta_title}{/if}" />
    <meta name="description" content="{if isset($meta_description)}{$meta_description}{/if}" />
    <title>{if isset($meta_title) && $meta_title!=''}{$meta_title}{else}{$title}{/if}</title>
    <script type="text/javascript" src="{$domain}/js/global.js?{$version}"></script>
    <script src="{$domain}/js/jquery.min.js?{$version}"></script>
    <link href="{$domain}/css/bootstrap/bootstrap.min.css?{$version}" rel="stylesheet" />
    <link href="{$domain}/css/bootstrap/bootstrap.css?{$version}" rel="stylesheet" />
    <link href="{$domain}/css/jquery-ui-1.10.4.custom.min.css?{$version}" rel="stylesheet" />
    <link href="{$domain}/images/favicon.png?{$version}" rel="shortcut icon" />
    {* <script src="{$domain}/js/js_act/{$session.lang}/home.js?{$version}"></script> *}
    <link href="{$domain}/fonts/montserrat/fonts.css?{$version}" rel="stylesheet">
    <link href="{$domain}/js/owlCarousel/owl.carousel.css?{$version}" rel="stylesheet" type="text/css" />
    <link href="{$domain}/css/rangeSlider.css?{$version}" rel="stylesheet" />
    <link href="{$domain}/css/cloudzoom.css?{$version}" rel="stylesheet" />
    <link href="{$domain}/css/fancybox/jquery.fancybox.css?{$version}" rel="stylesheet" />
    <link href="{$domain}/css/main.css?{$version}" rel="stylesheet">
    <link href="{$domain}/css/{$db_pos}.css?{$version}" rel="stylesheet">
    <link href="{$domain}/fonts/font-awesome.min.css?{$version}" rel="stylesheet" />
    <script src="{$domain}/js/{$session.lang}/home.js?{$version}"></script>
    <meta property="og:url" content='{if isset($meta_url)}{$meta_url}{/if}' />
    <meta property="og:type" content='website' />
    <meta property="og:title" content='{if isset($meta_title)}{$meta_title}{/if}' />
    <meta property="og:description" content='{if isset($meta_description)}{$meta_description}{/if}' />
    <meta property="og:image" content='{if isset($meta_image)}{$meta_image}{/if}' />
    <meta property="og:image:alt" content='{if isset($meta_description)}{$meta_description}{/if}' />
</head>

<body>
    <div class="header">
        <div class="header-toolbar">
            <div class="container">
                <div class="support">
                    <span><a href="/tai-ung-dung" title="">T???i ???ng d???ng</a></span>
                    <span><a href="tel:{$setup.company_phone}" title="">Hotline: {$setup.company_phone}</a></span>
                </div>
                <div class="wrap-icon">
                    <div class="login-menu">
                        {if !isset($session.fullname_client)}
                            <a href="#" title="H??? tr???"> <i class="fa fa-question-circle-o"></i> H??? tr???</a>
                            <a href="/dang-nhap" title="">????ng nh???p</a>
                            <a href="/dang-ky-tai-khoan" title="">????ng k??</a>
                        {else}
                            <a class="destop" href="/thong-bao" title="Th??ng b??o"><i class="fa fa-bell"></i> Th??ng b??o</a>
                            <a href="#" title="H??? tr???"> <i class="fa fa-question-circle-o"></i> H??? tr???</a>
                            <a href="/thong-tin" title="">{$session.fullname_client}</a>
                            <a href="{$link}/web_erp/logout.php" title="">????ng xu???t</a>
                        {/if}

                    </div>
                </div>
            </div>
        </div>
        <div class="header-main">
            <div class="container">
                <div class="relative">
                    <div class="row">
                        <div class="col-md-3 col-sm-4 col-xs-12 logo">
                            <h1 class="hide">{if isset($meta_title)}{$meta_title}{/if}</h1>
                            <a href="/" title="Erp"><img src="{if isset($url_logo) && $url_logo != ''}{$url_logo}{else}{$domain}/images/logo.png{/if}" alt="{if isset($meta_title)}{$meta_title}{/if}"></a>
                            <div class="icon-cate-mobi">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </div>
                        </div>
                        <div class="col-md-9 col-sm-8 col-xs-12 wrap-menu-top">
                            <div class="form-search">
                                <div class="relative">
                                    <div class="search">
                                        <div>
                                            <input type="text" class="form-control" name="keyword" id="keyword"
                                                placeholder="T??m ki???m tr??n Vicosap..." />
                                            <button class="btn btn-search" id="btn_search"><img src="{$domain}/images/icon-search.png"
                                                    alt="T??m ki???m" /></button>
                                            <div class="search-sub">
                                                {foreach from=$menu_header item=item key=key}
                                                    {if $item@iteration >= 1 && $item@iteration <= 4}
                                                        <span><a href="/tim-kiem-{$item.cat_link}-cq{$item.id}">{$item.name}</a></span>
                                                        {* <span><a href="#">?????c s???n mi???n T??y</a></span>
                                            <span><a href="#">M??? ph???m</a></span>
                                            <span><a href="#">Kh???u trang</a></span> *}
                                                    {/if}
                                                {/foreach}
                                            </div>
                                        </div>
                                    </div>
                                    <a class="icon-cart cart-detail" href="/gio-hang"><img
                                            src="{$domain}/images/cart.png" alt="#" /><span
                                            id='quantity_cart'></span><i>Gi??? h??ng</i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-menu">
            <div class="container">
                <div class="header-menu1">
                    <div class="icon-menu-mobi">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </div>
                    <div class="category-product">
                        <div class="title">
                            <span><i></i><i></i><i></i></span>
                            <p>Danh m???c</p>
                            <i class="fa fa-angle-down"></i>
                        </div>
                        <ul>
                            {foreach from=$menu_header item=item key=key}
                                <li class="li-sub">
                                    <a href="/{$item.cat_link}-c{$item.id}" title="{$item.name}">
                                        <div class="icon">
                                            <img src="{$item.icon}" class="" />
                                            <img src="{$item.icon}" class="h" />
                                        </div>
                                        <span>{$item.name} {if $item.l|@count > 0}<i
                                                class="fa fa-angle-right"></i>{/if}</span>
                                    </a>
                                    {if $item.l|@count > 0}
                                        <ul class="sub">
                                            {foreach from=$item.l item=items key=key}
                                                <li>
                                                    <a href="/{$items.cat_link}-c{$items.id}"
                                                        title="{$items.name}">{$items.name}{if $items.l|@count > 0}<i
                                                            class="fa fa-angle-right"></i>{/if}</a>
                                                    {if $items.l|@count > 0}
                                                        <ul class="sub">
                                                            {foreach from=$items.l item=itemss key=key}
                                                                <li><a href="/{$itemss.cat_link}-c{$itemss.id}"
                                                                        title="{$itemss.name}">{$itemss.name}</a></li>
                                                            {/foreach}
                                                        </ul>
                                                    {/if}
                                                </li>
                                            {/foreach}
                                        </ul>
                                    {/if}
                                </li>
                            {/foreach}
                        </ul>
                    </div>
                    <div class="menu-top">
                        {$menu_top}
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <div class="category-product category-product-mobile">
            <div class="title">
                <span><i></i><i></i><i></i></span>
                <p>Danh m???c</p>
            </div>
            <ul>
                <li>
                    <a href="product" title="#">
                        <div class="icon">
                            <img src="{$domain}/images/icon1.png" class="" />
                            <img src="{$domain}/images/icon1-h.png" class="h" />
                        </div>
                        <span>Th???i trang nam</span>
                    </a>
                </li>
                <li>
                    <a href="product" title="#">
                        <div class="icon">
                            <img src="{$domain}/images/icon2.png" class="" />
                            <img src="{$domain}/images/icon2-h.png" class="h" />
                        </div>
                        <span>Gi??y th???i trang n???</span>
                    </a>
                </li>
                <li>
                    <a href="product" title="#">
                        <div class="icon">
                            <img src="{$domain}/images/icon3.png" class="" />
                            <img src="{$domain}/images/icon3-h.png" class="h" />
                        </div>
                        <span>Ph??? ki???n du l???ch</span>
                    </a>
                </li>
                <li>
                    <a href="product" title="#">
                        <div class="icon">
                            <img src="{$domain}/images/icon4.png" class="" />
                            <img src="{$domain}/images/icon4-h.png" class="h" />
                        </div>
                        <span>????? gia d???ng cho em b??</span>
                    </a>
                </li>
                <li>
                    <a href="product" title="#">
                        <div class="icon">
                            <img src="{$domain}/images/icon5.png" class="" />
                            <img src="{$domain}/images/icon5-h.png" class="h" />
                        </div>
                        <span>Ph??? ki???n ph??ng ng???</span>
                    </a>
                </li>
                <li>
                    <a href="product" title="#">
                        <div class="icon">
                            <img src="{$domain}/images/icon6.png" class="" />
                            <img src="{$domain}/images/icon6-h.png" class="h" />
                        </div>
                        <span>????? gia d???ng</span>
                    </a>
                </li>
                <li>
                    <a href="product" title="#">
                        <div class="icon">
                            <img src="{$domain}/images/icon7.png" class="" />
                            <img src="{$domain}/images/icon7-h.png" class="h" />
                        </div>
                        <span>Th???c ph???m th?? c??ng</span>
                    </a>
                </li>
                <li>
                    <a href="product" title="#">
                        <div class="icon">
                            <img src="{$domain}/images/icon8.png" class="" />
                            <img src="{$domain}/images/icon8-h.png" class="h" />
                        </div>
                        <span>Tr??i c??y si??u s???ch</span>
                    </a>
                </li>
                <li>
                    <a href="product" title="#">
                        <div class="icon">
                            <img src="{$domain}/images/icon9.png" class="" />
                            <img src="{$domain}/images/icon9-h.png" class="h" />
                        </div>
                        <span>M??? ph???m ch??nh s???n</span>
                    </a>
                </li>
                <li>
                    <a href="product" title="#">
                        <div class="icon">
                            <img src="{$domain}/images/icon10.png" class="" />
                            <img src="{$domain}/images/icon10-h.png" class="h" />
                        </div>
                        <span>S???n ph???m c??ng ngh???</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="height-header"></div>