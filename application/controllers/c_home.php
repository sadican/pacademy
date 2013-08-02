<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_Home extends CI_Controller {	

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_home');		
	}
	
	public function index()
	{
		$this->_genericView();
	}

	public function view()
	{
		$this->_genericView();
	}

	public function _genericView()
	{
		$dataContent = $this->m_home->getUserProfile();
		
		$this->load->view('templates/header', $dataContent);
		$this->load->view('pages/v_home', $dataContent);
		$this->load->view('templates/footer');
	}

	public function testMe()
	{
		$this->load->view('pages/v_home', $dataContent);
	}
}