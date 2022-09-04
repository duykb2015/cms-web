<header class="clearfix" id="header">
    <div class="container hlogo__container" id="hlogo__container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-3 col-xl-2 text-center header__logo">
                <div class="row align-items-center">
                    <div class="col">
                        <a href="<?= base_url() ?>">
                            <img src="<?= base_url() ?>/assets/front/img/logo.png" alt="Logo" class="img-responsive">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col col-md header__fsearch">
                <div class="row align-items-center">
                    <div class="col-auto header__action_logo_mobile d-flex d-lg-none">
                        <a href="<?= base_url() ?>">
                            <img src="<?= base_url() ?>/assets/front/img/logo.png" alt="Logo" class="img-responsive">
                        </a>
                    </div>
                    <div class="col header__action__fsearch__container position-relative">
                        <form method="get" action="<?= base_url('tim-kiem') ?>" class=" header__action__fsearch position-relative">
                            <input type="text" name="k" value="" placeholder="Search..." autocomplete="off">
                            <button type="submit" class="hover-red">
                                <i class="fa fa-search d-block d-lg-none"></i>
                                <span class="d-none d-lg-inline">Tìm kiếm...</span>
                            </button>
                        </form>
                        <div class="header__action__fsearch_quick"></div>
                    </div>
                    <div class="col-auto header__action_mobile d-flex d-lg-none">
                        <button type="button" class="btn__action_mobile" id="show_menu_mobile_fsearch" data-toggle="collapse" data-target="#header__collapse" aria-expanded="false" aria-controls="header__collapse">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>

                </div>
            </div>
            <div class="col-auto header__action__container">
                <ul class="row header__action">
                    <li class="col-auto header__action__item ps-4 px-4">
                        <a href="https://minhtuanmobile.com/cart/" class="header__action__icon_order">
                            <b>Giỏ hàng</b>
                            <span class="cartitems_total"><?= 0 ? 'của bạn' : '1 sản phẩm' ?></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>


    </div>

    <navigation class="header__nav__container">
        <div class="container">

            <ul class="navigation">
                <li class="nav-logo ">
                    <a href="https://minhtuanmobile.com/">
                        <span>
                            <img src="https://cdn.minhtuanmobile.com/assets/front/img/logo-stick.png" alt="Logo" class="img-responsive" loading="lazy">
                        </span>
                    </a>
                </li>
                <li class="nav-icon ">
                    <a href="https://minhtuanmobile.com/iphone/" target="_self">
                        <span>
                            <!-- <img src="https://cdn.minhtuanmobile.com/uploads/items/iphone-210331112745.png" loading="lazy" alt="iPhone"> -->
                            Điện thoại
                        </span>
                    </a>
                    <div class="header__navsub ">
                        <ul class="header__navsub__container">
                            <li>
                                <a href="https://minhtuanmobile.com/iphone-13-series" class="header__navsub__title">
                                    iPhone 13 Series </a>
                                <div class="header__navsubctl ">
                                    <ul class="header__navsub__container ">
                                        <li>
                                            <a href="https://minhtuanmobile.com/iphone-13-pro-max" class="header__navsub__title" target="_self">
                                                iPhone 13 Pro Max
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </navigation>
</header>