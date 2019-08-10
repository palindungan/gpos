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
            <li class="<?php if ($this->uri->segment(1) == "kontak_kami") {
                            echo 'active';
                        } ?>"><a href="<?= base_url() . 'kontak_kami' ?>">Contact</a></li>
            <li class=""><a href="<?= base_url() . 'backend' ?>">Link Backend</a></li>
            <li class=""><a href="<?= base_url() . 'user' ?>">Link User</a></li>
            <li class=""><a href="<?= base_url() . 'user' ?>">Register</a></li>
        </ul>
    </nav><!-- .main-nav -->

</div>
</header>