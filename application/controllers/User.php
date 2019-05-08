<?php
class User extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->library("session");
		$this->backdoor();
	}

	function backdoor()
	{
		if(! $this->session->userdata("is_user_logged_in"))
		{
			redirect("home");
		}
	}
	function index()
	{
		$pagedata = array("title"=>"My Account", "pagename"=>"user/my_account");
		$this->load->view("layout", $pagedata);
	}
	function profile()
	{
		$id = $this->session->userdata("id");
		$this->load->model("usermodel");
		$result = $this->usermodel->select_by_id($id); //5


		$pagedata = array("title"=>"My Profile", "pagename"=>"user/profile", "result" =>$result);
		$this->load->view("layout", $pagedata);
	}
	function edit_profile()
	{
		$id = $this->session->userdata("id");
		$this->load->model("usermodel");
		$result = $this->usermodel->select_by_id($id); //5


		$pagedata = array("title"=>"My Profile", "pagename"=>"user/edit_profile", "result" =>$result);
		$this->load->view("layout", $pagedata);
	}

	function update()
	{
		// print_r($this->input->post());

		$id = $this->session->userdata("id");

		$data['full_name']=$this->input->post("full_name");
		$data['contact']=$this->input->post("contact");
		$data['gender']=$this->input->post("gender");
		$data['city']=$this->input->post("city");
		$data['address']=$this->input->post("address");

		$this->load->model("usermodel");
		$this->usermodel->update_by_id($id, $data);
		redirect("user/profile");

	}




	function logout()
	{
		// session_destroy();
		$this->session->sess_destroy();
		redirect("home");
	}
}




?>