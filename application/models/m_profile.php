<?php

Class M_Profile Extends CI_Model {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('profile');
		$this->load->library('dictionary');
		$this->load->library('education');
		$this->load->library('honorreward');
		$this->load->library('project');
		$this->load->library('socialnetwork');
	}
	
	public function getProfileAll()
	{
		return $this->profile->selectAll();
	}

	public function getEducationAll()
	{
		return $this->education->selectAll();
	}

	public function getProjectAll()
	{
		return $this->project->selectAll();
	}

	public function getHonorRewardAll()
	{
		return $this->honorreward->selectAll();
	}

	public function getSocialNetworkAll()
	{
		return $this->socialnetwork->selectAll();
	}
}
?>