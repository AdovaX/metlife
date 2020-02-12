<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Policy_holder extends CI_Controller {
	 function __construct() {
        parent::__construct();
		$data['title']="MetLife - HTML Template for insurance";
		$this->load->model('Policy_holder_model');
		$this->load->view('test.php');



    }

	public function index()
	{
		$data['title']="MetLife - HTML Template for insurance";
		$data['policy_holder_name']=Null;
		$data['policy_holder_email']=Null;
		$data['policy_holder_mobile']=Null;
		$data['policy_holder_passport']=Null;
		$data['policy_holder_date']=Null;
		$data['policy_holder_bussiness_address']=Null;
		$data['policy_holder_emirates_id']=Null;
		$data['policy_holder_uid_no']=Null;
		$data['visa_expiry_date']=Null;
		$data['policy_holder_address']=Null;

		$this->load->view('header.php',$data);
		$this->load->view('policy_holder.php');
		$this->load->view('footer.php');
	}
	function data(){

        $this->form_validation->set_rules('policy_holder_name', 'policy holder name', 'required|trim|min_length[2]|max_length[15]|callback__check_name');
		$this->form_validation->set_rules('policy_holder_email', 'policy holder email', 'required|trim|valid_email');
		$this->form_validation->set_rules('policy_holder_mobile', 'policy holder mobile', 'required|trim|callback__valid_mobile');
		$this->form_validation->set_rules('policy_holder_passport', 'policy holder passport', 'required|trim|min_length[5]|callback__is_valid_pp');
		$this->form_validation->set_rules('policy_holder_date', 'policy holder date', 'required|trim|callback__valid_date');
		$this->form_validation->set_rules('policy_holder_bussiness_address', 'policy holder bussiness address', 'required|trim|min_length[10]|max_length[100]');
		$this->form_validation->set_rules('policy_holder_emirates_id', 'policy holder emirates id', 'required|trim|callback__valid_emirates_id');
		$this->form_validation->set_rules('policy_holder_uid_no', 'policy holder uid_no', 'required|trim|callback__valid_uid');
		$this->form_validation->set_rules('visa_expiry_date', 'visa expiry date', 'required|trim');
		$this->form_validation->set_rules('policy_holder_address', 'policy holder address', 'required|trim|min_length[10]|max_length[100]');


		$data['policy_holder_name']=$this->input->post('policy_holder_name');
		$data['policy_holder_email']=$this->input->post('policy_holder_email');
		$data['policy_holder_mobile']=$this->input->post('policy_holder_mobile');
		$data['policy_holder_passport']=$this->input->post('policy_holder_passport');
		$data['policy_holder_date']=$this->input->post('policy_holder_date');
		$data['policy_holder_bussiness_address']=$this->input->post('policy_holder_bussiness_address');
		$data['policy_holder_emirates_id']=$this->input->post('policy_holder_emirates_id');
		$data['policy_holder_uid_no']=$this->input->post('policy_holder_uid_no');
		$data['visa_expiry_date']=$this->input->post('visa_expiry_date');
		$data['policy_holder_address']=$this->input->post('policy_holder_address');

		if ($this->form_validation->run()) {

		    $data['quote_number']="QN" . mt_rand(10000000, 99999999);

			$this->session->set_flashdata('quote_number', $data['quote_number']);
			$this->input->set_cookie('quote_number',$data['quote_number'],'3600');

			$data = array(
				'policy_holder_name' =>              $data['policy_holder_name'],
				'email' =>                           $data['policy_holder_email'],
				'mobile' =>                          $data['policy_holder_mobile'],
				'passport_number' =>                 $data['policy_holder_passport'],
				'passport_expiry_date' =>            $data['policy_holder_date'],
				'business_residence_address' =>      $data['policy_holder_bussiness_address'],
				'emirates_id' =>                     $data['policy_holder_emirates_id'],
				'uid_number' =>                      $data['policy_holder_uid_no'],
				'visa_expiry_date' =>                $data['visa_expiry_date'],
				'policy_holder_address' =>           $data['policy_holder_address'],
				'quote_number' =>                    $data['quote_number']
				);

			$this->Policy_holder_model->form_insert($data);

			redirect ( base_url().'Member_details');

         }else{
            $data['title']="MetLife| Error";
			$data['errors'] = validation_errors();
			$this->load->view('header.php',$data);
			$this->load->view('policy_holder.php');
			$this->load->view('footer.php');


         }
	}

	public function _check_name($str) {
        if ($str != '' && !preg_match(NAME_REGEX, $str)) {
            $this->form_validation->set_message('_check_name', 'Only characters are  allowed in %s.');
            return FALSE;
        }
        return TRUE;
	}
	public function _valid_mobile($value) {
		$result = TRUE;
        $value = trim($value);
        if (!empty($value)) {
            if (!preg_match(DHA_MOBILE_REGEX, $value)) {
				$this->form_validation->set_message('_valid_mobile', 'Format is not Correct, Kindly rectify the Mobile Number Format.');
			return FALSE;
             }
        }
        return $result;
	}
	function _valid_date($value) {
		$key="Date";
		$is_old = TRUE;
        $result = TRUE;
        $value = trim($value);
        if ($value != '') {
            if (!preg_match(DATE_REGEX, $value)) {
				$result = "FALSE";
				$this->form_validation->set_message('_valid_date', 'Date Format is not Correct,Kindly Type in (DD-MM-YYYY) format.');
            }
            }
        return $result;
	}
	function _is_valid_pp($value) {
        $result = TRUE;
        $value = trim($value);
        if (!empty($value)) {
            if (!preg_match(SSP_ALPHADIGIT15_REGEX, $value)) {
				$this->form_validation->set_message('_is_valid_pp', 'Passport number not Correct, Kindly do not use spaces and use upto 15 characters.');
                $result = FALSE;
            }
        }
        return $result;
	}
	function _valid_emirates_id($str){
        $result = TRUE;
		if (!preg_match(EID_REGEX, $str)) {
			$this->form_validation->set_message('_valid_emirates_id', 'The %s format is wrong. ( Format: 999-9999-9999999-9)');
			$result = FALSE;
		}
		return $result;
	}
	function _valid_uid($str){
		$result = TRUE;
		if (!preg_match(SSP_DIGIT15_REGEX, $str)) {
			$this->form_validation->set_message('_valid_uid', 'UID not Correct, Kindly use only digits upto 15 digits.');
			$result = FALSE;
		}
		return $result;
	}

}