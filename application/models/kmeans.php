<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class KMeans extends CI_Model
{
    public function __construct()    {
        parent::__construct();
        $this->load->database();
    }

    // DATA RANDOM
    public function random($jk)    {
        $this->db->order_by('rand()');
        $this->db->limit($jk);
        return $this->db->get('dataset')->result();
    }

    // GET DATA dari Model
    function getAll()   {
        return $this->db->query("SELECT * FROM dataset")->result();
    }

    // GET Jumlah Row dataset
    function hitungBaris()  {
        return $this->db->query("SELECT * FROM dataset")->num_rows();
    }

}

