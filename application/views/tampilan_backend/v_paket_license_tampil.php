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
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID Paket</th>
                                    <th>Nama Paket</th>
                                    <th>Harga Paket</th>
                                    <th>Jumlah Hari</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($paket_license as $item) {
                                    ?>
                                    <tr>
                                        <td><?= $item->id_paket ?></td>
                                        <td><?= $item->nm_paket ?></td>
                                        <td><?= $item->hrg_paket ?></td>
                                        <td><?= $item->jml_hari_license ?></td>
                                        <td>
                                            <a href="" class="btn btn-primary">edit</a>
                                            <a href="" class="btn btn-danger">hapus</a>
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
</div>