<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perhitungan extends CI_Controller {

	function __construct()	{
    	parent::__construct();

        // Load data model
        $this->load->model('kmeans');
    }

	public function index()
	{
		$data['coba'] = $this->kmeans->random()->result();
		$this->load->view('template/head');
		$this->load->view('user/klastering', $data);
		$this->load->view('template/foot');
	}

}
