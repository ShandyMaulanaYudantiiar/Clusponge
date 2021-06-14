<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ImportData extends CI_Controller {

	public function index()
	{
        $this->load->view('admin/importData');
	}
}
