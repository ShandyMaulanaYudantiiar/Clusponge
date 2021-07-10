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

	public function hasil()	{
		$jumlah_centroid = $_POST['jumklas'];
		$data = $this->KMeans->getData();		//mengambil Seluruh data

		$centroid = $this->Centroid_Random($data,$jumlah_centroid);
		$cluster = $this->clustering($data, $centroid);
		$new_centroid = $this->newCentroid($data, $cluster, $centroid);
		
		var_dump($cluster);
	}

	public function Centroid_Random($data, $jumlah_centroid)	{
		$index_data = count($data)-1;  //Karena Index dimulai dari 0. maka jumlah index jumlah data - 1
		// Deklarasi Variable array
		$centroid_random = array();	
		$angka = array();
		$data_centroid = array();

		// Perulangan untuk memuat data Centroid Random
		for ($i=0; $i < $jumlah_centroid ; $i++) {
			$angka = rand( 0, $index_data);
			// Pada perulangan ini mencari nilai random untuk index centroid random
			// Dilakukan Validasi menggunakan perulangan do while
			//untuk memastikan tidak ada angka yang sama
			do {
				$angka = rand( 0, $index_data);
				// Jika Angka sama akan dilakukan perulangan lagi
			} while (in_array($angka, $centroid_random));
			// Perulangan akan terus terjadi JIKA
			// Nilai pada array angka sama dengan Nilai array Centroid_Random
				$centroid_random[$i] = $angka;
				// Jika Nilai belum ada maka masuk ke $centroid_random
		}

		// Setelah mencari index dengan angka random
		// saatnya Mencari data berdasarkan index yang didapat
		foreach ($centroid_random as $key_CRandom => $value_CRandom) {
			//Untuk memisahkan index dengan Value
			$data_centroid[$key_CRandom] = $data[$value_CRandom];
			// Memasukkan value Centroid random ke Data Centroid
		}
		return $data_centroid;
	}

	public function clustering($data, $centroid){   
		// Menghutung jarak setiap data dengan centroid
		// lalu jarak tersebut di simpan kedalan variable $jarak_centroid.
		foreach($data as $row_m_data => $m_data){ 
			foreach($centroid as $row_m_centroid => $m_centroid){
				// mendefinisikan jarak awal seelum perhitungan setiap data = 0
				// agar tidak terjadi salah perhitungan pada looping berikutnya.
				$jarak_centroid[$row_m_data][$row_m_centroid] = 0.0;
				$jarak = 0.0;
				// echo "sqrt(";
				foreach($m_centroid as $row_single_centroid => $single_centroid){
					$single_data = $m_data[$row_single_centroid];
					$jarak += pow(($single_data - $single_centroid), 2);
					// echo"(($single_data - $single_centroid)^ 2) [$jarak] + ";
				}
				// echo ")";
				$hasil = round(sqrt($jarak),2);
				$jarak_centroid[$row_m_data][$row_m_centroid] = $hasil;
				// echo "= " . $hasil. "<br>";
			}
			// echo"<br><br>";
		}

		// Setelah melakukan perhitungan jarak, maka ditentukan lah jarak terdekat dari - 
		// setiap data dengan setiap centroid.
		// jarak rata rata data dari setiap nilai siswa yang paling dekat dengan centroid -
		// yang ada akan di simpan ke dalam var new_centroid lalu di kembalikan kedalam
		// variable yang memanggil fungsi clustering().
		foreach($jarak_centroid as $m_jarak){ // Menghitung jarak terdekat
			$nearest_cluster[] = array_search(min($m_jarak), $m_jarak);
		}

		// echo "<br><br>";
		// echo"new centroid<br>";
		// print_r(json_encode($new_centroid));
		// echo "<br><br>";

		return $nearest_cluster;
	}

	// fungsi untuk menentukan titik centroid terbaru.
	function newCentroid($data, $cluster, $centroid){
		// setiap data yang memiliki cluster yang sama akan di masukkan ke dalam $multi_cluster -
		// sesuai index nya masing masing, index disini menggantikan nilai cluster yang di tuju -
		// oleh setiap data.
		$multi_cluster=array();
		foreach($cluster as $row_m_cluster=>$m_cluster){
			$multi_cluster[$m_cluster][] = $row_m_cluster;
		}
		
		// pada pemrosesan sebelumnya dapat terlihat bahwa data yang di simpan akan berurutkan -
		// cluster berapa yag di miliki oleh data pertama, maka dari itu data tersebut harus -
		// di urutkan terlebih dahulu menggunakan fungsi ksort(),
		// ksort() = mengurutkan secara ascending berdasarkan nilai key yang dimiliki.
		ksort($multi_cluster);
		
		// proses dibawah berfungsi untuk menghitung centroid baru sesuai dengan -
		// metode k-means, lalu nilai dari centroid baru disimpan kedalam var $centroid_baru
		// di kembalikan kedalam variable yang memanggil fungsi new_centroid()
		$centroid_baru = array();
		foreach($multi_cluster as $row_m_multi_cluster=>$m_multi_cluster){
			foreach($centroid[0] as $row_m_centroid=>$_m_centroid){ 
				$temp_centroid = 0;
				// echo "<br>start||";
				foreach($m_multi_cluster as $n_multi_cluster){
					$temp_centroid += $data[$n_multi_cluster][$row_m_centroid];
					// $original = $data[$n_multi_cluster][$row_m_centroid];
					// echo "[$n_multi_cluster][$row_m_centroid]=$original +   ";
				}
				$temp_centroid = round($temp_centroid/count($m_multi_cluster), 2);
				$centroid_baru[$row_m_multi_cluster][] = $temp_centroid;
				// echo " / ". count($m_multi_cluster) . "= ". $temp_centroid ;
			}
		}
		// echo "<br>";
		return $centroid_baru;
	}
}

// Logika Iterasi 1 = panggil array data & Cluster Random -> lakukan Looping perhitungan pada Semua Cluster untuk Setiap Data -> Pilih Nilai terkecil