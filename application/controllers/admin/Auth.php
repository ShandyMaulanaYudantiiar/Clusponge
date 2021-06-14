<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function index()
	{
		// $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
		// $this->form_validation->set_rules('password', 'Password', 'required|trim');
		// if ($this->form_validation->run() === false) {
		// 	$this->load->view('user/templates/header.php');
		// 	$this->load->view('user/home/home.php');
		// 	$this->load->view('user/templates/footer.php');
		// } else {
		// 	$this->_login();
		// }

		$data['title'] = 'Login Page';
		$this->load->view('admin/auth/login', $data);
	}
}
