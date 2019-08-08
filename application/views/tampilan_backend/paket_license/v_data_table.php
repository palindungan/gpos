<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Paket License</h1>
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
                            <a class="nav-link <?php if ($this->uri->segment('3') == 'tambah_paket_license') {
                                                    echo 'active';
                                                } ?>" href="<?php echo base_url(); ?>backend/paket_license/tambah_paket_license">Tambah Data</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($this->uri->segment('3') == 'data_tabel_paket_license') {
                                                    echo 'active';
                                                } ?>" href="<?php echo base_url(); ?>backend/paket_license/data_tabel_paket_license">Daftar Paket</a>
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

                    <!-- data table -->
                    <table id="data_table" class="table">
                        <thead>
                            <tr>
                                <th>Kode Paket</th>
                                <th>Nama Paket</th>
                                <th>Harga Paket</th>
                                <th>Jumlah Hari</th>
                                <th>Aksi</th>
                                <th class="nosort">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($paket_license as $d) {  ?>
                                <tr>
                                    <td><?= $d->id_paket ?></td>
                                    <td><?= $d->nm_paket ?></td>
                                    <td><?= $d->hrg_paket ?></td>
                                    <td><?= $d->jml_hari_license ?></td>
                                    <td>
                                        <div class="table-actions">
                                            <a href="<?= site_url('backend/paket_license/edit_paket_license/' . $d->id_paket) ?>">Edit</a>
                                            <a onclick="return confirm('Ingin Menghapus Data?');" href="<?= site_url('backend/paket_license/hapus_aksi/' . $d->id_paket) ?>" class="hapus">Hapus</a>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

    </div>
</div>