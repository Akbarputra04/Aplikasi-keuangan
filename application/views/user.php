
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-0">
        <h1 class="h3 mb-0 text-gray-800">User</h1>
        </div>

            <!-- DataTales Example -->
        <div class="card shadow mb-4 mt-4">
            <div class="card-header d-sm-flex align-items-center justify-content-between py-3">
                <h6 class="m-0 font-weight-bold text-success">Data user</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Username</th>
                                <th>Level</th>
                                <th><a href="#newuser" data-toggle="modal" class="btn btn-primary btn-sm" title="kategori baru"><i class="fa fa-plus mr-2"></i>User baru</a></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($user as $key => $value) : ?>
                            <tr>
                                <td><?= $key+1 ?></td>
                                <td><?= $value['username'] ?></td>
                                <td>
                                <?php
                                    if ($value['id_level'] == '0') {
                                        echo 'Admin';
                                    } elseif ($value['id_level'] == '1') {
                                        echo 'Bendahara';
                                    } else {
                                        echo 'Takmir';
                                    } 
                                ?></td>
                                <td>
                                <a href="#reset" data-toggle="modal" data-id="<?= $value['id'] ?>" class="btn btn-secondary btn-sm resetpassword" title="reset password"><i class="fa fa-redo fa-flip-horizontal"></i></a>
                                <a href="#ubah" data-toggle="modal" data-id="<?= $value['id'] ?>" class="btn btn-warning btn-sm ubahuser" title="Ubah user"><i class="fa fa-edit"></i></a>
                                <a href="#hapus" data-toggle="modal" data-id="<?= $value['id'] ?>" class="btn btn-danger btn-sm hapususer" title="Hapus user"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Username</th>
                                <th>Level</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        

    </div>
    <!-- /.container-fluid -->
