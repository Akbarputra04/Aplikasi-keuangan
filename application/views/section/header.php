
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Uangku | <?= $title ?></title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url('assets/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url('assets/') ?>css/sb-admin-2.min.css" rel="stylesheet">
  
  <!-- Custom styles for this page -->
  <link href="<?= base_url('assets/') ?>vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin') ?>">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-money-bill-wave"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Uangku</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item <?php if($this->uri->segment('2') == '') echo 'active' ?>">
        <a class="nav-link" href="<?= base_url('admin') ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Beranda</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Menu
      </div>

      <li class="nav-item">
        <a class="nav-link" href="" data-toggle="modal" data-target="#modaltambah">
          <i class="fas fa-fw fa-plus"></i>
          <span>Entri data</span>
        </a>
      </li>

      <li class="nav-item <?php if($this->uri->segment('2') == 'semua') echo 'active' ?>">
        <a class="nav-link" href="<?= base_url('admin/semua') ?>">
          <i class="fas fa-fw fa-history"></i>
          <span>Riwayat</span>
        </a>
      </li>
      
      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item <?php if($this->uri->segment('2') == 'pemasukan' OR $this->uri->segment('2') == 'pengeluaran') echo 'active' ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#masterdata" aria-expanded="true" aria-controls="collapseriwayat">
          <i class="fas fa-fw fa-folder"></i>
          <span>Master data</span>
        </a>
        <div id="masterdata" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?= base_url('admin/pemasukan') ?>">Pemasukan</a>
            <a class="collapse-item" href="<?= base_url('admin/pengeluaran') ?>">Pengeluaran</a>
            <a class="collapse-item" href="<?= base_url('admin/kategori') ?>">Kategori</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapselaporan" aria-expanded="true" aria-controls="collapselaporan">
          <i class="fas fa-fw fa-history"></i>
          <span>Laporan</span>
        </a>
        <div id="collapselaporan" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?= base_url('admin/laporansemua') ?>">Semua</a>
            <a class="collapse-item" href="<?= base_url('admin/laporanpemasukan') ?>">Pemasukan</a>
            <a class="collapse-item" href="<?= base_url('admin/laporanpengeluaran') ?>">Pengeluaran</a>
          </div>
        </div>
      </li>


      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top  shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link text-success d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Cari..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-success" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0" placeholder="Cari..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-success" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $this->session->userdata('username') ?></span>
                <img class="img-profile rounded-circle" src="<?= base_url('assets/img/logo.png') ?>">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Keluar
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->


  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Keluar aplikasi?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Pilih keluar untuk keluar aplikasi</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
          <a class="btn btn-success" href="<?= base_url('auth/logout') ?>">keluar</a>
        </div>
      </div>
    </div>
  </div>

  <!-- tambahdata Modal -->
<div class="modal fade" id="modaltambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Masukkan data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('admin/newentry') ?>" method="POST">
          <div class="form-group">
            <label class="d-block">Jenis</label>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="masuk" name="jenis" class="custom-control-input" value="pemasukan" required>
              <label class="custom-control-label" for="masuk">Pemasukan</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="keluar" name="jenis" class="custom-control-input" value="pengeluaran" required>
              <label class="custom-control-label" for="keluar">Pengeluaran</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-group">
              <label for="kategori">Kategori</label>
              <a href="#" class="float-right text-secondary" data-toggle="modal" data-target="#newkategori" data-dismiss="modal"><i class="fa fa-plus mr-2"></i>Kategori baru</a>
              <select class="form-control" id="kategori" name="kategori" required>
                <?php foreach ($kategori as $value) :?>
                <option value="<?= $value['id_kategori'] ?>"><?= $value['nama_kategori'] ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="uang">Jumlah uang</label>
            <input type="number" class="form-control" name="uang" placeholder="masukkan jumlah uang" required>
          </div>
          <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <textarea class="form-control" name="keterangan" placeholder="masukkan keterangan" required></textarea>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Tambah</button>
      </div>
        </form>
    </div>
  </div>
</div>

  <!-- tambahdata Modal -->
<div class="modal fade" id="newkategori" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Kategori baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
          <div class="form-group">
            <label for="nama">Nama kategori</label>
            <input type="text" class="form-control" name="nama" placeholder="masukkan nama kategori">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Tambah</button>
      </div>
        </form>
    </div>
  </div>
</div>
