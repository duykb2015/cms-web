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


        <section class="hpro__bestseller home-boxproduct cart__container">

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

        </section>
    </div>
</div>

<script>
    $(document).ready(function(e) {

        $('form').on('submit', function() {
            var _button = $(this).find('button[type=submit]');
            _button.attr('disabled', 'disabled');
            //setTimeout(function(){ _button.removeAttr( 'disabled') }, 5000);//
            //return true;

        });

    });
</script>
<?= $this->endSection() ?>