<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Head -->
    <?php $this->load->view("_partials_frontend_wizard/head.php") ?>
    <!-- End of Head -->
</head>

<body>
    <!-- partial:index.partial.html -->
    <form method="POST" action="">
        <div class="container">
            <br>
            <div id="app">
                <step-navigation :steps="steps" :currentstep="currentstep">
                </step-navigation>

                <div v-show="currentstep == 1">
                    <h3>Daftarkan Toko Emas Anda</h3>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="nm_toko">Nama Toko Emas</label>
                                <input type="text" class="form-control" id="nm_toko" name="nm_toko" required="" oninvalid="this.setCustomValidity('Isi Nama Toko Emas')" oninput="setCustomValidity('')">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="almt_toko">Alamat Toko Emas</label>
                                <textarea class="form-control" id="almt_toko" rows="3" name="almt_toko" required="" oninvalid="this.setCustomValidity('Isi Alamat')" oninput="setCustomValidity('')"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div v-show="currentstep == 2">
                    <h3>Daftarkan Admin Toko</h3>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nm_user">Nama</label>
                                <input type="text" class="form-control" id="nm_user" name="nm_user" placeholder="Nama" required="" oninvalid="this.setCustomValidity('Isi Nama')" oninput="setCustomValidity('')">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="jenkel">Jenis Kelamin</label>
                                <select class="form-control" id="jenkel" name="jenkel" required="" oninvalid="this.setCustomValidity('Pilih Jenis Kelamin')" oninput="setCustomValidity('')">
                                    <option value="">-</option>
                                    <option value="pria">Pria</option>
                                    <option value="wanita">Wanita</option>
                                </select>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="no_hp">No Hp</label>
                                <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="No Hp" required="" oninvalid="this.setCustomValidity('Isi No Hp')" oninput="setCustomValidity('')">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email_user">Email</label>
                                <input type="email" class="form-control" id="email_user" name="email_user" placeholder="Email" required="" oninvalid="this.setCustomValidity('Isi Alamat Email')" oninput="setCustomValidity('')">
                            </div>
                        </div>
                    </div>
                </div>

                <div v-show="currentstep == 3">
                    <h3>Username Dan Password</h3>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Username" required="" oninvalid="this.setCustomValidity('Isi Username')" oninput="setCustomValidity('')">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required="" oninvalid="this.setCustomValidity('Isi Password')" oninput="setCustomValidity('')">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="k_password">Konfirmasi Password</label>
                                <input type="password" class="form-control" id="k_password" name="k_password" placeholder="Konfirmasi Password" required="" oninvalid="this.setCustomValidity('Isi Konfirmasi Password')" oninput="setCustomValidity('')">
                            </div>
                        </div>
                    </div>
                </div>

                <step v-for="step in steps" :currentstep="currentstep" :key="step.id" :step="step" :stepcount="steps.length" @step-change="stepChanged">
                </step>

                <script type="x-template" id="step-navigation-template">
                    <ol class="step-indicator">
                <li v-for="step in steps" is="step-navigation-step" :key="step.id" :step="step" :currentstep="currentstep">
                </li>
            </ol>
        </script>

                <script type="x-template" id="step-navigation-step-template">
                    <li :class="indicatorclass">
                <div class="step"><i :class="step.icon_class"></i></div>
                <div class="caption hidden-xs hidden-sm">Step <span v-text="step.id"></span>: <span v-text="step.title"></span></div>
            </li>
        </script>

                <script type="x-template" id="step-template">
                    <div class="step-wrapper" :class="stepWrapperClass">
                <button type="button" class="btn btn-primary" @click="lastStep" :disabled="firststep">
                    Back
                </button>
                <button type="button" class="btn btn-primary" @click="nextStep" :disabled="laststep">
                    Next
                </button>
                <button type="submit" class="btn btn-primary" v-if="laststep">
                    Submit
                </button>
            </div>
        </script>
            </div>
        </div>
    </form>

    <!-- JavaScript Libraries -->
    <?php $this->load->view("_partials_frontend_wizard/javascript.php") ?>
    <!-- End of JavaScript Libraries -->

</body>

</html>