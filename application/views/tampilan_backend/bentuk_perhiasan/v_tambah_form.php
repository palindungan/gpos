<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Bentuk Perhiasan</h1>
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
                            <a class="nav-link <?php if ($this->uri->segment('2') == 'add_bentuk_perhiasan') {
                                                    echo 'active';
                                                } ?>" href="<?php echo base_url(); ?>backend/add_bentuk_perhiasan">Tambah Data</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($this->uri->segment('2') == 'v_bentuk_perhiasan') {
                                                    echo 'active';
                                                } ?>" href="<?php echo base_url(); ?>backend/v_bentuk_perhiasan">Daftar Bentuk</a>
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

                    <?php echo form_open_multipart('backend/bentuk_perhiasan/tambah_aksi'); ?>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="id_user_b">ID Backend</label>
                                <input type="text" class="form-control" id="id_user_b" name="id_user_b" placeholder="ID USER" required="" oninvalid="this.setCustomValidity('Isi Nama Paket')" oninput="setCustomValidity('')" value="UB01" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nm_bentuk">Nama Bentuk</label>
                                <input type="text" class="form-control" id="nm_bentuk" name="nm_bentuk" placeholder="Bentuk Perhiasan" required="" oninvalid="this.setCustomValidity('Isi Bentuk Perhiasan')" oninput="setCustomValidity('')">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                    <a href="<?= base_url() . 'backend/v_bentuk_perhiasan' ?>" class="btn btn-danger">Kembali</a>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>