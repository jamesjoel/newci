<?php
class Admin extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->library('session');
	}
	function index()
	{
		$this->load->view('admin/login');
	}
	function auth()
	{
		$u = $this->input->post("username");
		$p = $this->input->post("pass");
		
		$this->load->model("adminmodel");
		$result=$this->adminmodel->select_by_username($u);
		if($result->num_rows()==1)
		{
			$data = $result->row_array();
			if($data['password']==sha1($p))
			{	
				$this->session->set_userdata("id", $data['id']);
				$this->session->set_userdata("is_user_logged_in", true);
				redirect("admin/dashboard");

			}
			else
			{
				$this->session->set_flashdata("msg", "This password not mached");
				redirect("admin");		
			}
		}
		else
		{
			$this->session->set_flashdata("msg", "This Username and password not mached");
			redirect("admin");
		}
	}
	function dashboard()
	{
		echo "yes";
	}
}

?>