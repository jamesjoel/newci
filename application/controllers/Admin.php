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
		if($u=="admin")
		{
			if($p=="admin")
			{
				$this->session->set_userdata('is_admin_logged_in', true);
				redirect("admin/dash");
			}
			else
			{
				$this->session->set_flashdata("msg", 'This Password not macted');
				redirect("admin");		
			}
		}
		else
		{
			$this->session->set_flashdata("msg", 'This Username and Password not macted');
			redirect("admin");
		}
	}
}

?>