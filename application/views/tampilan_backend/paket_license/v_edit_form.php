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
                            <a class="nav-link <?php if ($this->uri->segment('3') == 'tambah_jalur_pembayaran') {
                                                    echo 'active';
                                                } ?>" href="<?php echo base_url(); ?>backend/jalur_pembayaran/tambah_jalur_pembayaran">Tambah Jalur</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($this->uri->segment('3') == 'data_tabel_jalur_pembayaran') {
                                                    echo 'active';
                                                } ?>" href="<?php echo base_url(); ?>backend/jalur_pembayaran/data_tabel_jalur_pembayaran">Data Tabel Jalur</a>
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
                                    <input type="text" class="form-control" id="nm_paketr" name="nm_paket" placeholder="Nama Paket" required="" oninvalid="this.setCustomValidity('Isi Nama Paket')" oninput="setCustomValidity('')" value="<?= $d2->nm_paket ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="hrg_paket">Harga Paket</label>
                                    <input type="text" class="form-control" id="hrg_paket" name="hrg_paket" placeholder="Harga Paket" required="" oninvalid="this.setCustomValidity('Isi Harga Paket')" oninput="setCustomValidity('')" value="<?= $d2->hrg_paket ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="jml_hari">Jumlah Hari License</label>
                                    <input type="text" class="form-control" id="jml_hari" name="jml_hari" placeholder="Jumlah Hari License" required="" oninvalid="this.setCustomValidity('Isi Jumlah Hari License')" oninput="setCustomValidity('')" value="<?= $d2->jml_hari_license ?>">
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                        <button type="button" class="btn btn-light" data-dismiss="modal">Kembali</button>

                        </form>

                    <?php
                    } ?>

                </div>
            </div>
        </div>

    </div>
</div>