<?php

class Auth extends Controller {

	function Auth()
	{
		parent::Controller();
		$this->load->helper('url');
		$this->load->library('session');
	}
	
	function login()
	{
		$this->load->model('User');
		$email 		= $this->input->post('email');
		$password = $this->input->post('password');
				
		if ( $email && $password )
		{
			$login_is_success = $this->User->authenticate($email, $password);
			
			if ( $login_is_success ) {
				// Set the user guid as a session parameter
				//$this->session->
				redirect('dashboard');
			} else {
				$this->session->set_flashdata('error',
					"The email address or password you entered is incorrect.");
				redirect('');
			}
		}
		else
		{			
			if ( $email && !$password ) {
				$this->session->set_flashdata('error', 'Please enter your password.');
			} elseif ( !$email && $password ) {
				$this->session->set_flashdata('error', 
					'Please enter your email address.');
			} else {
				$this->session->set_flashdata('error', 
					'Please enter your email address and password.');
			}
			
			redirect('');
		}
	}
}

/* End of file auth.php */
/* Location: ./system/application/controllers/auth.php */
?>