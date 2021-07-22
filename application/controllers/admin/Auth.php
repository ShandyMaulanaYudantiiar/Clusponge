<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');
		if ($this->form_validation->run() === false) {
			$this->load->view('admin/auth/login');
		} else {
			$this->_login();
		}
	}

	private function _login()
	{
		$email		= $this->input->post('email');
		$password	= $this->input->post('password');
		$user = $this->db->get_where('tb_user', ['EMAIL' => $email])->row_array();
		if ($user) {
			if (password_verify($password, $user['PASSWORD'])) {
				$data = [
					'USERNAME'	=> $user['USERNAME'],
					'EMAIL'		=> $user['EMAIL'],
					'FOTO'		=> $user['FOTO']
				];
				$this->session->set_userdata($data);
				redirect('admin/dashboard');
			} else {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Password salah!</div>');
				redirect('admin/auth');
			}
		} else {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Akun belum terdaftar! Silahkan hubungi pihak Admin.</div>');
			redirect('admin/Auth');
		}
	} 

	public function logout()
    {
        $this->session->unset_userdata('USERNAME');
        $this->session->unset_userdata('EMAIL');
        $this->session->unset_userdata('FOTO');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" style="color: yellow;" role="alert">Anda berhasil logout! Silahkan login untuk melanjutkan.</div>');
        redirect('Home');
    }
}
