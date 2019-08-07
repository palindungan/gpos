<!doctype html>
<html class="no-js" lang="">

<head>
    <?php $this->load->view("_partials_user/head.php") ?>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Start Header Top Area -->
    <?php $this->load->view("_partials_user/header.php") ?>
    <!-- End Header Top Area -->

    <!-- NAVBAR MOBILE start -->
    <?php $this->load->view("_partials_user/navbar_mobile.php") ?>
    <!-- Mobile Menu end -->

    <!-- NAVBAR DESKTOP area start-->
    <?php $this->load->view("_partials_user/navbar_desktop.php") ?>

    <!-- CONTENT -->
    <?php echo $contents; ?>
    <!-- End Content-->

    <!-- Start Footer area-->
    <?php $this->load->view("_partials_user/footer.php") ?>
    <!-- End Footer area-->
    <!-- jquery
		============================================ -->
    <?php $this->load->view("_partials_user/javascript.php") ?>

</body>

</html>