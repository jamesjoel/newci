<?php
class Usermodel extends CI_Model{

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function insert($data)
	{
		// INSERT INTO-----
		$this->db->insert("user", $data); 
	}

	function select($u)
	{
		// SELECT * FROM user WHERE username='$u'
		$this->db->where("username", $u);
		$result=$this->db->get("user");
		return $result;
	}	


}




?>