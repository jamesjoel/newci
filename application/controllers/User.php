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
	function logout()
	{
		// session_destroy();
		$this->session->sess_destroy();
		redirect("home");
	}
}




?>