<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['title']="MetLife - HTML Template for insurance";

		$this->load->view('header.php',$data);
		$this->load->view('homepage.php');
		$this->load->view('footer.php');
	}
}
