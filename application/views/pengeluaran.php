
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-0">
            <h1 class="h3 mb-0 text-gray-800">Pengeluaran</h1>
          </div>

          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <?php foreach ($kategori as $key => $value) : ?>
            <li class="nav-item">
              <a href="" class="nav-link text-success <?= ($key == 0) ? 'active' : '' ; ?>" id="<?= $value['nama_kategori'] ?>-tab" data-toggle="tab" data-target="#<?= $value['nama_kategori'] ?>" role="tab" aria-selected="true"><?= $value['nama_kategori'] ?></a>
            </li>
            <?php endforeach; ?>
          </ul>

          <div class="tab-content mt-4" id="myTabContent">
          <?php foreach ($kategori as $key => $value) : ?>
            <div class="tab-pane fade show <?= ($key == 0) ? 'active' : '' ; ?>" id="<?= $value['nama_kategori'] ?>" role="tabpanel">
              <!-- DataTales Example -->
              <div class="card shadow mb-4 mt-4">
                <div class="card-header d-sm-flex align-items-center justify-content-between py-3">
                  <h6 class="m-0 font-weight-bold text-success">Data pengeluaran <?= $value['nama_kategori'] ?></h6>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Tanggal</th>
                          <th>Keterangan</th>
                          <th>Pengeluaran</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php

                          $pengeluaran = 0;
                          $kategori = $value['id_kategori'];

                          $pemasukan = $this->db->where('pengeluaran !=', 0)->where('id_kategori', $kategori)->get('master')->result_array();
                          
                          foreach ($pemasukan as $key => $value) :
                            $pengeluaran += $value['pengeluaran'];

                        ?>
                        <tr>
                          <td><?= $key+1 ?></td>
                          <td><?= $value['nama']; echo ($value['status'] == 0) ? '' : ' (diubah)' ; ?></td>
                          <td><?= $value['tanggal'] ?></td>
                          <td><?= $value['keterangan'] ?></td>
                          <td><?= $value['pengeluaran'] ?></td>
                          <td>
                            <a href="" class="btn btn-warning btn-sm" title="Ubah"><i class="fa fa-edit"></i></a>
                            <a href="" class="btn btn-danger btn-sm" title="Hapus"><i class="fa fa-trash"></i></a>
                          </td>
                        </tr>
                        <?php endforeach; ?>
                      </tbody>
                      <tfoot>
                            <tr>
                              <th colspan="4" class="text-right">TOTAL PENGELUARAN</th>
                              <th colspan="2"><?= number_format($pengeluaran,0,',','.') ?></th>
                            </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
            

        </div>
        <!-- /.container-fluid -->
