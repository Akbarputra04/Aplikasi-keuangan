
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-0">
        <h1 class="h3 mb-0 text-gray-800">Kategori</h1>
        </div>

            <!-- DataTales Example -->
        <div class="card shadow mb-4 mt-4">
            <div class="card-header d-sm-flex align-items-center justify-content-between py-3">
                <h6 class="m-0 font-weight-bold text-success">Data kategori</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($kategori as $key => $value) : ?>
                            <tr>
                                <td><?= $key+1 ?></td>
                                <td><?= $value['nama_kategori'] ?></td>
                                <td>
                                <a href="#ubah" data-toggle="modal" data-id="<?= $value['id_kategori'] ?>" class="btn btn-warning btn-sm ubahkategori" title="Ubah"><i class="fa fa-edit"></i></a>
                                <a href="#hapus" data-toggle="modal" data-id="<?= $value['id_kategori'] ?>" class="btn btn-danger btn-sm hapuskategori" title="Hapus"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        

    </div>
    <!-- /.container-fluid -->
