<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function view($page = 'v_home')
	{
		if( !file_exists('application/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		
		$data['user_name'] = $this->dictionary->getSingleInfo('user_name')->dict_value;
		
		$this->load->view('templates/header', $data);
		$this->load->view('pages/'.$page);
		$this->load->view('templates/footer');
	}
}