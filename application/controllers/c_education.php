<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_Education extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('tm_header');
	}
	
	public function index()
	{
		$dataContent = $this->m_home->getUserProfile();
		
		$this->load->view('templates/header', $dataContent);
		$this->load->view('pages/v_home', $dataContent);
		$this->load->view('templates/footer');
	}

	public function view()
	{
		$dataContent = $this->m_home->getUserProfile();
		
		$this->load->view('templates/header', $dataContent);
		$this->load->view('pages/v_home', $dataContent);
		$this->load->view('templates/footer');
	}
}