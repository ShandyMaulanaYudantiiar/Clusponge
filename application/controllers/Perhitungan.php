<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perhitungan extends CI_Controller {

	function __construct()	{
    parent::__construct();

        // Load data model
        $this->load->model('KMeans');
    }

	public function index()	{
		$this->load->view('template/head');
		$this->load->view('user/klastering');
		$this->load->view('template/foot');
	}

	function hasil()	{

		$jk = $_POST['jumklas'];						// Variabel data Jumlah Input Klastering
		$jd = $this->KMeans->hitungBaris();				// Variabel Jumlah Baris data
		$randClus = $this->KMeans->random($jk);			// Variabel Klaster Random
		$data = $this->KMeans->getAll();				//Variabel Seluruh Data
		// var_dump($data);
		
		foreach($data as $data)	{					//Menampilkan All Data
			
				foreach ($randClus as $Clus) {		//Menampilkan Data Random
					
					for ($i=0; $i<$jk ; $i++) { 		//Perulangan agar menciptakan variabel hasil dinamis
						$hasil[$i] = sqrt(
							pow($data->A_CAPAS_DEL_CORTEX - $Clus->A_CAPAS_DEL_CORTEX,2) +
							pow($data->A_CAPA_INTERNA_DEL_CORTEX - $Clus->A_CAPA_INTERNA_DEL_CORTEX,2) +
							pow($data->A_CORTEX - $Clus->A_CORTEX,2) +
							pow($data->A_CORTEX_FIBROSO - $Clus->A_CORTEX_FIBROSO,2) +
							pow($data->A_CORTEX_SOLO_DE_ESPICULAS_TANGENCIALES - $Clus->A_CORTEX_SOLO_DE_ESPICULAS_TANGENCIALES,2) +
							pow($data->A_CUERPOS_EXTRANOS_EN_EL_CORTEX - $Clus->A_CUERPOS_EXTRANOS_EN_EL_CORTEX,2) +
							pow($data->A_GROSOR_DEL_CORTEX - $Clus->A_GROSOR_DEL_CORTEX,2) +
							pow($data->A_HACES_DE_ESPICULAS_PRINCIPALES_EN_POMPON_EN_EL_CORTEX - $Clus->A_HACES_DE_ESPICULAS_PRINCIPALES_EN_POMPON_EN_EL_CORTEX,2) +
							pow($data->A_TILOSTILOS_ADICIONALES_COANOSOMA - $Clus->A_TILOSTILOS_ADICIONALES_COANOSOMA,2)
							// pow($data-$Clus,2) + capek
						);
					}
				}

		}
		var_dump($hasil);
		echo $data->P_SUSTRATO;
		echo min($hasil);
	}
}

// Logika Iterasi 1 = panggil array data & Cluster Random -> lakukan Looping perhitungan pada Semua Cluster untuk Setiap Data -> Pilih Nilai terkecil
