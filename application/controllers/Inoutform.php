<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inoutform extends CI_Controller {

	public function index()
	{
		$data['title']="MetLife - HTML Template for insurance";

		$this->load->view('header',$data);
		$this->load->view('in-out-form');
		$this->load->view('footer');
	}
}
