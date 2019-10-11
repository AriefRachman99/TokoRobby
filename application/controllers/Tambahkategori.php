<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tambahkategori extends CI_Controller {

	public function index()
	{
		$this->header();
		$this->load->view('v_tambahkategori');
		$this->footer();
	}
	public function header()
	{
		
		$this->load->view('v_header');
		
	}
	public function footer()
	{
		
		$this->load->view('v_footer');
		
	}
}
