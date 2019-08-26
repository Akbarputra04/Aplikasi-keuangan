<?php

class Admin extends CI_Controller {

	function __construct ()
	{
		parent::__construct();
		
		if ($this->session->userdata('login') == false) {
			redirect(base_url('auth'));
		}
	}

	function index ()
	{
		$data['title'] = 'Dashboard';

		$this->load->view('section/header', $data);
		$this->load->view('admin');
		$this->load->view('section/footer');
	}

	function rekap ()
	{
		$data['title'] = 'Rekap data';

		$this->load->view('rekap', $data);
	}

	function semua ()
	{
		$data['title'] = 'Semua riwayat';

		$this->load->view('section/header', $data);
		$this->load->view('semua');
		$this->load->view('section/footer');
	}

	function pemasukan ()
	{
		$data['title'] = 'Semua pemasukan';

		$this->load->view('section/header', $data);
		$this->load->view('pemasukan');
		$this->load->view('section/footer');
	}

	function pengeluaran ()
	{
		$data['title'] = 'Semua pengeluaran';

		$this->load->view('section/header', $data);
		$this->load->view('pengeluaran');
		$this->load->view('section/footer');
	}
}

?>