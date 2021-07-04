<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Kmeans extends CI_Model
{
    public function __construct()    {
        parent::__construct();
        $this->load->database();
    }

    // DATA RANDOM
    public function random()    {
        $this->db->order_by('rand()');
        $this->db->limit(3);
        return $this->db->get('dataset') ;
    }

    // GET ALL
    public function getALl()    {
        return $this->db->get('dataset')->result();
    }

}
