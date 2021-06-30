<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class User_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // GET DATA USER
    public function getUser()
    {
        return $this->db->get("tb_user")->result();
    }

    // INSERT DATA USER
    public function addUser($data = array())
    {
        return $this->db->insert("tb_user", $data);
    }

    //UPDATE DATA USER
    public function upUser($data = array(), $id)
    {
        $this->db->where('id_user', $id);
        return $this->db->update("tb_user", $data);
    }

    //GET DETAIL USER
    public function detail($id)
    {
        $this->db->where('ID_USER', $id);
        return $this->db->get("tb_user")->result();
    }

    //DELETE DATA USER
    public function delUser($idUser)
    {
        $this->db->where('ID_USER', $idUser);
        return $this->db->delete("tb_user");
    }  
    
}
