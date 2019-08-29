
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-2">
            <h1 class="h3 mb-0 text-gray-800">Semua riwayat</h1>
          </div>
          <div class="mb-2 d-flex">
            <p class="m-0 text-warning mr-2">* Pemasukan</p>
            <p class="m-0 text-danger">* Pengeluaran</p>
          </div>

          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <?php foreach($kategori as $key => $value) : ?>
            <li class="nav-item">
              <a href=""" class="nav-link text-success <?= ($key == 0) ? 'active' : '' ; ?>" data-toggle="tab" data-target="#<?= $value['nama_kategori'] ?>" role="tab" aria-selected="true"><?= $value['nama_kategori'] ?></a>
            </li>
            <?php endforeach; ?>
          </ul>
          <div class="tab-content mt-4" id="myTabContent">
            <?php foreach($kategori as $key => $value) : ?>
            <div class="tab-pane fade show <?= ($key == 0) ? 'active' : '' ; ?>" id="<?= $value['nama_kategori'] ?>" role="tabpanel">
              <?php

                $saldo = 0;
                $kategori = $value['id_kategori'];

                $master = $this->db->where('id_kategori', $kategori)->get('master')->result_array();
                // number_format($cart['subtotal'],0,',','.')
                foreach ($master as $key => $value) :

              ?>
              <div class="card shadow border-left-<?= ($value['pemasukan'] != 0) ? 'warning' : 'danger' ; ?> mb-2">
                <div class="card-header d-sm-flex align-items-center py-3">
                  <h6 class="m-0 font-weight-bold text-gray-500"><?= $value['tanggal']; echo ($value['status'] == 0) ? '' : ' (diubah)' ; ?></h6>
                  <h5 class="m-0 font-weight-bold ml-auto mr-2 text-<?= ($value['pemasukan'] != 0) ? 'warning' : 'danger' ; ?>"><?= ($value['pemasukan'] != 0) ? '+'.number_format($value['pemasukan'],0,',','.') : '-'.number_format($value['pengeluaran'],0,',','.') ; ?></h5>
                  <a href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v text-secondary"></i></a>
                  <div class="dropdown-menu dropdown-menu-right">
                    <h6 class="dropdown-header">Aksi</h6>
                    <a class="dropdown-item" href="<?= $value['id'] ?>">Ubah</a>
                    <a class="dropdown-item" href="#">Hapus</a>
                  </div>
                </div>
                <div class="card-body p-3">
                  <h5 class="m-0 font-weight-bold float-right text-success"><?php ($value['pemasukan'] != 0) ? $saldo += $value['pemasukan'] : $saldo -= $value['pengeluaran'] ; echo 'Rp.'.number_format($saldo,0,',','.').',-' ?></h5>
                  <h5 class="m-0 font-weight-bold text-<?= ($value['pemasukan'] != 0) ? 'warning' : 'danger' ; ?>"><?= ($value['pemasukan'] != 0) ? 'Pemasukan' : 'Pengeluaran' ; ?></h5>
                  <h5 class="m-0 font-weight-light text-secondary"><?= $value['keterangan'] ?></h5>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
          <?php endforeach; ?>
          </div>

        </div>
        <!-- /.container-fluid -->
