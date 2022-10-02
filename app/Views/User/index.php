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
                    <a href="<?= base_url('tai-khoan') ?>" title="Tài khoản của bạn">
                        Tài Khoản
                    </a>
                </li>
            </ol>
        </div>
    </div>
    <div class="container wrapper-container pt-0 pt-lg-0">
        <form method="post" action="<?= base_url('tai-khoan/sua') ?>" class="hpro__bestseller home-boxproduct cart__container fcart__container">
            <h1 class="hboxproduct__title color-hover">Thông tin tài khoản <a href="<?= base_url('dang-xuat') ?>" class="float-end"><i class="fa fa-sign-out-alt"></i> Đăng xuất</a></h1>

            <div class="fcartbox row">
                <div class="col-12 col-lg-12">
                    <p>Xem thông tin giao dịch bên dưới</p>
                    <input type="hidden" name="id" value="<?= $user->id ?>">
                    <?php if (cache('error')) :  ?>
                        <div class="alert-danger rounded mb-1 p-1"><?= cache('error') ?></div>
                    <?php endif ?>
                    <div class=" mb-3">
                        <label class="form-label b500">Email</label>
                        <input type="email" class="form-control" disabled value="<?= $user->email ?>">
                    </div>
                    <div class=" mb-3">
                        <label class="form-label b500">Mật khẩu cũ</label>
                        <input type="password" name="old_password" class="form-control">

                    </div>
                    <div class=" mb-3">
                        <label class="form-label b500">Mật khẩu mới</label>
                        <input type="password" name="new_password" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label b500">Họ & Tên</label>
                        <input type="text" class="form-control" name="name" value="<?= $user->name ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label b500">Điện thoại</label>
                        <input type="tel" class="form-control hide_arrow" name="phone" value="<?= $user->phone ?>" maxlength="10">
                    </div>
                    <div class="mb-3">
                        <label class="form-label b500">Địa chỉ</label>
                        <input type="tel" class="form-control hide_arrow" name="address" value="<?= $user->address ?>">
                    </div>
                </div>
            </div>
            <div class="fcartbox pb-3 mb-0 pt-md-3 pt-lg-0 text-center">
                <button type="submit" class="btn cart_btnitem cart_btnitem-red pb-0">
                    <i class="fa fa-edit"></i>
                    Lưu
                </button>
            </div>
        </form>
    </div>

    <div class="container wrapper-container pt-0 pt-lg-0">
        <form class="hpro__bestseller home-boxproduct cart__container fcart__container">
            <h1 class="hboxproduct__title color-hover">Thông tin giao dịch</h1>
            <div class="fcartbox row">
                <div class="col-12 col-lg-6">
                    <p class="tg_itemlabel">Đơn hàng</p>
                    <div class=" mb-3">
                        <label class="form-label b500">Email</label>
                        <input type="email" class="form-control" disabled value="">
                    </div>
                    <div class=" mb-3">
                        <label class="form-label b500">Mật khẩu</label>
                        <input type="password" name="password" class="form-control" value="">
                    </div>
                    <div class="mb-3">
                        <label class="form-label b500">Họ & Tên</label>
                        <input type="text" class="form-control" name="name" value="">
                    </div>
                    <div class="mb-3">
                        <label class="form-label b500">Điện thoại</label>
                        <input type="tel" class="form-control hide_arrow" name="phone" value="" maxlength="10">
                    </div>
                    <div class="mb-3">
                        <label class="form-label b500">Địa chỉ</label>
                        <input type="tel" class="form-control hide_arrow" name="address" value="">
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <p class="tg_itemlabel">Đơn hàng đã hoàn thành</p>
                    <div class=" mb-3">
                        <label class="form-label b500">Email</label>
                        <input type="email" class="form-control" disabled value="">
                    </div>
                    <div class=" mb-3">
                        <label class="form-label b500">Mật khẩu</label>
                        <input type="password" name="password" class="form-control" value="">
                    </div>
                    <div class="mb-3">
                        <label class="form-label b500">Họ & Tên</label>
                        <input type="text" class="form-control" name="name" value="">
                    </div>
                    <div class="mb-3">
                        <label class="form-label b500">Điện thoại</label>
                        <input type="tel" class="form-control hide_arrow" name="phone" value="" maxlength="10">
                    </div>
                    <div class="mb-3">
                        <label class="form-label b500">Địa chỉ</label>
                        <input type="tel" class="form-control hide_arrow" name="address" value="">
                    </div>
                </div>
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