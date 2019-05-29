
        <!-- Begin Page Content -->
        <div class="container-fluid">

			<!-- Page Heading -->
			<div class="d-sm-flex align-items-center justify-content-between mb-4">
				<h1 class="h3 mb-0 text-gray-800">Beranda</h1>
				<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i>Laporan</a>
			</div>

			<!-- Content Row -->
			<div class="row">

			<!-- Earnings (Monthly) Card Example -->
			<div class="col-xl-3 col-md-6 mb-4">
			  <div class="card border-left-primary shadow h-100 py-2">
			    <div class="card-body">
			      <div class="row no-gutters align-items-center">
			        <div class="col mr-2">
			          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Saldo</div>
			          <div class="h5 mb-0 font-weight-bold text-gray-800">Rp.4.636.300</div>
			        </div>
			        <div class="col-auto">
			          <i class="fas fa-calendar fa-2x text-gray-300"></i>
			        </div>
			      </div>
			    </div>
			  </div>
			</div>

			<!-- Earnings (Monthly) Card Example -->
			<div class="col-xl-3 col-md-6 mb-4">
			  <div class="card border-left-warning shadow h-100 py-2">
			    <div class="card-body">
			      <div class="row no-gutters align-items-center">
			        <div class="col mr-2">
			          <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pemasukan (Harian)</div>
			          <div class="h5 mb-0 font-weight-bold text-gray-800">Rp.243.500</div>
			        </div>
			        <div class="col-auto">
			          <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
			        </div>
			      </div>
			    </div>
			  </div>
			</div>

			<!-- Earnings (Monthly) Card Example -->
			<div class="col-xl-3 col-md-6 mb-4">
			  <div class="card border-left-danger shadow h-100 py-2">
			    <div class="card-body">
			      <div class="row no-gutters align-items-center">
			        <div class="col mr-2">
			          <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Pengeluaran (Harian)</div>
			          <div class="row no-gutters align-items-center">
			            <div class="col-auto">
			              <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">Rp.98.500</div>
			            </div>
			          </div>
			        </div>
			        <div class="col-auto">
			          <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
			        </div>
			      </div>
			    </div>
			  </div>
			</div>

			<!-- Pending Requests Card Example -->
			<div class="col-xl-3 col-md-6 mb-4">
			  <div class="card border-left-info shadow h-100 py-2">
			    <div class="card-body">
			      <div class="row no-gutters align-items-center">
			        <div class="col mr-2">
			          <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Aktivitas (Harian)</div>
			          <div class="h5 mb-0 font-weight-bold text-gray-800">5</div>
			        </div>
			        <div class="col-auto">
			          <i class="fas fa-comments fa-2x text-gray-300"></i>
			        </div>
			      </div>
			    </div>
			  </div>
			</div>
			</div>

			<!-- Content Row -->

			<div class="row">

			<!-- Area Chart -->
			<div class="col-xl-8 col-lg-7">
			  <div class="card shadow mb-4">
			    <!-- Card Header - Dropdown -->
			    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
			      <h6 class="m-0 font-weight-bold text-success">Earnings Overview</h6>
			    </div>
			    <!-- Card Body -->
			    <div class="card-body">
			      <div class="chart-area">
			        <canvas id="myAreaChart"></canvas>
			      </div>
			    </div>
			  </div>
			</div>

			<!-- Pie Chart -->
			<div class="col-xl-4 col-lg-5">
			  <div class="card shadow mb-4">
			    <!-- Card Header - Dropdown -->
			    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
			      <h6 class="m-0 font-weight-bold text-success">Revenue Sources</h6>
			    </div>
			    <!-- Card Body -->
			    <div class="card-body">
			      <div class="chart-pie pt-4 pb-2">
			        <canvas id="myPieChart"></canvas>
			      </div>
			      <div class="mt-4 text-center small">
			        <span class="mr-2">
			          <i class="fas fa-circle mr-2 text-warning"></i>Pemasukan
			        </span>
			        <span class="mr-2">
			          <i class="fas fa-circle mr-2 text-danger"></i>Pengeluaran
			        </span>
			      </div>
			    </div>
			  </div>
			</div>
			</div>

			<!-- Content Row -->

        </div>
        <!-- /.container-fluid -->
