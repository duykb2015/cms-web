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

                    <a href="<?= base_url('dang-ký') ?>" title="Đơn hàng của bạn" rel="v:url" property="v:title">
                        Đăng ký
                    </a>
                </li>
            </ol>
        </div>
    </div>
    <div class="container wrapper-container pt-0 pt-lg-0">
        <form method="post" class="hpro__bestseller home-boxproduct cart__container fcart__container">
            <h1 class="hboxproduct__title color-hover">Đăng ký</h1>
            <div class="fcartbox row">
                <div class="col-12 col-lg-6">
                    <div class="mb-3">
                        <label class="form-label b500">Email<b class="text-danger ml-1">*</b></label>
                        <input type="text" class="form-control" name="email" autocomplete="off" required value="">
                    </div>
                    <div class="mb-3">
                        <label class="form-label b500">Mật khẩu<b class="text-danger ml-1">*</b></label>
                        <input type="password" class="form-control hide_arrow" name="password" autocomplete="off" required value="">
                    </div>
                    <div class="mb-3">
                        <label class="form-label b500">Họ và Tên</label>
                        <input type="text" class="form-control hide_arrow" name="name" autocomplete="off" value="">
                    </div>
                    <div class="mb-3">
                        <label class="form-label b500">Địa chỉ</label>
                        <input type="text" class="form-control hide_arrow" name="address" autocomplete="off" value="">
                    </div>
                    <div class="mb-3">
                        <label class="form-label b500">Số điện thoại</label>
                        <input type="tel" class="form-control hide_arrow" name="tel" autocomplete="off" value="" maxlength="10">
                    </div>
                    <p>Đã có tài khoản? <a href="<?= base_url('dang-nhap') ?>">Đăng nhập ngay!</a></p>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="mb-3">
                        <p>Đăng ký tài khoản</p>
                    </div>
                </div>
            </div>

            <div class="fcartbox mb-0 pt-md-4 pt-lg-0 text-center">
                <button type="submit" class="btn cart_btnitem cart_btnitem-red">
                    <i class="fas fa-sign-in-alt"></i>
                    Đăng ký
                </button>
            </div>
        </form>

    </div>
</div>
</div>

<script>
    $(document).ready(function(e) {

        $('form').on('submit', function() {
            var _button = $(this).find('button[type=submit]');
            _button.attr('disabled', 'disabled');
        });

    });
</script>
<?= $this->endSection() ?>