<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Perhitungan extends CI_Controller {

	function __construct()	{
    parent::__construct();

        // Load data model
        $this->load->model('KMeans');
		$this->load->model('Importcsv');
    }

	public function index()	{
		$data['dataset'] = $this->Importcsv->getRows();
		$this->load->view('template/head');
		$this->load->view('user/klastering', $data);
		$this->load->view('template/foot');
	}
}

// Logika Iterasi 1 = panggil array data & Cluster Random -> lakukan Looping perhitungan pada Semua Cluster untuk Setiap Data -> Pilih Nilai terkecil