<?php

class Members extends Controller {

	function Members()
	{
		parent::Controller();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->helper('form');
	}
	
	function index()
	{
		$this->load->model('Member');
		$data['members'] = $this->Member->get_all();
		
		$this->load->view('layout/header', 
						  array('title' => "Nuhoc Gearlocker - Members",
								'active' => "members",
								'header_text' => "Nuhoc Members"));
		$this->load->view('members/index', $data);
		$this->load->view('layout/footer');
	}
}

/* End of file members.php */
/* Location: ./system/application/controllers/members.php */