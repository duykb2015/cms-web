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
                    <?php if (!url_is('dang-nhap') && !url_is('dang-ky')) :  ?>
                        <li class="col-auto header__action__item ps-4 px-4">
                            <a href="<?= base_url('gio-hang') ?>" class="header__action__icon_order">
                                <b>Giỏ hàng</b>
                                <span class="cartitems_total"><?= !empty($total_cart_items) ? $total_cart_items : 0  ?> sản phẩm</span>
                            </a>
                        </li>
                    <?php endif ?>
                    <?php if (!url_is('dang-nhap') && !url_is('dang-ky') && !$_COOKIE['token']) : ?>
                        <li class="col-auto header__action__item ps-4 px-4">
                            <a href="<?= base_url('dang-nhap') ?>" class="header__action__icon_order">
                                <b>Đăng nhập</b>
                            </a>
                        </li>
                    <?php else : ?>
                        <li class="col-auto header__action__item ps-4 px-4">
                            <a href="<?= base_url('dang-xuat') ?>" class="header__action__icon_order">
                                <b></b>
                            </a>
                        </li>
                    <?php endif ?>

                </ul>
            </div>
        </div>
    </div>

    <navigation class="header__nav__container">
        <div class="container">

            <ul class="navigation">
                <?php if (isset($menu)) : ?>
                    <?php foreach ($menu as $row) : ?>
                        <li class="nav-icon ">
                            <a href="<?= base_url() . '/' . $row->slug ?>" target="_self">
                                <span>
                                    <!-- <img src="https://cdn.minhtuanmobile.com/uploads/items/iphone-210331112745.png" loading="lazy" alt="iPhone"> -->
                                    <?= $row->name ?>
                                </span>
                            </a>
                            <div class="header__navsub ">
                                <?php if ($row->sub_menu) : ?>
                                    <ul class="header__navsub__container">
                                        <?php foreach ($row->sub_menu as $sub_menu) : ?>
                                            <li>
                                                <a href="<?= base_url() . '/' . $sub_menu->slug ?>" class="header__navsub__title">
                                                    <?= $sub_menu->name ?>
                                                </a>
                                                <?php if ($row->category) : ?>
                                                    <div class="header__navsubctl ">
                                                        <ul class="header__navsub__container ">
                                                            <?php foreach ($sub_menu->category as $category) : ?>
                                                                <li>
                                                                    <a href="<?= base_url() . '/' . $category->slug ?>" class="header__navsub__title" target="_self">
                                                                        <?= $category->name ?>
                                                                    </a>
                                                                </li>
                                                            <?php endforeach ?>
                                                        </ul>
                                                    </div>
                                                <?php endif ?>
                                            </li>
                                        <?php endforeach ?>
                                    </ul>
                                <?php endif ?>
                                <?php if ($row->category) : ?>
                                    <ul class="header__navsub__container">
                                        <?php foreach ($row->category as $category) : ?>
                                            <li>
                                                <a href="<?= base_url() . '/' . $category->slug ?>" class="header__navsub__title">
                                                    <?= $category->name ?>
                                                </a>
                                            </li>
                                        <?php endforeach ?>
                                    </ul>
                                <?php endif ?>
                            </div>
                        </li>
                    <?php endforeach ?>
                <?php endif ?>
            </ul>
        </div>
    </navigation>
</header>