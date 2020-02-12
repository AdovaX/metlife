<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pay_by_online extends CI_Controller {

  public function index()
  {
    $data['title']="MetLife - HTML Template for insurance";

		$data['quote_number']=get_cookie('quote_number');
		$data['member_name']=get_cookie('member_name');

    $this->load->view('header.php',$data);
    $this->load->view('pay_by_online.php');
    $this->load->view('footer.php');
  }
}
