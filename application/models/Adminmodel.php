<?php
class Admin extends CI_Model{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}


	function insert($data)
	{
		$this->db->insert("admin", $data);
	}
	function update_by_id($id, $data)
	{
		$this->db->where("id", $id);
		$this->db->update("admin",$data);
	}	
	function delete_by_id($id)
	{
		$this->db->where("id", $id);
		$this->db->delete("admin");
	}
	function select_all()
	{
		$this->db->get("admin");
	}
	function select_by_id($id)
	{
		$this->db->where("id", $id);
		return $this->db->get("admin");
	}
	function select_by_username($username)
	{
		$this->db->where("username", $username);
		return $this->db->get("admin");
	}
}
?>