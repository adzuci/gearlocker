<?php

class Welcome extends Controller {

	function Welcome()
	{
		parent::Controller();	
		$this->load->library('session');
		$this->load->helper('form');
	}
	
	function index()
	{
		$this->load->view('welcome/login');
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */