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

                    <a href="<?= base_url('dang-nhap') ?>" title="Đơn hàng của bạn" rel="v:url" property="v:title">
                        Đăng nhập
                    </a>
                </li>
            </ol>
        </div>
    </div>
    <div class="container wrapper-container pt-0 pt-lg-0">
        <form method="post" class="hpro__bestseller home-boxproduct cart__container fcart__container">
            <h1 class="hboxproduct__title color-hover">Đăng nhập</h1>
            <div class="fcartbox row">
                <div class="col-12 col-lg-6">
                    <div class="mb-3">
                        <?php $auth_err = session()->getFlashdata('auth_error') ?>
                        <?php if (isset($auth_err)) :  ?>
                            <div class="alert-danger rounded mb-1 p-1"><?= $auth_err ?></div>
                        <?php endif ?>

                        <?php $err = session()->getFlashdata('error'); ?>
                        <label class="form-label b500">Email<b class="text-danger ml-1">*</b></label>
                        <?php if (isset($err['email'])) :  ?>
                            <div class="alert-danger rounded mb-1 p-1"><?= $err['email'] ?></div>
                        <?php endif ?>
                        <input type="text" class="form-control" name="email" autocomplete="off" required value="">
                    </div>
                    <div class="mb-3">
                        <label class="form-label b500">Mật khẩu<b class="text-danger ml-1">*</b></label>
                        <?php if (isset($err['password'])) :  ?>
                            <div class="alert-danger rounded mb-1 p-1"><?= $err['password'] ?></div>
                        <?php endif ?>
                        <input type="password" class="form-control hide_arrow" name="password" autocomplete="off" required value="">
                    </div>
                    <p>Chưa có tài khoản? <a href="<?= base_url('dang-ky') ?>">Đăng kí ngay!</a></p>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="mb-3">
                        <p>Bạn cần phải đăng nhập trước khi mua hàng</p>
                    </div>
                </div>
            </div>

            <div class="fcartbox mb-0 pt-md-4 pt-lg-0 text-center">
                <button type="submit" class="btn cart_btnitem cart_btnitem-red">
                    <i class="fas fa-sign-in-alt"></i>
                    Đăng nhập
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