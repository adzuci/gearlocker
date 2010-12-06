<?php

class User extends Model {
	
	function User()
	{
		parent::Model();
	}
	
	function authenticate($email, $password) 
	{
		return ($email == "mrrc00@gmail.com" && $password == "test" );
	}
}

/* End of file User.php */
/* Location: ./system/application/models/User.php */
?>