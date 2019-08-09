<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Jalur Pembayaran</h1>
    </div>

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">

                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link <?php if ($this->uri->segment('2') == 'add_level_user') {
                                                    echo 'active';
                                                } ?>" href="<?php echo base_url(); ?>backend/add_level_user">Tambah Data</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($this->uri->segment('2') == 'v_level_user') {
                                                    echo 'active';
                                                } ?>" href="<?php echo base_url(); ?>backend/v_level_user">Daftar Level</a>
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

                    <!-- disini isinya konten -->
                    <?php foreach ($tbl_data as $d2) { ?>

                        <?php echo form_open_multipart('backend/level_user/update_aksi'); ?>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="id_level">ID Level</label>
                                    <input type="text" class="form-control" id="id_level" name="id_level" placeholder="ID Level" required="" oninvalid="this.setCustomValidity('Isi ID Level')" oninput="setCustomValidity('')" readonly value="<?= $d2->id_level ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nm_level">Nama Level</label>
                                    <input type="text" class="form-control" id="nm_level" name="nm_level" placeholder="Nama Level" required="" oninvalid="this.setCustomValidity('Isi Nama Level')" oninput="setCustomValidity('')" value="<?= $d2->nm_level ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="jml_max">Jumlah Max</label>
                                    <input type="text" class="form-control" id="jml_max" name="jml_max" placeholder="Jumlah Max" required="" oninvalid="this.setCustomValidity('Isi Jumlah Max')" oninput="setCustomValidity('')" value="<?= $d2->jml_max ?>">
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                        <a href="<?= base_url() . 'backend/v_level_user' ?>" class="btn btn-danger">Kembali</a>

                        </form>

                    <?php
                    } ?>

                </div>
            </div>
        </div>

    </div>
</div>