<!-- V2 Vicosop -->
{if $data.slide_top|@count > 0}
    <div class="header-slider">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-5 col-xs-12 center">
                    <div class="iframe">
                        <div class="flexslider">
                            <ul class="slides" id="slide">
                                {foreach from=$data.slide_top item=it key=key}
                                    {if $it.banner != ''}
                                        <li>
                                            <a href="/{$it.cat_link}" style="{if $it.cat_link==''}pointer-events:none;{/if}"
                                                title="{$it.name}" class=""><img src="{$it.banner}" alt="{$it.name}" /></a>
                                        </li>
                                    {/if}
                                {/foreach}
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 right">
                    <div class="iframe">
                        {foreach from=$data.banner_right_slide item=it key=key}
                            <div class="item1">
                                <a href="/{$it.cat_link}" title="{$it.name}"><img src="{$it.banner}" alt="{$it.name}" /></a>
                            </div>
                        {/foreach}
                    </div>
                </div>
            </div>
        </div>
    </div>
{/if}
<div class="brand">
    <div class="container">
        <div class="owl">
            {assign var=x value=1}
            {foreach from=$data.theme item=item key=key}
                {if $item.slide_size == 'big'}
                    {foreach from=$item.category_1_list item=it key=key}
                        {if $x % 2 != 0}
                            <div class="item col-md-2">
                                {assign var=x value=2}
                            {else}
                                {assign var=x value=1}
                            {/if}
                            <a href="product" title="#"><img src="{$it.icon}" alt="#" /><span>{$it.name}</span></a>
                            {if $x % 2 != 0}
                            </div>
                        {/if}
                    {/foreach}
                {/if}
            {/foreach}
        </div>
    </div>
</div>

