<?php
if ($this->uri->segment('1') == 'home') {
    echo '<header id="header">';
} else {
    echo '<header id="header2">';
}
?>

<div class="container">

    <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <h1 class="text-light"><a href="#" class="scrollto"><span>GPOS</span></a></h1>
        <!-- <a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> -->
    </div>

    <nav class="main-nav float-right d-none d-lg-block">
        <ul>
            <li class="<?php if ($this->uri->segment(1) == "home") {
                            echo 'active';
                        } ?>"><a href="<?= base_url() . 'home' ?>">Home</a></li>
            <li class="<?php if ($this->uri->segment(1) == "kasir") {
                            echo 'active';
                        } ?>"><a href="<?= base_url() . 'kasir' ?>">Kasir</a></li>
            <li class="<?php if ($this->uri->segment(1) == "transaksi") {
                            echo 'active';
                        } ?>"><a href="<?= base_url() . 'transaksi' ?>">Data Transaksi</a></li>
            <li class="<?php if ($this->uri->segment(1) == "kontak_kami") {
                            echo 'active';
                        } ?>"><a href="<?= base_url() . 'kontak_kami' ?>">Kontak Kami</a></li>
            <li class=""><a href="<?= base_url() . 'admin/home' ?>">Link Backend</a></li>
        </ul>
    </nav><!-- .main-nav -->

</div>
</header>