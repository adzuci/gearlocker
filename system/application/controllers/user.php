<?php

class User extends Controller {

	function User()
	{
		parent::Controller();
		$this->load->helper('url');
		$this->load->library('session');
	}
	
	function login()
	{
		if ( $this->input->post('email') && $this->input->post('password') )
		{
			echo $_POST;
		}
		else
		{
			$this->session->set_flashdata('error', 'Unable to log in');
			redirect("");
		}
	}
}

/* End of file user.php */
/* Location: ./system/application/controllers/user.php */
?>