{foreach from=$data.theme item=item key=key}
    {if $item.slide_size != 'big'}
        {if $item.product_1_list|@count <= 0}
            {if $item.slide_list|@count <= 5}
                <div class="banner">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 item">
                                <div class="owl-1">
                                    {foreach from=$item.slide_list item=banner key=key}
                                        <a href="/{$banner.cat_link}" title="{$banner.name}"><img src="{$banner.banner}"
                                                alt="{$banner.name}" /></a>
                                    {/foreach}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            {else}
                <div class="banner banner-small-run">
                    <div class="container">
                        <div class="content">
                            <div class="block-title">
                                <h2 class="title"><a>Th????ng hi???u ?????ng h??nh c??ng c???ng t??c vi??n</a></h2>
                                <div class="clear"></div>
                            </div>
                            <div class="row">
                                {foreach from=$item.slide_list item=banner key=key}
                                    {if $banner@iteration == 1}
                                        <div class="col-md-3 col-sm-3 col-xs-12 banner-cate">
                                            <a href="/{$banner.cat_link}" title="{$banner.name}"><img src="{$banner.banner}"
                                                    alt="{$banner.name}" /></a>

                                        </div>
                                    {/if}
                                {/foreach}
                                <div class="col-md-9 col-sm-9 col-xs-12 banner-product">
                                    <div class="row">
                                        <div class="owl-3">
                                            {assign var=x value=1}
                                            {foreach from=$item.slide_list item=banner key=key}
                                                {if $banner@iteration > 1}
                                                    {if $x % 2 != 0}
                                                        <div class="col-md-4 item">
                                                            {assign var=x value=2}
                                                        {else}
                                                            {assign var=x value=1}
                                                        {/if}
                                                        <div class="img">
                                                            <a href="/{$banner.cat_link}" title="{$banner.name}"><img src="{$banner.banner}"
                                                                    alt="{$banner.name}" /></a>
                                                        </div>
                                                        {if $x % 2 != 0}
                                                        </div>
                                                    {/if}
                                                {/if}
                                            {/foreach}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            {/if}
        {else}
            <div class="content-product">
                <div class="container">
                    <div class="content">
                        <div class="block-content">
                            <div class="row">
                                {if $item.slide_list|@count > 0}
                                    <div
                                        class="col-md-3 col-sm-3 col-xs-12 img-cate {if $item.slide_size == 'slideright'}pull-right{/if}">
                                        <div class="owl-1">
                                            {foreach from=$item.slide_list item=banner key=key}
                                                <a href="/{$banner.cat_link}" title="{$banner.name}"><img src="{$banner.banner}"
                                                        alt="{$banner.name}" /></a>
                                            {/foreach}
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-sm-9 col-xs-12 img-product">
                                    {else}
                                        <div class="col-md-12 col-sm-12 col-xs-12 img-product">
                                        {/if}
                                        <div class="block-title">
                                            <h2 class="title"><a
                                                    style="{if $item.product_1_list|@count == 0}pointer-events:none;{/if}"
                                                    href="/{$item.cat_link}-c{if $item.category_1 != '0'}{$item.category_1}{else}{$item.product_1}{/if}"
                                                    title="{$item.name}">{$item.name}</a></h2>
                                            {if $item.category_1_list|@count > 0}
                                                <ul class="sub-title">
                                                    {foreach from=$item.category_1_list item=items key=key}
                                                        <li><a href="/{$items.cat_link}-c{$items.id}"
                                                                style="{if $items.cat_link==''}pointer-events:none;{/if}"
                                                                title="{$items.name}">{$items.name}</a></li>
                                                    {/foreach}
                                                </ul>
                                            {/if}
                                            <a href="/{$item.cat_link}-c{if $item.category_1 != '0'}{$item.category_1}{else}{$item.product_1}{/if}"
                                                title="Xem th??m">Xem th??m <i class="fa fa-angle-double-right"></i></a>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="row">
                                            <div class="owl-4">
                                                {assign var=x value=1}
                                                {foreach from=$item.product_1_list item=product key=key}
                                                    {if $item.layout.product_row < 2}
                                                        <div class="col-md-3 item">
                                                        {else}
                                                            {if $x % 2 != 0}
                                                                <div class="col-md-3 item">
                                                                    {assign var=x value=2}
                                                                {else}
                                                                    {assign var=x value=1}
                                                                {/if}
                                                            {/if}
                                                            <div class="iframe">
                                                                <div class="img">
                                                                    <a href="/{$product.product_link}-p{$product.unique_id}"
                                                                        title="{$product.product_name}"><img src="{$product.image}"
                                                                            alt="{$product.product_name}" /></a>
                                                                </div>
                                                                <div class="info">
                                                                    <h3><a href="/{$product.product_link}-p{$product.unique_id}"
                                                                            title="{$product.product_name}">{$product.product_name}</a>
                                                                    </h3>
                                                                    <p class="price">{$product.price|number_format:"0":".":","}<font>??
                                                                        </font>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            {if $item.layout.product_row < 2}
                                                            </div>
                                                        {else}
                                                            {if $x % 2 != 0}
                                                            </div>
                                                        {/if}
                                                    {/if}
                                                {/foreach}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            {/if}
        {/if}
    {/foreach}

    <section class="block-news block-news-home">
        <div class="container">
            <div class="block-title block-title-news">
                <h2 class="title"><a href="news" title="#">C??u chuy???n th????ng hi???u</a></h2>
                <ul class="sub-title">
                    <li><a href="news" title="#">Kinh doanh online</a></li>
                    <li><a href="news" title="#">?? t?????ng k??nh doanh</a></li>
                    <li><a href="news" title="#">Xu h?????ng</a></li>
                </ul>
                <div class="clear"></div>
            </div>
            <div class="block-content">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12 wrap-item news-left">
                        <div class="item">
                            <a href="news-detail"
                                title="Ho??i Linh h??? tr??? h???c tr?? em trai ????ng quang Tuy???t ?????nh song ca nh??" class="img">
                                <img src="{$domain}/images/news1.png"
                                    alt="Ho??i Linh h??? tr??? h???c tr?? em trai ????ng quang Tuy???t ?????nh song ca nh??">
                            </a>
                            <div class="wrap-info">
                                <h3><a href="news-detail"
                                        title="Ho??i Linh h??? tr??? h???c tr?? em trai ????ng quang Tuy???t ?????nh song ca nh??">T???i
                                        sao
                                        d???a s??p l???i ?????t? T???i sao gi?? l???i qu?? cao?</a></h3>
                                <div class="time">
                                    <span><i class="fa fa-clock-o" aria-hidden="true"></i>09:22 AM 18/09/2017</span>
                                </div>
                                <div class="info">T???i sao d???a s??p l???i ?????t l?? c??u h???i m?? r???t nhi???u ng?????i quan t??m
                                    hi???n
                                    nay.
                                    V???i gi?? m???t qu??? d???a s??p dao ?????ng t??? 150 ?????n h??n 200 ngh??n ?????ng m???t qu???, c?? n??i
                                    gi??
                                    b??n
                                    l??n ?????n 300</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 wrap-item news-center">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12 wrap-item">
                                <div class="item">
                                    <a href="news-detail" title="??ng t??? ngh??? nail ??? Czech" class="img">
                                        <img src="{$domain}/images/news2.jpeg" alt="??ng t??? ngh??? nail ??? Czech">
                                    </a>
                                    <div class="wrap-info">
                                        <h3><a href="/ong-chu-viet-so-huu-20-tiem-nail-o-cong-hoa-sec-d73906/"
                                                title="??ng t??? ngh??? nail ??? Czech">L???i ??ch s???c kh???e v?? dinh d?????ng c???a
                                                CACAO</a></h3>
                                        <div class="time">
                                            <span><i class="fa fa-clock-o" aria-hidden="true"></i>04:00 PM
                                                22/08/2017</span>
                                        </div>
                                        <div class="info">Cacao ???????c s??? d???ng l???n ?????u ti??n t???i n???n v??n minh Maya ???
                                            Trung
                                            M???.
                                            N?? b???t ?????u ???????c s??? d???ng ??? ch??u ??u v??o th??? k??? 16 v?? nhanh ch??ng tr??? n??n
                                            ph???
                                            bi???n
                                            nh?? m???t lo???i thu???c t??ng</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 wrap-item">
                                <div class="item">
                                    <a href="news-detail" title="Tr???ng d??a l?????i c??ng ngh??? Israel" class="img">
                                        <img src="{$domain}/images/news3.jpeg" alt="Tr???ng d??a l?????i c??ng ngh??? Israel">
                                    </a>
                                    <div class="wrap-info">
                                        <h3><a href="news-detail" title="Tr???ng d??a l?????i c??ng ngh??? Israel">Tr???ng d??a
                                                l?????i
                                                c??ng ngh??? Israel</a></h3>
                                        <div class="time">
                                            <span><i class="fa fa-clock-o" aria-hidden="true"></i>04:00 PM
                                                22/08/2017</span>
                                        </div>
                                        <div class="info">D?? ?????u t?? ban ?????u l???n nh??ng m?? h??nh n??y c?? nhi???u ??u vi???t,
                                            hi???u
                                            qu???
                                            kinh t??? cao, m??? ra h?????ng s???n xu???t n??ng nghi???p b???n v???ng trong ??i???u ki???n
                                            bi???n
                                            ?????i
                                            kh?? h???u.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 wrap-item">
                                <div class="item">
                                    <a href="news-detail" title="L??m th??? n??o bi???n Ki???n th???c l?? m???t lo???i ti???n m???i?"
                                        class="img">
                                        <img src="{$domain}/images/news4.jpeg"
                                            alt="L??m th??? n??o bi???n Ki???n th???c l?? m???t lo???i ti???n m???i?">
                                    </a>
                                    <div class="wrap-info">
                                        <h3><a href="news-detail"
                                                title="L??m th??? n??o bi???n Ki???n th???c l?? m???t lo???i ti???n m???i?">L??m th??? n??o
                                                bi???n
                                                Ki???n th???c l?? m???t lo???i ti???n m???i?</a></h3>
                                        <div class="time">
                                            <span><i class="fa fa-clock-o" aria-hidden="true"></i>04:00 PM
                                                22/08/2017</span>
                                        </div>
                                        <div class="info">KI???N TH???C L?? M???T LO???I TI???N M???I. T???t c??? ch??ng ta ?????u c?? th???
                                            d???
                                            d??ng
                                            h???c v???n ki???n th???c h??ng ng??y t??? Facebook, Youtube, Google, h???i th???o, kho??
                                            h???c, t???
                                            r???t nhi???u ng?????i b???n g???p v???i c??c b??i h???c th??nh c??ng, th???t b???i trong cu???c
                                            s???ng.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 wrap-item">
                                <div class="item">
                                    <a href="news-detail"
                                        title="M???ng x?? h???i ???? v?? ??ang thay ?????i Ngh??? Nails nh?? th??? n??o?" class="img">
                                        <img src="{$domain}/images/news5.jpeg"
                                            alt="M???ng x?? h???i ???? v?? ??ang thay ?????i Ngh??? Nails nh?? th??? n??o?">
                                    </a>
                                    <div class="wrap-info">
                                        <h3><a href="news-detail"
                                                title="M???ng x?? h???i ???? v?? ??ang thay ?????i Ngh??? Nails nh?? th??? n??o?">M???ng
                                                x??
                                                h???i
                                                ???? v?? ??ang thay ?????i Ngh??? Nails nh?? th??? n??o?</a></h3>
                                        <div class="time">
                                            <span><i class="fa fa-clock-o" aria-hidden="true"></i>04:00 PM
                                                22/08/2017</span>
                                        </div>
                                        <div class="info">Tuy Facebook ra ?????i ???? 13 n??m nh??ng ch??? cho ?????n g???n ????y
                                            sau
                                            khi
                                            nh??m ???All about Ngh??? Nails??? ra ?????i, th?? m???ng x?? h???i ???? t???o n??n m???t c??n
                                            s???t
                                            th???n
                                            k??? v?? nhanh ch??ng ?????n c???ng ?????ng Nails ng?????i Vi???t.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 wrap-item news-right">
                        <div class="item">
                            <a href="news-detail" title="TEKNAILS - KH??T V???NG V????N XA" class="img">
                                <img src="{$domain}/images/news6.jpeg" alt="TEKNAILS - KH??T V???NG V????N XA">
                            </a>
                            <h3><a href="news-detail" title="TEKNAILS - KH??T V???NG V????N XA">T???i sao d???a s??p l???i ?????t?
                                    T???i
                                    sao
                                    gi?? l???i qu?? cao?</a></h3>
                        </div>
                        <div class="item">
                            <a href="news-detail" title="TEKNAILS - KH??T V???NG V????N XA" class="img">
                                <img src="{$domain}/images/news7.jpeg" alt="TEKNAILS - KH??T V???NG V????N XA">
                            </a>
                            <h3><a href="news-detail" title="TEKNAILS - KH??T V???NG V????N XA">L???i ??ch s???c kh???e v?? dinh
                                    d?????ng
                                    c???a CACAO</a></h3>
                        </div>
                        <div class="item">
                            <a href="news-detail" title="TEKNAILS - KH??T V???NG V????N XA" class="img">
                                <img src="{$domain}/images/news8.jpeg" alt="TEKNAILS - KH??T V???NG V????N XA">
                            </a>
                            <h3><a href="news-detail" title="TEKNAILS - KH??T V???NG V????N XA">Khi n??o d???a s??p b??? h?? ???
                                    h???ng
                                    ???
                                    th???i?</a></h3>
                        </div>
                        <div class="item">
                            <a href="news-detail" title="TEKNAILS - KH??T V???NG V????N XA" class="img">
                                <img src="{$domain}/images/news2.jpeg" alt="TEKNAILS - KH??T V???NG V????N XA">
                            </a>
                            <h3><a href="news-detail" title="TEKNAILS - KH??T V???NG V????N XA">T???ng 15000 t??i k???o d???a
                                    s??p
                                    cho b??
                                    con v??ng b??? phong t???a c??ch ly</a></h3>
                        </div>
                        <div class="item">
                            <a href="news-detail" title="TEKNAILS - KH??T V???NG V????N XA" class="img">
                                <img src="{$domain}/images/news3.jpeg" alt="TEKNAILS - KH??T V???NG V????N XA">
                            </a>
                            <h3><a href="news-detail" title="TEKNAILS - KH??T V???NG V????N XA">?????ng Th??p: Ti???p t???c
                                    ???Chuy???n
                                    xe
                                    ngh??a t??nh??? v?? kh???i ?????ng H??nh tr??nh ???H???t g???o ngh??a t??nh??? chung tay v?????t qua
                                    Covid</a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="block-news block-news-home">
        <div class="container">
            <div class="block-title block-title-news">
                <h2 class="title"><a href="news" title="#">Video th????ng hi???u</a></h2>
                <div class="clear"></div>
            </div>
            <div class="block-content">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12 wrap-item video">
                        <div class="item">
                            <a href="news-detail"
                                title="Ho??i Linh h??? tr??? h???c tr?? em trai ????ng quang Tuy???t ?????nh song ca nh??" class="img">
                                <img src="{$domain}/images/news1.png"
                                    alt="Ho??i Linh h??? tr??? h???c tr?? em trai ????ng quang Tuy???t ?????nh song ca nh??">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 wrap-item video">
                        <div class="item">
                            <a href="news-detail"
                                title="Ho??i Linh h??? tr??? h???c tr?? em trai ????ng quang Tuy???t ?????nh song ca nh??" class="img">
                                <img src="{$domain}/images/news2.jpeg"
                                    alt="Ho??i Linh h??? tr??? h???c tr?? em trai ????ng quang Tuy???t ?????nh song ca nh??">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 wrap-item video">
                        <div class="item">
                            <a href="news-detail"
                                title="Ho??i Linh h??? tr??? h???c tr?? em trai ????ng quang Tuy???t ?????nh song ca nh??" class="img">
                                <img src="{$domain}/images/news3.jpeg"
                                    alt="Ho??i Linh h??? tr??? h???c tr?? em trai ????ng quang Tuy???t ?????nh song ca nh??">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 wrap-item video">
                        <div class="item">
                            <a href="news-detail"
                                title="Ho??i Linh h??? tr??? h???c tr?? em trai ????ng quang Tuy???t ?????nh song ca nh??" class="img">
                                <img src="{$domain}/images/news4.jpeg"
                                    alt="Ho??i Linh h??? tr??? h???c tr?? em trai ????ng quang Tuy???t ?????nh song ca nh??">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="block-news block-news-dmtc">
        <div class="container">
            <div class="wrap-item">
                <div class="item">
                    <div class="img"><img src="{$domain}/images/dmtc1.png" /></div>
                    <h3>Kh??ng c???c vi??n, kh??ng b??? v???n</h3>
                    <div class="info">C???ng t??c vi??n online ch??? c???n ????ng b??n Vicosap thu cod kh??ch h??ng</div>
                </div>
                <div class="item">
                    <div class="img"><img src="{$domain}/images/dmtc2.png" /></div>
                    <h3>Kh??ng c???n ????ng g??i giao h??ng</h3>
                    <div class="info">Vicosap ch???u tr??ch nhi???m ????ng g??i v?? giao h??ng</div>
                </div>
                <div class="item">
                    <div class="img"><img src="{$domain}/images/dmtc3.png" /></div>
                    <h3>Chi???t kh???u t???t nh???t</h3>
                    <div class="info">C???ng t??c vi??n v?? ?????i l?? online ???????c h?????ng chi???t kh???u t???t nh???t</div>
                </div>
                <div class="item">
                    <div class="img"><img src="{$domain}/images/dmtc4.png" /></div>
                    <h3>B??i vi???t m???u c???p nh???t li??n t???c</h3>
                    <div class="info">B??i vi???t m???u ???????c c???p nh???t th?????ng xuy??n, CTV d??? d??ng ????ng b??n</div>
                </div>
                <div class="item">
                    <div class="img"><img src="{$domain}/images/dmtc5.png" /></div>
                    <h3>?????i ng?? h??? tr??? 24/7</h3>
                    <div class="info">C???ng t??c vi??n v?? ?????i l?? online ???????c h?????ng chi???t kh???u t???t nh???t</div>
                </div>
            </div>
        </div>
    </section>
    <section class="download-app download-app-home">
        <div class="container">
            <h2>T???i ???ng d???ng Vicosap ????? b???t ?????u kinh doanh online ngay!</h2>
            <div class="row">
                <div class="col-md-3 col-sm-12 col-xs-12"></div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="text-center"><img
                            src="{$link_qrweb}"
                            alt="{$meta_title}" class="" width="240"></div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 down_app">
                    <a href="{$link_ios}" target="_blank"><img
                            src="{$domain}/images/app_apple.jpg" alt=""
                            class="img-responsive"></a>
                    <a href="{$link_android}" target="_blank"><img
                            src="{$domain}/images/app_google.jpg" alt=""
                            class="img-responsive"></a>
                </div>
            </div>
        </div>
    </section>
<!-- END V2 Vicosap -->