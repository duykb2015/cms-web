<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<div class="clearfix">
    <div class="clearfix" id="bg-main">



        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="<?= base_url() ?>">Trang chủ</a>
                </li>

                <li class="breadcrumb-item">

                    <a href="<?= base_url('gio-hang') ?>" title="Đơn hàng của bạn" rel="v:url" property="v:title">
                        Đơn hàng của bạn
                    </a>


                </li>
            </ol>

        </div>


    </div>
    <div class="container wrapper-container pt-0 pt-lg-0">


        <!-- <section class="hpro__bestseller home-boxproduct cart__container">

            <h1 class="hboxproduct__title color-hover">Đơn hàng của bạn</h1>

            <div class="p-3">

                <div class="dcontent alert alert-warning mb-4">
                    <p>Hiện chưa có thông tin đặt hàng.</p>
                </div>
                <p class=" mb-5">
                    <a href="<?= base_url() ?>" class="d-inline cart_btnitem cart_btnitem-red btn">
                        <i class="fa fa-home"></i>Tiếp tục mua hàng... </a>
                </p>


            </div>

        </section> -->

        <form method="post" class="hpro__bestseller home-boxproduct cart__container fcart__container">

            <h1 class="hboxproduct__title color-hover">Đơn hàng của bạn</h1>
            <div class="fcartbox p-0">

                <div class="clearfix" id="cart_content">

                    <div class="cartitem row header">


                        <div class="product row col">
                            <div class="product_info col">Sản phẩm</div>
                            <div class="color col">Màu sắc</div>
                            <div class="qty col">Số lượng</div>
                            <div class="price col price-amount">Tạm tính</div>
                        </div>
                        <div class="stt col">&nbsp;</div>
                    </div>


                    <div class="cartitem row cartitem_c6a024f688cd57cf6fd4495dbc50e353">
                        <div class="photo col">
                            <a href="https://minhtuanmobile.com/iphone-13-pro-max-128-gb-chinh-hang-vn-a-3/" target="_blank">
                                <img src="<?= base_url() ?>/uploads/products/210916025608-promax-01.jpg" class="img-responsive proimg img-thumbnail" onerror="this.src='<?= base_url() ?>/assets/front/img/default.png'">
                            </a>
                        </div>

                        <div class="product row col">


                            <div class="product_info col">
                                <h5 class="title">
                                    <a href="https://minhtuanmobile.com/iphone-13-pro-max-128-gb-chinh-hang-vn-a-3/" target="_blank">
                                        iPhone 13 Pro Max 128G - Chính Hãng VN/A </a>
                                </h5>


                                <p class="des-price">
                                    <strong>
                                        Giá bán:
                                    </strong>
                                    <b class="price">26,490,000 VNĐ</b><span class="percent_text">Tiết kiệm 9,500,000đ</span>
                                </p>

                            </div>

                            <div class="color col">
                                <div class="input-group mb-2">
                                    <span class="input-group-text" id="basic-addon3">Màu sắc</span>
                                    <select class="form-select order-color" name="c6a024f688cd57cf6fd4495dbc50e353" request>
                                        <option value="iphone-13-pro-max-128g-alpine-green-chinh-hang-vn-a">Alpine Green/Xanh Rừng Thông</option>
                                        <option value="iphone-13-pro-max-128-gb-chinh-hang-vn-a-2">Blue/Xanh</option>
                                        <option value="iphone-13-pro-max-128-gb-chinh-hang-vn-a-3" selected="selected">Gold/Vàng</option>
                                        <option value="iphone-13-pro-max-128-gb-chinh-hang-vn-a-5">Graphite/Than Chì</option>
                                        <option value="iphone-13-pro-max-128-gb-chinh-hang-vn-a-4">Silver/Bạc</option>
                                    </select>
                                </div>
                            </div>


                            <div class="qty col">
                                <div class="input-group mb-2">
                                    <span class="input-group-text" id="basic-addon3">Số lượng</span>
                                    <input type="number" class="form-control bold num_text order-qty" value="1" name="qty_c6a024f688cd57cf6fd4495dbc50e353" data-checkin="c6a024f688cd57cf6fd4495dbc50e353" min="0" autocomplete="off">
                                </div>
                            </div>

                            <div class="price col price-amount" data-price="26490000" data-checkin="c6a024f688cd57cf6fd4495dbc50e353" data-buyonline="0">
                                <span class="d-inline d-md-none">Giá bán:</span>
                                26,490,000
                            </div>

                        </div>
                        <div class="stt col">
                            <button type="button" data-checkin="c6a024f688cd57cf6fd4495dbc50e353" class="btn btn-sm btn-light border hover cartbtn_removeitem" data-confirm="Bạn muốn xoá SP này khỏi đơn đặt hàng.">
                                <i class="fa fa-trash"></i>&nbsp;
                                Xoá </button>
                        </div>
                    </div>


                    <div class="cartitem row footer">

                        <div class="col text-right">Tạm tính</div>
                        <div class="price col price-amount cart_amount_item">26,490,000</div>
                    </div>
                </div>
            </div>

            <hr class="hr_cart mt-0">
            <div class="fcartbox row">


                <div class="col-12 col-lg-6">
                    <p class="tg_itemlabel">Thông tin đơn hàng</p>
                    <div class="mb-3">
                        <label class="form-label b500">Họ & Tên<b class="text-danger ml-1">*</b></label>
                        <input type="text" class="form-control" name="fullname" autocomplete="off" required value="">
                    </div>
                    <div class="mb-3">
                        <label class="form-label b500">Điện thoại<b class="text-danger ml-1">*</b></label>
                        <input type="tel" class="form-control hide_arrow" name="phone" autocomplete="off" required value="" maxlength="10">
                    </div>
                    <div class=" mb-3">
                        <label class="form-label b500">Email<b class="text-danger ml-1">*</b></label>
                        <input type="email" class="form-control" name="email" required autocomplete="off" value="">
                    </div>

                    <div class="mb-3">
                        <label class="form-label b500">Yêu cầu</label>
                        <textarea name="mess" class="form-control" rows="1"></textarea>
                    </div>
                </div>

                <div class="fcartbox pb-3 mb-0 pt-md-4 pt-lg-0 text-center">
                    <button type="submit" class="btn cart_btnitem cart_btnitem-red pb-0">
                        <i class="fa fa-shopping-cart"></i>
                        Đặt hàng
                    </button>
                </div>
            </div>
        </form>
    </div>

    <script>
        $(document).ready(function(e) {
            $('form').on('submit', function() {
                var _button = $(this).find('button[type=submit]');
                _button.attr('disabled', 'disabled');
                setTimeout(function() {
                    _button.removeAttr('disabled')
                }, 5000); //
                return true;

            });

        });
    </script>
</div>
</div>
<?= $this->endSection() ?>