<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	public function index()
	{
	     $data['title']="MetLife - HTML Template for insurance";

		$this->load->view('header.php',$data);
		$this->load->view('productspage.php');
		$this->load->view('footer.php');
	}
}
