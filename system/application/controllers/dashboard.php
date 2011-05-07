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
		
		$this->load->view('layout/header', 
						  array('title' => "Nuhoc Gearlocker - Dashboard",
								'active' => "dashboard",
								'header_text' => "Welcome to the Nuhoc Gearlocker"));
		$this->load->view('dashboard');
		$this->load->view('layout/footer');
	}
}


?>