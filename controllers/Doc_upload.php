<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doc_upload extends CI_Controller {
	public $quote_number;
	function __construct() {
        parent::__construct();

        if($this->input->cookie('quote_number')!=''){
           $this->quote_number=get_cookie('quote_number');
        }else{
        	redirect(base_url(),'refresh');
        }

		$this->load->model('Member_details_model');
    }
	public function index()
	{
		$data['title']="MetLife - HTML Template for insurance";
		$quote_number=$this->quote_number;
		$member_id=$this->Member_details_model->get_Data($quote_number);
		$member_id = $member_id[0]->policy_holder_id;
		$data['member_id'] =$member_id;
		$data['quote_number'] =$quote_number;

		$view_all_members=$this->Member_details_model->Get_Member_Data($member_id);
		$data['view_all_members']=$view_all_members;

		$Master_documet_titles=$this->Member_details_model->Get_Master_documet_titles();
		$data['Master_documet_titles']=$Master_documet_titles;


		$valid_date=$this->Member_details_model->get_valid_date($quote_number);
        $valid_date=$valid_date[0]->created_date;
        $date = new DateTime($valid_date);
        $date = $date->format('dd:mm:yyyy');
        $tomorrow = date('d-m-yy',strtotime("+10 days"));
        $data['valid_date']=$tomorrow;



		$this->load->view('header.php',$data);
		$this->load->view('doc_upload.php');
		$this->load->view('footer.php');
	}
}
