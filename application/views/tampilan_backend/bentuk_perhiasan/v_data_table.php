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

                    <!-- data table -->
                    <table id="data_table" class="table">
                        <thead>
                            <tr>
                                <th>Kode Bentuk</th>
                                <th>ID User</th>
                                <th>Nama Bentuk</th>
                                <th>Diperbarui Pada</th>
                                <th>Aksi</th>
                                <th class="nosort">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($bentuk_perhiasan as $d) {  ?>
                                <tr>
                                    <td><?= $d->id_bentuk ?></td>
                                    <td><?= $d->id_user_b ?></td>
                                    <td><?= $d->nm_bentuk ?></td>
                                    <td><?= $d->tgl_input ?></td>
                                    <td>
                                        <div class="table-actions">
                                            <a href="<?= site_url('backend/edit_bentuk_perhiasan/' . $d->id_bentuk) ?>">Edit</a>
                                            <a onclick="return confirm('Ingin Menghapus Data?');" href="<?= site_url('backend/bentuk_perhiasan/hapus_aksi/' . $d->id_bentuk) ?>" class="hapus">Hapus</a>
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