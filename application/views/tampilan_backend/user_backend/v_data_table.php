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

                    <!-- data table -->
                    <table id="data_table" class="table">
                        <thead>
                            <tr>
                                <th>Kode User</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th>No Hp</th>
                                <th>Email</th>
                                <th>Username</th>
                                <th>Tanggal Registrasi</th>
                                <th>Last Log In</th>
                                <th class="nosort">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($tbl_data as $d) {  ?>
                                <tr>
                                    <td><?= $d->id_user_b ?></td>
                                    <td><?= $d->nm_user_b ?></td>
                                    <td><?= $d->jenkel ?></td>

                                    <td><?= $d->almt_user_b ?></td>
                                    <td><?= $d->no_hp ?></td>
                                    <td><?= $d->email_user_b ?></td>

                                    <td><?= $d->username ?></td>
                                    <td><?= $d->tgl_regist ?></td>
                                    <td><?= $d->tgl_last_log_in ?></td>
                                    <td>
                                        <div class="table-actions">
                                            <a href="<?= site_url('backend/edit_user_backend/' . $d->id_user_b) ?>">Edit</a>
                                            <a onclick="return confirm('Ingin Menghapus Data?');" href="<?= site_url('backend/user_backend/hapus_aksi/' . $d->id_user_b) ?>" class="hapus">Hapus</a>
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