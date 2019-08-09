<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Daftar User</h1>
    </div>

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link <?php if ($this->uri->segment('2') == 'add_user_backend') {
                                                    echo 'active';
                                                } ?>" href="<?php echo base_url(); ?>backend/add_user_backend">Tambah Data</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($this->uri->segment('2') == 'v_user_backend') {
                                                    echo 'active';
                                                } ?>" href="<?php echo base_url(); ?>backend/v_user_backend">Daftar User</a>
                        </li>
                    </ul>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Dropdown Header:</div>
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <!-- disini isinya konten -->

                    <?php foreach ($tbl_data as $d2) { ?>

                        <?php echo form_open_multipart('backend/user_backend/update_aksi'); ?>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="id_user_b">Kode User</label>
                                    <input type="text" class="form-control" id="id_user_b" name="id_user_b" placeholder="Nama User" readonly="" value="<?php echo $d2->id_user_b ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nm_user_b">Nama User</label>
                                    <input type="text" class="form-control" id="nm_user_b" name="nm_user_b" placeholder="Nama User" required="" oninvalid="this.setCustomValidity('Isi Nama User')" oninput="setCustomValidity('')" value="<?php echo $d2->nm_user_b ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="jenkel">Jenis Kelamin</label>
                                    <select class="form-control" id="jenkel" name="jenkel" required="" oninvalid="this.setCustomValidity('Pilih Jenis Kelamin')" oninput="setCustomValidity('')">
                                        <option value="">-</option>
                                        <option value="pria" <?php if ($d2->jenkel == "pria") {
                                                                    echo "selected";
                                                                } ?>>Pria</option>
                                        <option value="wanita" <?php if ($d2->jenkel == "wanita") {
                                                                    echo "selected";
                                                                } ?>>Wanita</option>
                                    </select>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="no_hp">No Hp</label>
                                    <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="No Hp" required="" oninvalid="this.setCustomValidity('Isi No Hp')" oninput="setCustomValidity('')" value="<?php echo $d2->no_hp ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email_user_b">Email</label>
                                    <input type="email" class="form-control" id="email_user_b" name="email_user_b" placeholder="Email" required="" oninvalid="this.setCustomValidity('Isi Alamat Email')" oninput="setCustomValidity('')" value="<?php echo $d2->email_user_b ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" id="username" name="username" placeholder="Username" required="" oninvalid="this.setCustomValidity('Isi Username')" oninput="setCustomValidity('')" value="<?php echo $d2->username ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required="" oninvalid="this.setCustomValidity('Isi Password')" oninput="setCustomValidity('')">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="k_password">Konfirmasi Password</label>
                                    <input type="password" class="form-control" id="k_password" name="k_password" placeholder="Konfirmasi Password" required="" oninvalid="this.setCustomValidity('Isi Konfirmasi Password')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="almt_user_b">Alamat</label>
                                    <textarea class="form-control" id="almt_user_b" rows="3" name="almt_user_b" required="" oninvalid="this.setCustomValidity('Isi Alamat')" oninput="setCustomValidity('')"> <?php echo $d2->almt_user_b ?> </textarea>
                                </div>
                            </div>

                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Update</button>
                        <a href="<?= base_url() . 'backend/v_user_backend' ?>" class="btn btn-danger">Kembali</a>

                        </form>

                    <?php
                    } ?>

                </div>
            </div>
        </div>

    </div>
</div>