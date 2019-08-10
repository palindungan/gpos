<!DOCTYPE html>
<html>

<head>
    <!-- header -->
    <?php $this->load->view("_partials_frontend_wizard/head.php") ?>
    <!-- end header -->
</head>

<body>
    <div class="wrapper">
        <form action="" id="wizard">
            <!-- SECTION 1 -->
            <h2></h2>
            <section>
                <div class="inner">
                    <div class="image-holder">
                        <img src="<?= base_url() ?>assets/template_frontend_wizard/images/form-wizard-1.jpg" alt="">
                    </div>
                    <div class="form-content">
                        <div class="form-header">
                            <h3>Resgistrasi Account</h3>
                        </div>
                        <p>Daftarkan toko emas anda</p>
                        <div class="form-row">
                            <div class="form-holder w-100">
                                <input type="text" id="nm_toko" name="nm_toko" placeholder="Nama Toko" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-holder w-100">
                                <input type="text" id="almt_toko" name="almt_toko" placeholder="Alamat Toko" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- SECTION 2 -->
            <h2></h2>
            <section>
                <div class="inner">
                    <div class="image-holder">
                        <img src="<?= base_url() ?>assets/template_frontend_wizard/images/form-wizard-2.jpg" alt="">
                    </div>
                    <div class="form-content">
                        <div class="form-header">
                            <h3>Resgistrasi Account</h3>
                        </div>
                        <p>Isi data pribadi admin toko</p>

                        <div class="form-row">
                            <div class="form-holder">
                                <input type="text" id="nm_user" name="nm_user" placeholder="Nama User" class="form-control">
                            </div>
                            <div class="select" id="jenkel" name="jenkel">
                                <div class="form-holder">
                                    <div class="select-control">Jenis Kelamin</div>
                                    <i class="zmdi zmdi-caret-down"></i>
                                </div>
                                <ul class="dropdown">
                                    <li rel="">-</li>
                                    <li rel="pria">Pria</li>
                                    <li rel="wanita">Wanita</li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-holder">
                                <input type="text" id="no_hp" name="no_hp" placeholder="No Hp" class="form-control">
                            </div>
                            <div class="form-holder">
                                <input type="email" id="email_user" name="email_user" placeholder="Email" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- SECTION 3 -->
            <h2></h2>
            <section>
                <div class="inner">
                    <div class="image-holder">
                        <img src="<?= base_url() ?>assets/template_frontend_wizard/images/form-wizard-3.jpg" alt="">
                    </div>
                    <div class="form-content">
                        <div class="form-header">
                            <h3>Resgistrasi Account</h3>
                        </div>
                        <p>Isi data pribadi admin toko</p>
                        <div class="form-row">
                            <div class="form-holder w-100">
                                <input type="text" id="username" name="username" placeholder="Username" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-holder w-100">
                                <input type="password" id="password" name="password" placeholder="Password" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-holder w-100">
                                <input type="password" id="k_password" name="k_password" placeholder="Konfirmasi Password" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </form>
    </div>

    <!-- javascript -->
    <?php $this->load->view("_partials_frontend_wizard/javascript.php") ?>
</body>

</html>