<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Jalur Pembayaran</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">

                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link <?php if ($this->uri->segment('2') == 'add_jalur_pembayaran') {
                                                    echo 'active';
                                                } ?>" href="<?php echo base_url(); ?>backend/add_jalur_pembayaran">Tambah Jalur</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($this->uri->segment('2') == 'v_jalur_pembayaran') {
                                                    echo 'active';
                                                } ?>" href="<?php echo base_url(); ?>backend/v_jalur_pembayaran">Data Tabel Jalur</a>
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

                        <?php echo form_open_multipart('backend/jalur_pembayaran/update_aksi'); ?>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="id_jalur">Kode Jalur</label>
                                    <input type="text" class="form-control" id="id_jalur" name="id_jalur" readonly="" value="<?php echo $d2->id_jalur ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nm_jalur">Nama Jalur</label>
                                    <input type="text" class="form-control" id="nm_jalur" name="nm_jalur" placeholder="Nama Jalur" required="" oninvalid="this.setCustomValidity('isi Nama Jalur')" oninput="setCustomValidity('')" value="<?php echo $d2->nm_jalur ?>">
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                        <a href="<?= base_url() . 'backend/v_jalur_pembayaran' ?>" class="btn btn-danger">Kembali</a>

                        </form>

                    <?php
                    } ?>

                </div>
            </div>
        </div>

    </div>
</div>