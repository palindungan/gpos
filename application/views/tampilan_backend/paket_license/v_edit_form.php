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
                            <a class="nav-link <?php if ($this->uri->segment('2') == 'add_paket_license') {
                                                    echo 'active';
                                                } ?>" href="<?php echo base_url(); ?>backend/add_paket_license">Tambah Data</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($this->uri->segment('2') == 'v_paket_license') {
                                                    echo 'active';
                                                } ?>" href="<?php echo base_url(); ?>backend/v_paket_license">Daftar Paket</a>
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

                        <?php echo form_open_multipart('backend/paket_license/update_aksi'); ?>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="id_paket">Kode Paket</label>
                                    <input type="text" class="form-control" id="id_paket" name="id_paket" readonly="" value="<?php echo $d2->id_paket ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nm_paketr">Nama Paket</label>
                                    <input type="text" class="form-control <?php if(form_error('nm_paket')== true) { echo "is-invalid";} ?>" id="nm_paketr" name="nm_paket" placeholder="Nama Paket" oninvalid="this.setCustomValidity('Isi Nama Paket')" oninput="setCustomValidity('')" value="<?= set_value('nm_paket', $d2->nm_paket); ?>">
                                    <div class="invalid-feedback">
                                        <?php echo form_error('nm_paket'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="hrg_paket">Harga Paket</label>
                                    <input type="text" class="form-control <?php if(form_error('hrg_paket')== true) { echo "is-invalid";} ?>" id="hrg_paket" name="hrg_paket" placeholder="Harga Paket" oninvalid="this.setCustomValidity('Isi Harga Paket')" oninput="setCustomValidity('')" value="<?= set_value('hrg_paket', $d2->hrg_paket); ?>">
                                    <div class="invalid-feedback">
                                        <?php echo form_error('hrg_paket'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="jml_hari">Jumlah Hari License</label>
                                    <input type="text" class="form-control <?php if(form_error('jml_hari')== true) { echo "is-invalid";} ?>" id="jml_hari" name="jml_hari" placeholder="Jumlah Hari License" oninvalid="this.setCustomValidity('Isi Jumlah Hari License')" oninput="setCustomValidity('')" value="<?= set_value('jml_hari', $d2->jml_hari_license); ?>">
                                    <div class="invalid-feedback">
                                        <?php echo form_error('jml_hari'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                        <a href="<?= base_url() . 'backend/v_paket_license' ?>" class="btn btn-danger">Kembali</a>

                        </form>

                    <?php
                    } ?>

                </div>
            </div>
        </div>

    </div>
</div>