<?php 

	class Auth extends CI_controller
	{

		function __construct () {
			parent::__construct();

			$this->load->library('form_validation');
			$this->load->model('M_auth');
		}

		function index ()
		{
			$data['title'] = "Login page";

			$this->load->view('auth/login', $data);
		}

		function login () {

			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_error_delimiters('<div class="small ml-3 text-danger">', '</div>');

			if ($this->form_validation->run() == false) {
				
				$data['title'] = "Login page";
				$this->load->view('auth/login', $data);
				
			} else {

				$username = $this->input->post('username');
				$password = $this->input->post('password');

				$data['userlogin'] = [
					'username' => $username,
					'password' => md5($password)
				];

				$cekuser = $this->M_auth->cekuser($data);

				if ($cekuser > 0) {
					
					$data = [
						'username' => $cekuser['username'],
						'login' => true
					];

					$this->session->set_userdata($data);

					if ($cekuser['id_level'] == 0) {
						redirect(base_url('admin'));
					} else {
						redirect(base_url('bendahara'));
					}

				} else {

					$this->session->set_flashdata('pesan', 'username or password incorrect!');
					redirect(base_url('auth'));
					
				}

			}
		}

		function logout () {

			$this->session->sess_destroy();
			redirect(base_url('auth'));

		}

	}

?>