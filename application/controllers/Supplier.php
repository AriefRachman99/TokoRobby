<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {

	
	function __construct()
	{
		parent::__construct();
		// check_not_login();
		$this->load->model('supplier_m');
	}
	public function index()
	{
		$data = [
			'isi' => 'supplier/supplier_data'
			// 'data_supplier' => $this->supplier_m->get()
		];
		$this->load->view('Templates/master_dashboard', $data);
	}
}
