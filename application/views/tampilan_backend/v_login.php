<!DOCTYPE html>
<html lang="en">

<head>

    <!-- head -->
    <?php $this->load->view("_partials_backend/head.php") ?>
    <!-- end head -->

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-6 col-lg-6 col-md-6">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome User !</h1>
                                    </div>
                                    <form action="<?php echo base_url('login/login/aksi_login'); ?>" method="post">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username" required="" oninvalid="this.setCustomValidity('isi Username')" oninput="setCustomValidity('')">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password" required="" oninvalid="this.setCustomValidity('isi Password')" oninput="setCustomValidity('')">
                                        </div>
                                        <div class="sign-btn text-center">
                                            <button class="btn btn-primary btn-user btn-block">Masuk</button>
                                        </div>
                                        <hr>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <?php $this->load->view("_partials_backend/javascript.php") ?>

</body>

</html>