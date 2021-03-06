<style type="text/css">
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
                        <img alt="" class="cloudzoom" id="zoom-fancybox" src="{$data.img_1}"
                            data-cloudzoom="zoomImage: '{$data.img_1}'">
                    </div>
                    <div class="thumbs">
                        <div>
                            {if $data.img_1 != ''}
                                <div class="item">
                                    <img alt="" class="cloudzoom-gallery" src="{$data.img_1}"
                                        data-cloudzoom="useZoom:'.cloudzoom', image: '{$data.img_1}' , zoomImage: '{$data.img_1}' ">
                                    <input class="hide" id="link_img" type="text" value="{$data.img_1}" />
                                </div>
                            {/if}
                            {if $data.img_2 != ''}
                                <div class="item">
                                    <img alt="" class="cloudzoom-gallery" src="{$data.img_2}"
                                        data-cloudzoom="useZoom:'.cloudzoom', image: '{$data.img_2}' , zoomImage: '{$data.img_2}' ">
                                </div>
                            {/if}
                            {if $data.img_3 != ''}
                                <div class="item">
                                    <img alt="" class="cloudzoom-gallery" src="{$data.img_3}"
                                        data-cloudzoom="useZoom:'.cloudzoom', image: '{$data.img_3}' , zoomImage: '{$data.img_3}' ">
                                </div>
                            {/if}
                            {if $data.img_4 != ''}
                                <div class="item">
                                    <img alt="" class="cloudzoom-gallery" src="{$data.img_4}"
                                        data-cloudzoom="useZoom:'.cloudzoom', image: '{$data.img_4}' , zoomImage: '{$data.img_4}' ">
                                </div>
                            {/if}
                            {if $data.img_5 != ''}
                                <div class="item">
                                    <img alt="" class="cloudzoom-gallery" src="{$data.img_5}"
                                        data-cloudzoom="useZoom:'.cloudzoom', image: '{$data.img_5}' , zoomImage: '{$data.img_5}' ">
                                </div>
                            {/if}
                            {if $data.img_6 != ''}
                                <div class="item">
                                    <img alt="" class="cloudzoom-gallery" src="{$data.img_6}"
                                        data-cloudzoom="useZoom:'.cloudzoom', image: '{$data.img_6}' , zoomImage: '{$data.img_6}' ">
                                </div>
                            {/if}
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 infomation-product-detail">
                    <div class="wrap-scroll-detail">
                        <div class="scroll-detail">
                            <h1 class="title">{$data.name}</h1>
                            <span class="ma-sp"><b>SKU:</b> {$data.sku_code}{if isset($session.fullname_client)}<button
                                        type="button" class="btn-share" product_id="{$data.id}" id="btnCopy">Chia
                                    s???</button>{/if}</span>
                            <div class="clear"></div>
                            <div class="info">{$data.short_description}</div>
                            {if $data.decrement > 0}
                                <p class="old-price-detail">Gi?? g???c: <span>{$data.price|number_format:"0":".":","}
                                        vn??</span></p>
                            {/if}
                            <p class="price-detail">{$data.price_decrement|number_format:"0":".":","} vn??</p>
                            <div class="clear"></div>
                            <div class="size">
                                <label class="col-md-2 col-sm-3">S??? l?????ng:</label>
                                <div class="col-md-3 col-sm-3">
                                    <input class="form-control input-sm quantity-size" id="quantity" type="number" min=1
                                        value="1" />
                                    {* <select class="form-control input-sm quantity-size" id="quantity">
                                            {for $foo=1 to $data.on_stock max=100}
                                                <option value="{$foo}">{$foo}</option>
                                            {/for}
                                        </select> *}
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
                        <input class="hide" id="title" type="text" value="{$data.name}" />
                        <input class="hide" id="price" type="text" value="{$data.price}" />
                        <input class="hide" id="unique_id" type="text" value="{$data.unique_id}" />
                        <input class="hide" id="decrement" type="text" value="{$data.decrement}" />
                        <input class="hide" id="link" type="text"
                            value="{$rewrite_url}{$data.product_link}-p{$data.unique_id}/{if isset($session.username_client)}{$session.username_client}{/if}" />
                        <div class="action">
                            <!-- Load l???i c??i h??nh ???nh ?????i di???n ????? l??m s??? ki???n th??m v??o gi??? h??ng cho ?????p =)) -->
                            <div class="img_add_cart">
                                {if $data.img_1 != ''}
                                    <img alt="" src="{$data.img_1}" />
                                {/if}
                            </div>
                            <!-- End -->

                            <button type="button" class="btn btn-add-cart btn-width" product_id="{$data.id}"
                                id="add_cart">Th??m v??o gi??? h??ng</button>
                            <button type="button" class="btn btn-key btn-width" product_id="{$data.id}" id="buy_now">MUA
                                NGAY</button>
                            <div class="clear"></div>
                        </div>
                        <div class="box_addcart_success">
                            <img src="{$domain}images/addcart_success.png" alt="" class="img-responsive" />
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
                {* <li class=""><a href="#tab2" data-toggle="tab">Th??ng tin chi ti???t</a></li> *}
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="tab1">
                    <div class="content">
                        {*<p><span style="font-size: 20px;"><strong>Th??ng tin s???n ph???m:</strong></span></p>
                        <p>&nbsp;</p>*}
                        {$data.description}
                    </div>
                    {* <div class="content">
                        <p><span style="font-size: 20px;"><strong>Th??ng tin s???n ph???m:</strong></span></p>
                        <p>&nbsp;</p>
                        <p><span style="font-size: 14px;">??? T??n s???n ph???m: Lavabo ???? t??? nhi??n cao c???p Naston
                                LDTN001</span></p>
                        <p><span style="font-size: 14px;">??? M?? s???:&nbsp;<strong>LDTN001</strong></span></p>
                        <p><span style="font-size: 14px;">??? M??u s???c: H???ng</span></p>
                        <p><span style="font-size: 14px;">??? C??n n???ng: 8kg</span></p>
                        <p><span style="font-size: 14px;">??? Th????ng hi???u:&nbsp;<strong>NASTON</strong></span></p>
                        <p><span style="font-size: 14px;">??? K??ch th?????c: 410x410x140mm</span></p>
                        <p><span style="font-size: 14px;">??? Ch???t li???u:&nbsp;<strong>???? t??? nhi??n</strong></span></p>
                        <p><span style="font-size: 14px;">???&nbsp;Xu???t s???: Y??n B??i -&nbsp; Vi???t Nam</span></p>
                        <p><span style="font-size: 14px;">??? C??ng d???ng: Lavabo ???? t??? nhi??n (b???n r???a m???t ???? t??? nhi??n)
                                th?????ng ???????c d??ng trong trang tr?? n???i th???t nh?? t???m, spa, nh?? h??ng, kh??ch s???n,??? ho???c l???p
                                ?????t ??? ngo??i tr???i, l???i ??i hay b???t c??? n??i n??o trong kh??ng gian nh?? b???n mi???n ph?? h???p v???i
                                quan c???nh xung quanh. B???n r???a b???ng ???? ???????c l??m t??? m??? v?? gi??? nguy??n n??t ?????p nguy??n th???y
                                c???a ???? t??? nhi??n.</span></p>
                        <p>&nbsp;</p>
                        <p style="text-align: center;"><img
                                src="https://static.azone.vn/17588/picture/2021/06/08/l-4--1623139473.jpg" alt=""></p>
                        <p style="text-align: center;">&nbsp;</p>
                        <p style="text-align: center;"><em><strong><span style="font-size: 14px;">LAVABO ???? T??? NHI??N CAO
                                        C???P&nbsp;<span style="color: rgb(0, 0, 255);"><a style="color: rgb(0, 0, 255);"
                                                href="../"
                                                target="_blank">NASTON</a></span>&nbsp;LDTN001</span></strong></em></p>
                        <p>&nbsp;</p>
                        <p><span style="font-size: 14px;">- ???? t??? l??u,&nbsp;<span style="color: rgb(0, 0, 255);"><a
                                        style="color: rgb(0, 0, 255);" href="../lavabo-da-tu-nhien-a559555/"
                                        target="_blank"><strong>Lavabo ???? t???
                                            nhi??n</strong></a></span><strong>&nbsp;</strong>v???n ???????c ????nh gi?? cao v?? ??a
                                chu???ng s??? d???ng nhi???u ??? c??c bi???t th??? cao c???p, c??c khu resort, kh??ch s???n... B??n c???nh vi???c
                                d??ng l??m b???n r???a m???t t???i ph??ng t???m,&nbsp;<strong>lavabo ???? t??? nhi??n</strong>&nbsp;c??n
                                d??ng trong c??c spa, kh??ch s???n, nh?? h??ng cao c???p l??m t??n l??n v??? ?????p cho kh??ng gian th??m
                                trang nh??, sang tr???ng.</span></p>
                        <p>&nbsp;</p>
                        <p style="text-align: center;"><img
                                src="https://static.azone.vn/17588/picture/2021/06/08/l-3--1623139484.jpg" alt=""></p>
                        <p>&nbsp;</p>
                        <p style="text-align: center;"><em><strong><span style="font-size: 14px;">LAVABO ???? T??? NHI??N CAO
                                        C???P&nbsp;<span style="color: rgb(0, 0, 255);"><a style="color: rgb(0, 0, 255);"
                                                href="../"
                                                target="_blank">NASTON</a></span>&nbsp;LDTN001</span></strong></em></p>
                        <p>&nbsp;</p>
                        <p><span style="font-size: 14px;">- Ng??y nay,&nbsp;<strong>lavabo ???? t??? nhi??n</strong>&nbsp;l???i
                                ???????c nhi???u gia ????nh l???a ch???n nhi???u h??n b???i v??? ?????p v?? s??? tinh t??? c???a n??. C??c s???n ph???m ch???
                                t??c t??? ???? t??? nhi??n n??i chung v??&nbsp;<strong>Lavabo ???? t??? nhi??n</strong>&nbsp;n??i ri??ng
                                lu??n ???????c ????nh gi?? cao b???i s??? m???c m???c, b??nh d???, g???n g??i v???i thi??n nhi??n, l??m cho kh??ng
                                gian th??m t????i m???i, ?????y nh???a s???ng.</span></p>
                        <p>&nbsp;</p>
                        <p><strong><span style="font-size: 20px;">Lavabo ???? t??? nhi??n ???????c s???n xu???t nh?? th???
                                    n??o?</span></strong></p>
                        <p><span style="font-size: 14px;">- Ch???u r???a (lavabo) ???????c l??m t??? 100% ???? t??? nhi??n nguy??n kh???i,
                                qua b??n tay t??i hoa c???a c??c ngh??? nh??n ch??? t??c v?? c??ng c??ng phu v?? t??? m???, tr???i qua nhi???u
                                c??ng ??o???n ????? t???o th??nh chi???c lavabo tuy???t ?????p m?? v???n gi??? l???i g???n nh?? nguy??n v???n n??t ?????p
                                nguy??n th???y c???a ???? t??? nhi??n.</span></p>
                        <p>&nbsp;</p>
                        <p style="text-align: center;"><img
                                src="https://static.azone.vn/17588/picture/2021/06/05/unnamed-1622866654.jpg" alt=""
                                width="748" height="461"></p>
                        <p style="text-align: center;">&nbsp;</p>
                        <p align="center"><span style="font-size: 14px;"><strong><em>Khai th??c ???? t??? nhi??n s???n xu???t
                                        lavabo</em></strong></span></p>
                        <p align="center">&nbsp;</p>
                        <p style="text-align: left;">-&nbsp;<span style="font-size: 14px;"><strong>Lavabo ???? t???
                                    nhi??n</strong>&nbsp;???????c l??m t??? ch???t li???u ???? t??? nhi??n nguy??n kh???i cao c???p nh?? ????
                                Onyx, ???? Marble, ???? cu???i,??? qua tuy???n ch???n k?? c??ng, c??ng quy tr??nh thi???t k??? v?? s???n xu???t
                                ???????c gi??m s??t nghi??m ng???t. H??nh d???ng, k??ch th?????c v?? v??n ???? c???a m???i s???n ph???m Lavabo ???? t???
                                nhi??n l?? ho??n to??n kh??c&nbsp;nhau do ph??? thu???c v??o ph??i ???? t??? nhi??n t???o th??nh s???n
                                ph???m.</span></p>
                        <p style="text-align: left;">&nbsp;</p>
                        <p style="text-align: center;"><img
                                src="https://static.azone.vn/17588/picture/2021/06/05/khai-thac-da-tu-nhien-1622866781.jpg"
                                alt=""></p>
                        <p style="text-align: left;">&nbsp;</p>
                        <p align="center"><span style="font-size: 14px;"><strong><em>Ph??i ???? ???????c ch???n l???c ????? s???n xu???t
                                        lavabo</em></strong></span></p>
                        <p align="center">&nbsp;</p>
                        <p>-<span style="font-size: 14px;">&nbsp;Sau khi khai th??c t??? kh???i ???? l???n, ph??i ???? ???????c ch???n l???c
                                s??? ???????c ????a v??? x?????ng gia c??ng. T???i ????y, c??c ng?????i th??? l??nh ngh??? ti???n h??nh gia c??ng t???
                                m???, kh??o l??o qua c??c giai ??o???n c???t, ?????c, ?????o, kho??t l???, m??i, ????nh b??ng s??ng ph??a trong,
                                bo tr??n xung quanh vi???n... b???ng m??y m??c chuy??n d???ng ????? t???o th??nh nh???ng chi???c Lavabo ho??n
                                thi???n v???i ???????ng n??t tinh t???, h??i ho??.</span></p>
                        <p>&nbsp;</p>
                        <p><img src="https://static.azone.vn/17588/picture/2021/06/08/l-1--1623139483.jpg" alt=""></p>
                        <p style="text-align: center;">&nbsp;</p>
                        <p style="text-align: center;"><em><strong><span style="font-size: 14px;">LAVABO ???? T??? NHI??N CAO
                                        C???P&nbsp;<span style="color: rgb(0, 0, 255);"><a style="color: rgb(0, 0, 255);"
                                                href="../"
                                                target="_blank">NASTON</a></span>&nbsp;LDTN001</span></strong></em></p>
                        <p>&nbsp;</p>
                        <p><strong>- Lavabo ???? t??? nhi??n</strong>&nbsp;s??? d???ng c??ng ngh??? s???n xu???t th??? c??ng, gia c??ng v???i
                            ????? tinh x???o, th???m m??? ng??y c??ng cao,????p ???ng m???i nhu c???u trang tr??, l??m h??i l??ng ngay c??? nh???ng
                            kh??ch h??ng kh?? t??nh nh???t.&nbsp;Do ???????c ch??? t??c ho??n to??n b???ng th??? c??ng, t??? m??? t???ng ???????ng
                            n??t, v?? th??? n??n k??ch th?????c v?? tr???ng l?????ng c???a s???n ph???m&nbsp;s??? c?? sai s??? nh??? kh??ng ????ng k???.
                        </p>
                        <p style="text-align: left;">&nbsp;</p>
                        <p style="text-align: center;"><img
                                src="https://static.azone.vn/17588/picture/2021/06/05/1-1622867304.jpg" alt=""></p>
                        <p style="text-align: left;">&nbsp;</p>
                        <p style="text-align: left;"><span style="font-size: 14px;">- V??n ???? l?? m???t n??t ?????p ?????c bi???t v??
                                ?????c ????o c???a&nbsp;<strong>Lavabo ???? t??? nhi??n&nbsp;</strong>m?? c??c lo???i lavabo th??ng
                                th?????ng kh??ng c?? ???????c. V??n, v???t, v?? nh???ng v???t r???n trong m???i kh???i ???? ???????c h??nh th??nh qua
                                ki???n t???o ?????a ch???t h??ng tri???u n??m. B???i t???ng chi???c Lavabo ???????c l??m t??? m???t kh???i ???? kh??c
                                nhau, tu??? thu???c v??? tr?? c???t c???a ph??i ???? n??n v??n ???? c??ng ho??n to??n ng???u nhi??n, kh??ng t???n
                                t???i 2 chi???c Lavabo gi???ng nhau, ??i???u n??y t???o n??n v??? ?????p ?????c nh???t v?? nh???
                                cho&nbsp;<strong>Lavabo ???? t??? nhi??n</strong>.</span></p>
                    </div> *}
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
</div>