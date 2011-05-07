<?php

class Member extends Model {
	
	var $id				= -1;
	var $name			= '';
	var $phone			= '';
	var $email			= '';
	var $notes			= '';
	var $created_at		= '';
	var $updated_at		= '';
	
	function __construct()
    {
		parent::Model();
        parent::__construct();
		$this->load->database();
    }
	
	function get_newest()
	{
		$sql = 'SELECT * FROM Members ORDER BY created_at DESC LIMIT 5';
		$query = $this->db->query($sql);
		return $query->result();
	}
	
	function get_all()
	{
		$query = $this->db->get('Members');
		return $query->result();
	}
	
}

/* End of file User.php */
/* Location: ./system/application/models/User.php */
?>