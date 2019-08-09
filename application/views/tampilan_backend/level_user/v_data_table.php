<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Level User</h1>
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

                    <!-- data table -->
                    <table id="data_table" class="table">
                        <thead>
                            <tr>
                                <th>Kode Level</th>
                                <th>Nama Level</th>
                                <th>Jumlah Max</th>
                                <th>Aksi</th>
                                <th class="nosort">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($level_user as $d) {  ?>
                                <tr>
                                    <td><?= $d->id_level ?></td>
                                    <td><?= $d->nm_level ?></td>
                                    <td><?= $d->jml_max ?></td>
                                    <td>
                                        <div class="table-actions">
                                            <a href="<?= site_url('backend/edit_level_user/' . $d->id_level) ?>">Edit</a>
                                            <a onclick="return confirm('Ingin Menghapus Data?');" href="<?= site_url('backend/level_user/hapus_aksi/' . $d->id_level) ?>" class="hapus">Hapus</a>
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