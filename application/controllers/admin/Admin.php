<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("User_Model");
		belumlogin();
	}

	public function index()
	{
		$data['getadmin'] = $this->User_Model->getUser();
		$data['admin'] = $this->db->get_where('tb_user', ['EMAIL' => $this->session->userdata('EMAIL')])->row_array();
		$this->load->view("admin/administrator/admin", $data);
	}

	public function tambah()
	{
		$this->form_validation->set_rules('username', 'Username', 'required|trim|max_length[100]');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|max_length[100]|valid_email|is_unique[tb_user.email]');
		$this->form_validation->set_rules('foto', 'Foto', 'trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]|max_length[100]|matches[password2]');
		$this->form_validation->set_rules('password2', 'Repeat Password', 'required|trim|matches[password]');

		if ($this->form_validation->run() == false) {
			$data['admin'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
			$this->load->view("admin/administrator/tambahadmin", $data);
		} else {
			$temp = explode(".", $_FILES['foto']['name']);
			$foto = round(microtime(true)) . '.' . end($temp);
			move_uploaded_file($_FILES['foto']['profil'], "./assets/img/" . $foto);
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['max_size'] = '2048';
			$config['upload_path'] = './assets/img/';
			$config['file_name'] = $foto;

			$this->upload->initialize($config);

			if ($this->upload->do_upload('foto')) {
				$dataPost = array(
					'ID_USER'	=> '',
					'USERNAME'	=> $this->input->post("username"),
					'EMAIL'		=> $this->input->post("email"),
					'PASSWORD'	=> password_hash($this->input->post("password"), PASSWORD_DEFAULT),
					'FOTO'		=> trim($foto)
				);
				if ($this->User_Model->addUser($dataPost)) {
					$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
					Berhasil Menambahkan Akun!
				    </div>');
					redirect('admin/admin');
				} else {
					$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
					Gagal Menambahkan Akun!
					</div>');
					redirect('admin/admin');
				}
			} else {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">'
					. $this->upload->display_errors() .
					'</div>');
				redirect('admin/administrator/admin');
			}
		}
	}

	public function edit($id = null)
	{
		$this->form_validation->set_rules('username', 'Username', 'required|trim|max_length[100]');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|max_length[100]|valid_email');
		$this->form_validation->set_rules('foto', 'Foto', 'trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]|max_length[100]|matches[password2]');
		$this->form_validation->set_rules('password2', 'Repeat Password', 'required|trim|matches[password]');

		if ($this->form_validation->run() == false) {
			$data['detail'] = $this->User_Model->detail($id);
			$data['admin'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
			$this->load->view("admin/administrator/editadmin", $data);
		} else {
			$update = $this->User_Model->upUser(array(
				'ID_USER'	=> $this->input->post("id_user"),
				'USERNAME'	=> $this->input->post("username"),
				'EMAIL'		=> $this->input->post("email"),
				'PASSWORD'	=> password_hash($this->input->post("password"), PASSWORD_DEFAULT)
			), $id);

			if ($update) {
				$ubahfoto = $_FILES['foto']['name'];

				if ($ubahfoto) {
					$config['allowed_types'] = 'jpg|png|jpeg';
					$config['max_size'] = '2048';
					$config['upload_path'] = './assets/img/';
					$config['file_name'] = $ubahfoto;

					$this->upload->initialize($config);

					if ($this->upload->do_upload('foto')) {
						$user = $this->db->get_where('tb_user', ['ID_USER' => $id])->row_array();
						$fotolama = $user['foto'];
						if ($fotolama) {
							unlink(FCPATH . '.assets/img/' . $fotolama);
						}
						$fotobaru = $this->upload->data('file_name');
						$this->db->set('foto', $fotobaru);
						$this->db->where('ID_USER', $id);
						$this->db->update('tb_user');
					} else {
						$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">'
							. $this->upload->display_errors() .
							'</div>');
						redirect('admin/admin');
					}
				}
				$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
				Data Berhasil Diubah
				</div>');
				redirect('admin/admin');
			} else {
				$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
                Data Gagal Di Ubah
                </div>');
				redirect('admin/administrator/admin');
			}
		}
	}

	public function delete($idUser)
	{
		$delete = $this->User_Model->delUser($idUser);
		if ($delete) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
			Data Berhasi di Hapus!
            </div>');
			redirect('admin/admin');
		} else {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
			Data gagal di Hapus!
            </div>');
			redirect('admin/admin');
		}
	}
}
