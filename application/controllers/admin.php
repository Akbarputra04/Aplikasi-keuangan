<?php

class Admin extends CI_Controller {

	function __construct () {
		parent::__construct();
		
		if ($this->session->userdata('login') == false) {
			redirect(base_url('auth'));
		}

		$this->load->model('M_kategori');
		$this->load->model('M_master');
		$this->load->model('M_user');
	}

	function index () {
		$data['title'] = 'Dashboard';

		$today = date('Y-m-d');

		$data['kategori'] = $this->M_kategori->getall();
		$data['master'] = $this->M_master->getall();
		$data['masuk'] = $this->M_master->getbyjenis('pemasukan', $today);
		$data['keluar'] = $this->M_master->getbyjenis('pengeluaran', $today);

		$this->load->view('section/header', $data);
		$this->load->view('admin');
		$this->load->view('section/footer');
	}

	function rekap () {
		$data['title'] = 'Rekap data';

		$this->load->view('rekap', $data);
	}

	function semua () {
		$data['title'] = 'Semua riwayat';

		$data['kategori'] = $this->M_kategori->getall();
		
		$this->load->view('section/header', $data);
		$this->load->view('semua');
		$this->load->view('section/footer');
	}

	function pemasukan () {
		$data['title'] = 'Semua pemasukan';

		$data['kategori'] = $this->M_kategori->getall();
		
		$this->load->view('section/header', $data);
		$this->load->view('pemasukan');
		$this->load->view('section/footer');

	}

	function pengeluaran () {
		$data['title'] = 'Semua pengeluaran';

		$data['kategori'] = $this->M_kategori->getall();

		$this->load->view('section/header', $data);
		$this->load->view('pengeluaran');
		$this->load->view('section/footer');
	} 

	function kategori () {
		$data['title'] = 'Kategori';

		$data['kategori'] = $this->M_kategori->getall();

		$this->load->view('section/header', $data);
		$this->load->view('kategori');
		$this->load->view('section/footer');
	}

	function user () {
		$data['title'] = 'User';

		$data['user'] = $this->M_user->getall();
		$data['level'] = $this->M_user->getlevel();

		$this->load->view('section/header', $data);
		$this->load->view('user');
		$this->load->view('section/footer');
	}

	function newentry () {

		$id = date('ymdHis');
		$nama = $this->session->userdata('username');
		$tgl = date('Y-m-d H:i:s');
		$keterangan = $this->input->post('keterangan');
		$uang = $this->input->post('uang');
		$kategori = $this->input->post('kategori');
		$jenis = $this->input->post('jenis');

		if ($jenis == 'pemasukan') {

			$data = [
				'id' => $id,
				'nama' => $nama,
				'tanggal' => $tgl,
				'keterangan' => $keterangan,
				'pemasukan' => $uang,
				'pengeluaran' => 0,
				'id_kategori' => $kategori,
				'status' => 0
			];
			
		} else {

			$data = [
				'id' => $id,
				'nama' => $nama,
				'tanggal' => $tgl,
				'keterangan' => $keterangan,
				'pemasukan' => 0,
				'pengeluaran' => $uang,
				'id_kategori' => $kategori,
				'status' => 0
			];

		}

		$this->M_master->post($data);

		redirect(base_url('admin/semua'));

	}

	function newkategori () {

		$kategori = $this->input->post('kategori');

		$data = [
			'nama_kategori' => $kategori
		];
		
		$this->M_kategori->post($data);

		redirect(base_url('admin/semua'));

	}

	function getdatamaster () {

		$data = $this->M_master->getbyid($_POST['id']);
		echo json_encode($data);

	}

	function ubahentri () {

		$id = $this->input->post('id');
		$nama = $this->session->userdata('username');
		$keterangan = $this->input->post('keterangan');
		$uang = $this->input->post('uang');
		$kategori = $this->input->post('kategori');
		$jenis = $this->input->post('jenis');

		if ($jenis == 'pemasukan') {

			$data = [
				'nama' => $nama,
				'keterangan' => $keterangan,
				'pemasukan' => $uang,
				'pengeluaran' => 0,
				'id_kategori' => $kategori,
				'status' => 1
			];
			
		} else {

			$data = [
				'nama' => $nama,
				'keterangan' => $keterangan,
				'pemasukan' => 0,
				'pengeluaran' => $uang,
				'id_kategori' => $kategori,
				'status' => 1
			];

		}

		$this->M_master->update($data, $id);

		redirect(base_url('admin/semua'));
		
	}
	
	function hapusentri () {
		
		$id = $this->input->post('id');
		
		$drop = $this->M_master->delete($id);
		
		redirect(base_url('admin/semua'));

	}

	function getdatakategori () {

		$data = $this->M_kategori->getbyid($_POST['id']);
		echo json_encode($data);

	}

	function ubahkategori () {

		$id = $this->input->post('id');
		$kategori = $this->input->post('kategori');

		$data = [
			'nama_kategori' => $kategori
		];

		$update = $this->M_kategori->update($data, $id);

		redirect(base_url('admin/kategori'));

	}

	function hapuskategori () {

		$id = $this->input->post('id');

		$drop = $this->M_kategori->delete($id);

		redirect(base_url('admin/kategori'));

	}

	function hapususer () {

		$id = $this->input->post('id');

		$drop = $this->M_user->delete($id);

		redirect(base_url('admin/user'));

	}
}

?>