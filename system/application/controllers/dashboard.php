<?php

class Dashboard extends Controller {
	
	function Dashboard()
	{
		parent::Controller();
		$this->load->helper('url');
		$this->load->library('session');
	}
	
	function show()
	{
		$this->load->model('Member');
		$data['newest_members'] = $this->Member->get_newest();
		
		$this->load->view('layout/header', 
						  array('title' => "Nuhoc Gearlocker - Dashboard",
								'active' => "dashboard",
								'header_text' => "Welcome to the Nuhoc Gearlocker"));
		$this->load->view('dashboard', $data);
		$this->load->view('layout/footer');
	}
}


?>