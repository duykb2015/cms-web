<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<div class="clearfix">
    <div class="homebanner_ver__boxgroup">
        <div class="container ">
            <section class="hpro__falshsale hbox-highlight home-boxproduct">

                <p class="hboxproduct__title text-upp">Deal Shock mỗi ngày</p>

                <div class="owl-carousel owl-theme product__container owl_runjs_prosale " id="owl_prosaleoff">
                    <?php if (!empty($product_hot_deal)) : ?>
                        <?php foreach ($product_hot_deal as $row) : ?>
                            <div class="item proitem prosaleoff__item">
                                <div class="probox  boxproid__3126 boxprobrand__apple boxprotype__productpricecolor pro__group86">
                                    <a href="<?= base_url() . '/' . $row->slug ?>" class="box">
                                        <div class="probox__img">

                                            <figure class="mb-0 position-relative">
                                                <img src="<?= cms_url() ?>/uploads/<?= $row->image ?>" alt="iPhone 11 64GB - Chính hãng VN/A - MHDG3VN/A" class="img-full img-responsive" onerror="this.src='<?= base_url() ?>/assets/front/img/default-400_400.jpg'" loading="lazy">
                                            </figure>
                                            <span class="percent"><i class="fa fa-star"></i>Tiết kiệm </span><span class="percent_tag">Giảm <?= $row->discount ?>%</span>
                                            <div method="post" action="<?= base_url() ?>/gio-hang/them/" class="pro__addtocart product-add-cart">
                                                <div class="overflow">
                                                    <span class="btn-action">
                                                        <button type="submit" class="action-addtocart btn-hover hover" data-val="iphone-11-2019-64gb-ll-a-6-2-6284">
                                                            <span class="addtocart__text">
                                                                <i class="fa fa-shopping-cart"></i>
                                                                Mua Ngay
                                                            </span>
                                                            <svg class="addtocart__complete" x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                                                <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11" />
                                                            </svg>
                                                        </button>
                                                    </span>
                                                </div>
                                                <input type="hidden" name="qty" value="1" />
                                                <input type="hidden" name="checkin" value="iphone-11-2019-64gb-ll-a-6-2-6284" />
                                            </div>
                                        </div>

                                        <div class="probox__des  ">
                                            <!-- <div class="proitem__countdown" data-countdown="565754" data-finish="&lt;span class=&quot;price&quot;&gt;15,990,000 vnđ&lt;/span&gt;" data-percent=""></div> -->
                                            <h3 class="probox__title"><?= $row->name ?></h3>
                                            <p class="probox__price"><b class="price"><?= number_format($row->discount_price) ?></b><s><?= number_format($row->price) ?> VNĐ</s></p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach ?>
                    <?php endif ?>
                </div>
            </section>

            <section class="homebanner__container homebanner__top pb-0 pb-lg-4 mb-3 mb-lg-0 pt-3 pt-md-0 owl-carousel owl-theme" id="owl_hbannertop">
                <div class="item">
                    <div class="homebanner__item text__ intro_item110  ">
                        <a href="https://minhtuanmobile.com/apple-watch/" target="_self">
                            <img src="<?= base_url() ?>/uploads/slide/apple-watch-220315043059.png" alt="Apple Watch" />
                        </a>
                    </div>
                </div>

            </section>


            <section class="home-boxproduct hprobox__container mb-3 mb-lg-4  hprobox__itemhighlight countht_1">

                <div class="row align-items-center hboxproduct__title">
                    <h2 class="col-12 col-md-auto hboxproduct__title_title">
                        <a href="https://minhtuanmobile.com/">iPhone bán chạy</a>
                    </h2>
                    <ul class="col-12 col-md hboxproduct__title_nav">
                        <li>
                            <a href="https://minhtuanmobile.com/iphone-13-series/" class="hover">
                                iPhone 13 Series <input type="hidden" value="IPHONE-13-PRO-MAX-128-GB-ALPINE-GREEN%0D%0AIPHONE-13-PRO-128-GB-ALPINE-GREEN%0D%0AIPHONE-13-128GB-GREEN-2022%0D%0AIPHONE-13-PRO-MAX-128-GB%0D%0AIPHONE-13-PRO-MAX-256-GB%0D%0AIPHONE-13-PRO-128-GB%0D%0AIPHONE-13-128GB%0D%0AIPHONE-13-MINI-128-GB">
                            </a>
                        </li>

                        <li>
                            <a href="https://minhtuanmobile.com/iphone" class="hover">
                                XEM THÊM <input type="hidden" value="">
                            </a>
                        </li>
                    </ul>
                </div>


                <div class="row row-cols-2 row-cols-sm-4 row-cols-lg-5 row-cols-xl-5 product__container transition">

                    <div class="col proitem proitem-lg ">

                        <div class="probox ">
                            <a href="https://minhtuanmobile.com/iphone-13-pro-max-128-gb-chinh-hang-vn-a/" class="box">
                                <figure class="probox__img">
                                    <img src="<?= base_url() ?>/uploads/slide/sieu-khuyen-mai-do-bo-220816011113.png" alt="SIÊU KHUYẾN MÃI THÁNG 8" class="img-full img-responsive" onerror="this.src='https://cdn.minhtuanmobile.com/assets/front/img/default-400_400.jpg'" loading="lazy">
                                </figure>
                                <div class="probox__des">
                                    <h3 class="probox__title">SIÊU KHUYẾN MÃI THÁNG 8</h3>
                                    <p class="probox__price"><b class="price">26,990,000 VNĐ</b><s>35,990,000 VNĐ</s></p>

                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col proitem">
                        <div class="probox boxproid__11817 boxprobrand__apple boxprotype__product pro__group86">
                            <a href="https://minhtuanmobile.com/iphone-13-pro-max-128-gb-chinh-hang-vn-a/" class="box">
                                <div class="probox__img">

                                    <figure class="mb-0 position-relative">
                                        <img src="<?= base_url() ?>/uploads/products/13-pro-max-220608091404-220608091404_thumb.png" alt="iPhone 13 Pro Max 128G - Chính Hãng VN/A" class="img-full img-responsive" onerror="this.src='https://cdn.minhtuanmobile.com/assets/front/img/default-400_400.jpg'" loading="lazy">
                                    </figure>
                                    <span class="percent"><i class="fa fa-star"></i>Tiết kiệm 9,500,000đ</span><span class="percent_tag">Giảm 27%</span>
                                </div>

                                <div class="probox__des  ">
                                    <h3 class="probox__title">iPhone 13 Pro Max 128G - Chính Hãng VN/A</h3>
                                    <p class="probox__price"><b class="price">26,490,000 VNĐ</b><s>35,990,000 VNĐ</s></p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <?php if (!empty($product_line)) : ?>
                <?php foreach ($product_line as $row) : ?>
                    <section class="home-boxproduct hprobox__container mb-3 mb-lg-4 hprobox__hidenlast">
                        <div class="row align-items-center hboxproduct__title">
                            <h2 class="col-12 col-md-auto hboxproduct__title_title">
                                <a href="https://minhtuanmobile.com/iphone-12-series/"><?= $row->name ?></a>
                            </h2>
                            <!-- <ul class="col-12 col-md hboxproduct__title_nav">
                                <li>
                                    <a href="https://minhtuanmobile.com/iphone-12/" class="hover">
                                        iPhone 12 <input type="hidden" value="">
                                    </a>
                                </li>
                            </ul> -->
                        </div>

                        <div class="row row-cols-2 row-cols-sm-4 row-cols-lg-5 row-cols-xl-5 product__container transition">
                            <?php foreach ($row->items_info as $item) : ?>
                                <div class="col proitem">
                                    <div class="probox  boxproid__6460 boxprobrand__apple boxprotype__product pro__group86">
                                        <a href="<?= base_url() . '/' . $item->slug ?>" class="box">
                                            <div class="probox__img">

                                                <figure class="mb-0 position-relative">
                                                    <img src="<?= cms_url() ?>/uploads/<?= $item->image ?>" alt="iPhone 12 64GB -  Chính hãng VN/A" class="img-full img-responsive" onerror="this.src='<?= base_url() ?>/assets/front/img/default-400_400.jpg'" loading="lazy">
                                                </figure>
                                                <span class="percent"><i class="fa fa-star"></i>Tiết kiệm <?= number_format($item->discount_price) ?>đ</span><span class="percent_tag">Giảm <?= $item->discount ?>%</span>
                                            </div>

                                            <div class="probox__des  ">
                                                <h3 class="probox__title"><?= $item->name ?></h3>
                                                <p class="probox__price"><b class="price"><?= number_format($item->discount_price) ?> VNĐ</b><s><?= number_format($item->price) ?> VNĐ</s></p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        </div>
                    </section>
                <?php endforeach ?>
            <?php endif ?>
        </div>

    </div>

    <script>
        $(document).ready(function() {

            $('#owl_hbannertop').owlCarousel({
                autoplay: false,
                autoplayTimeout: 2900,
                margin: 0,
                items: 3,
                dots: false,
                loop: true,
                nav: true,
                thumbs: false,
                navText: ['<i class="far fa-caret-square-left"></i>', '<i class="far fa-caret-square-right"></i>'],
                responsive: {
                    // breakpoint from 0 up
                    0: {
                        items: 1,
                        dots: true,
                        nav: false,
                        autoplay: true,
                        margin: 0,
                    },
                    360: {
                        items: 1,
                        dots: true,
                        nav: false,
                        autoplay: true,
                        margin: 0,
                    },
                    768: {
                        items: 3,
                        dots: false,
                        nav: false,
                        mouseDrag: false,
                        touchDrag: false,
                        autoplay: false,
                        margin: 20,
                    },
                }
            });
        });
    </script>


    <script>
        $(document).ready(function() {

            var owl_home_img = $("#owl_home_img");
            var owl_home_caption = $("#owl_home_caption");
            var syncedSecondary = true;

            owl_home_img.owlCarousel({
                autoplay: true,
                autoplayTimeout: 4200,
                smartSpeed: 500,
                //autoplaySpeed: 1200,
                margin: 0,
                items: 1,
                dots: true,
                loop: false,
                nav: false,
                navText: ['prev', 'next'],
                responsiveRefreshRate: 200,
                responsive: {
                    0: {
                        dots: true,
                    },
                    480: {
                        dots: true,
                    },
                    768: {
                        dots: true,
                    },
                    991: {
                        dots: false,
                    },
                }
            }).on('changed.owl.carousel', syncPosition);

            owl_home_caption.on('initialized.owl.carousel', function() {
                owl_home_caption.find(".owl-item").eq(0).addClass("current");
            }).owlCarousel({
                autoplay: false,
                autoplayTimeout: 3500,
                smartSpeed: 450,
                //autoplaySpeed: 1200,
                margin: 0,
                items: 5,
                slideBy: 5,
                dots: false,
                loop: false,
                nav: false,
                responsiveRefreshRate: 100,
                responsive: {
                    0: {
                        items: 2,
                    },
                    480: {
                        items: 3,
                    },
                    768: {
                        items: 4,
                    },
                    991: {
                        items: 5,
                    },

                }

            });

            function syncPosition(el) {
                var count = el.item.count - 1;
                var current = el.item.index <= count ? el.item.index : 0;
                if (current < 0) {
                    current = count;
                }
                if (current > count) {
                    current = 0;
                }
                $("#owl_home_caption").find(".owl-item")
                    .removeClass("current")
                    .eq(current)
                    .addClass("current");
                owl_home_setcenter(current);

            }

            function syncPosition2(el) {
                if (syncedSecondary) {
                    var number = el.item.index;
                    //console.log( number );
                    owl_home_img.data('owl.carousel').to(number, 100, true);
                }
            }
            owl_home_caption.on("click", ".owl-item", function(e) {
                var number = $(this).index();
                //console.log( number );

                owl_home_img.data('owl.carousel').to(number, 300, true);
            });


            function owl_home_setcenter(number) {
                var sync2visible = owl_home_caption.data('owl.carousel')._items;
                var num = number;
                var found = false;
                for (var i in sync2visible) {
                    if (num === sync2visible[i] && $(sync2visible[i][0]).hasClass('active')) {
                        found = true;
                    }
                }
                if (found === false) {
                    //console.log( num , sync2visible.length - 1 );
                    if (num > sync2visible.length - 1) {
                        //console.log( 'a = ', num);
                        owl_home_caption.trigger("to.owl.carousel", num - sync2visible.length + 2)
                    } else {
                        if (num - 1 < 1) {
                            num = 0;
                        }
                        //console.log( 'b = ', num);
                        owl_home_caption.trigger("to.owl.carousel", num);
                    }
                } else if (num === sync2visible.length - 1) {
                    //console.log( 'c = ', num);
                    owl_home_caption.trigger("to.owl.carousel", sync2visible[1]);
                } else {
                    num = 1;
                    //console.log( 'd = ', num );
                    owl_home_caption.trigger("to.owl.carousel", num - 1);
                }

            }

            //-------------
            $('#owl_partner').owlCarousel({
                autoplay: true,
                autoplayTimeout: 3500,
                margin: 0,
                items: 8,
                dots: false,
                nav: true,
                navText: ['<i class="far fa-caret-square-left"></i>', '<i class="far fa-caret-square-right"></i>'],
                responsive: {
                    // breakpoint from 0 up
                    0: {
                        items: 2,
                        dots: true,
                        nav: false
                    },
                    360: {
                        items: 4,
                        loop: false,
                        dots: true,
                        nav: false
                    },
                    768: {
                        items: 6,
                        loop: false,
                        dots: true,
                        nav: false
                    },
                    991: {
                        items: 8,
                        loop: false,
                        dots: false,
                        nav: true
                    },
                }
            });
            //--------------
            //-------------
            $('#owl_homefeedback').owlCarousel({
                autoplay: true,
                autoplayTimeout: 2600,
                smartSpeed: 360,
                margin: 0,
                items: 5,
                dots: false,
                loop: true,
                nav: true,
                navText: ['<i class="far fa-caret-square-left"></i>', '<i class="far fa-caret-square-right"></i>'],
                responsive: {
                    // breakpoint from 0 up
                    0: {
                        items: 2,
                        dots: true,
                        nav: false,
                    },
                    360: {
                        items: 3,
                        dots: true,
                        nav: false,
                    },
                    768: {
                        items: 4,
                        dots: true,
                        nav: false,
                    },
                    991: {
                        items: 4,
                    },
                    1200: {
                        items: 4,
                    }
                }
            });
            //--------------
            $('.owl_homephoto_cauthu, .owl_homephoto_customer').owlCarousel({
                autoplay: true,
                autoplayTimeout: 2100,
                smartSpeed: 560,
                margin: 0,
                items: 7,
                //autoWidth:true,
                dots: false,
                loop: true,
                nav: true,
                navText: ['<i class="fa fa-arrow-right"></i>', '<i class="fa fa-arrow-left"></i>'],
                responsive: {
                    // breakpoint from 0 up
                    0: {
                        items: 3,
                    },
                    360: {
                        items: 3,
                    },
                    768: {
                        items: 4,
                    },
                    991: {
                        items: 5,
                    },
                    1200: {
                        items: 5,
                    }
                }
            });
            //-------------

            //--------------
            $('.hboxproduct__title_nav').on('click', 'a', function() {

                var _procode = $(this).find('input').val();
                $(this).parents('.hboxproduct__title_nav').find('a').removeClass('active');
                $(this).addClass('active');
                var container = $(this).parents('.home-boxproduct').find('.product__container');
                if (_procode != '') {
                    $.post(site_url + 'ajax/get-procode', {
                        'procode': _procode
                    }, function(_data) {
                        container.html(_data);
                    });
                    return false;
                } else {
                    return true;
                }
            });
            //--------------
            $('#owl_homeblog').owlCarousel({
                autoplay: false,
                autoplayTimeout: 2900,
                margin: 0,
                items: 4,
                dots: false,
                loop: true,
                nav: true,
                navText: ['<i class="far fa-caret-square-left"></i>', '<i class="far fa-caret-square-right"></i>'],
                responsive: {
                    // breakpoint from 0 up
                    0: {
                        items: 1,
                        dots: true,
                        nav: false,
                        margin: 0,
                    },
                    360: {
                        items: 1,
                        dots: true,
                        nav: false,
                        autoplay: false,
                        margin: 0,
                    },
                    768: {
                        items: 3,
                        dots: false,
                        nav: false,
                        mouseDrag: false,
                        touchDrag: false,
                        margin: 30,
                    },
                    991: {
                        items: 4,
                        dots: false,
                        nav: false,
                        mouseDrag: false,
                        touchDrag: false,
                        margin: 0,
                    },
                }
            });
            //--------------



        })
    </script>
</div>
<?= $this->endSection() ?>