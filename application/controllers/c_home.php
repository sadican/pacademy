<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_Home extends CI_Controller {	

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_home');
		$this->load->library('utility');
		$this->load->library('header');	
	}
	
	public function index()
	{
		$data = $this->m_home->getUserProfileInformation();
		/* get static header data and append it to data array */
		$data = $this->utility->mergeData($this->header->getMenuStaticData(), $data);

		//print_r($data);

		/* load views */
		$this->load->view('templates/header', $data);
		$this->load->view('pages/v_home', $data);
		$this->load->view('templates/footer');
	}
}
?>