<?php

class Home extends CI_Controller{

	function index()
	{
		$this->load->helper("url");
		$this->load->view("home");	
	}
	function about()
	{
		$this->load->helper("url");
		$this->load->view("about");
	}
	function contact()
	{
		
		$this->load->helper("url");
		$this->load->view("contact");
	}
}


?>