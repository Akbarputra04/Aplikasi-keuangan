<?php 

	class Auth extends CI_controller
	{

		function index ()
		{
			$data['title'] = "Login page";

			$this->load->view('auth/login', $data);
		}

		function register ()
		{
			$data['title'] = "Register page";

			$this->load->view('auth/register', $data);
		}
	}

?>