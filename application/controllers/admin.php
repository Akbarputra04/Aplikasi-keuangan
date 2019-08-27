<?php

class Admin extends CI_Controller {

	function __construct ()
	{
		parent::__construct();
		
		if ($this->session->userdata('login') == false) {
			redirect(base_url('auth'));
		}

		$this->load->model('M_kategori');
		$this->load->model('M_master');
	}

	function index () {
		$data['title'] = 'Dashboard';

		$kategori = $this->M_kategori->getall();

		$data['kategori'] = $kategori;

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

		$this->load->view('section/header', $data);
		$this->load->view('semua');
		$this->load->view('section/footer');
	}

	function pemasukan () {
		$data['title'] = 'Semua pemasukan';

		$this->load->view('section/header', $data);
		$this->load->view('pemasukan');
		$this->load->view('section/footer');
	}

	function pengeluaran () {
		$data['title'] = 'Semua pengeluaran';

		$this->load->view('section/header', $data);
		$this->load->view('pengeluaran');
		$this->load->view('section/footer');
	} 

	function newentry () {

		$id = date('ymdhms');
		$nama = $this->session->userdata('username');
		$tgl = date('Y-m-d');
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
				'pemasukkan' => $uang,
				'pengeluaran' => '-',
				'id_kategori' => $kategori
			];
			
		} else {

			$data = [
				'id' => $id,
				'nama' => $nama,
				'tanggal' => $tgl,
				'keterangan' => $keterangan,
				'pemasukkan' => '-',
				'pengeluaran' => $uang,
				'id_kategori' => $kategori
			];

		}

		$post = $this->M_master->post($data);

		if ($post) {

			redirect(base_url('admin'));
			
		}

	}
}

?>