<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Print_recipt extends CI_Controller {

	public function index()
	{
		$data['title']="MetLife - HTML Template for insurance";
		$data['quote_number']=get_cookie('quote_number');
		$data['member_name']=get_cookie('member_name');

		$this->load->view('header.php',$data);
		$this->load->view('Print_recipt.php');
		$this->load->view('footer.php');
	}
}
