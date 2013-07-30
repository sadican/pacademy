<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_Education extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('tm_header');
	}
	
	public function index()
	{
		$dataHeader = $this->tm_header->getStaticData();
		
		$this->load->view('templates/header', $dataHeader);
		$this->load->view('pages/v_education');
		$this->load->view('templates/footer');
	}

	public function view()
	{
		$dataHeader = $this->tm_header->getStaticData();
		
		$this->load->view('templates/header', $dataHeader);
		$this->load->view('pages/v_education');
		$this->load->view('templates/footer');
	}
}