<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$this->load->view('template/head');
		$this->load->view('user/home');
		$this->load->view('template/foot');
	}

}
