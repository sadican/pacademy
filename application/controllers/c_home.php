<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_Home extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_home');
		$this->load->model('dictionary');
	}
	
	public function index()
	{
		$this->genericView();
	}

	public function view()
	{
		$this->genericView();
	}

	public function genericView()
	{
		$dataHeader = $dataHeader['header_user_name'] = $this->dictionary->getSingleInfo('user_name')->dict_value;//$this->tm_header->getStaticData();
		$dataContent = $this->m_home->getUserProfile();
		
		$this->load->view('templates/header', $dataHeader);
		$this->load->view('v_home', $dataContent);
		$this->load->view('templates/footer');
	}
}