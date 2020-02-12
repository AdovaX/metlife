<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment_gateway extends CI_Controller {

  public function index()
  {
    $data['title']="MetLife - HTML Template for insurance";

    $this->load->view('header.php',$data);
    $this->load->view('payment_gateway.php');
    $this->load->view('footer.php');
  }
}
