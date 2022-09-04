<div class="clearfix" id="menu_mobile" role="navigation">

    <div class="menu-container">

        <button type="button" id="btn_menu_close" class="btn_menu_open">
            <i class="fa fa-angle-left"></i>
        </button>

        <div class="accordion" id="menu_accordion">

            <div class="accordion-item menuxs__logo">
                <div class="accordion-header">
                    <a href="<?= base_url() ?>">
                        <img src="<?= base_url() ?>/assets/front/img/logo.png" alt="Logo" title="Shop hàng điện tử" class="img-responsive" />
                    </a>
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-header">
                    <a href="<?= base_url() ?>/gio-hang/" class="menuxs__title menuxs__order">
                        <i class="fa fa-shopping-cart"></i>
                        <span>
                            <b class="text-upp">Giỏ hàng</b><br>
                            <span class="cartitems_total"><?= !empty($total_cart_items) ? $total_cart_items : 0 ?> sản phẩm</span>
                        </span>
                    </a>
                </div>
            </div>
            <div class="accordion-item ">
                <div class="accordion-header accordion-header_accordion" id="hr_iphone">

                    <a href="#" class="col pe-0">
                        <span class="xsheader__img"></span>
                        Điện thoại
                    </a>
                    <button class="px-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cr_iphone" aria-expanded="false" aria-controls="cr_iphone">
                        <i class="fa fa-chevron-down"></i>
                    </button>

                </div>
                <div id="cr_iphone" class="accordion-collapse collapse" aria-labelledby="hr_iphone" data-bs-parent="#menu_accordion">
                    <div class="accordion-body">
                        <ul class="clearfix menu-nav">
                            <li>
                                <a href="#">
                                    Samsung
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<ul id="fixaction_icon">
    <li class="hotline">
        <button href="tel:19003355" class="text_hide" id="show_menu_mobile">
            <i class="fa fa-bars"></i>
        </button>
    </li>

    <li class="cart">
        <a href="<?= base_url('gio-hang') ?>" class="text_hide">
            <img src="<?= base_url() ?>/assets/front/img/icon-cart-white.png" alt="Giỏ hàng của bạn" class="img-responsive">
        </a>
    </li>


    <li class="btnscroll">
        <button type="button" id="btn-scrolltop">
            <b>
                <img src="<?= base_url() ?>/assets/front/img/icon_gototop.png" alt="Go to Top" class="img-responsive" />
                <span>TOP</span>
            </b>
        </button>
    </li>


</ul>