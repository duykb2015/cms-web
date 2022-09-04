<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<html lang="vi">

<head>

    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="anonymous">
    <link rel="alternate" hreflang="vi" href="https://minhtuanmobile.com/" />
    <link rel="icon" href="https://minhtuanmobile.com/assets/front/img/icon.ico" type="image/x-icon" />
    <title>Local</title>

    <!--CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/plugin/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>/assets/plugin/fontawesome/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>/assets/plugin/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>/assets/front/layout.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>/assets/front/layout-home.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>/assets/front/responsive.css" rel="stylesheet" type="text/css" />
    <script language="javascript">
        var site_url = '<?= base_url() ?>';
        var current_url = '<?= base_url() ?>';
        var is_checkfid = false;
    </script>
    <!-- GENERAL GOOGLE SEARCH META -->
    <script type="text/javascript" src="<?= base_url() ?>/assets/front/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>/assets/front/jquery-migrate-1.3.0.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>/assets/plugin/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>/assets/plugin/ScrollToFixed/jquery-scrolltofixed-min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>/assets/front/jquery.sticky.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>/assets/front/menu-mobile.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>/assets/plugin/OwlCarousel/owl.carousel.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>/assets/plugin/jquery-countdown/jquery.countdown.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>/assets/front/functions.js"></script>
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/app.css">
</head>

<body lang="vi" class="page-home  browser__firefox ">

    <?= $this->include('header') ?>

    <?= $this->renderSection('content') ?>

    <?= $this->include('footer') ?>

    <?= $this->include('mobile_menu') ?>
</body>

</html>