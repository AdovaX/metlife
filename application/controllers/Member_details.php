<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member_details extends CI_Controller {
	public $quote_number;

	function __construct() {
        parent::__construct();
		$this->load->model('Nations_model');
		$this->load->model('Member_details_model');
		$this->load->model('Mandatory_questions_model');
		$this->quote_number=get_cookie('quote_number');
    }

	public function index()
	{
		$data['title']="MetLife - HTML Template for insurance";

		$data['quote_number'] =get_cookie('quote_number');
		$quote_number=$data['quote_number'];
		$this->session->set_flashdata('quote_number', $data['quote_number']);
		$config['nations']=$this->Nations_model->get_nations();
		$data['questions']=$this->Mandatory_questions_model->get_questions();
		$data['errors'] =   $this->session->flashdata('errors');

		$valid_date=$this->Member_details_model->get_valid_date($quote_number);
		if (isset($valid_date[0]->created_date)) {
			$valid_date=$valid_date[0]->created_date;
			$data['valid_date'] =$valid_date;
		}else{
			redirect(base_url(),'refresh');
		}


		$member_id=$this->Member_details_model->get_Data($quote_number);
		$member_id = $member_id[0]->policy_holder_id;

		$data['policy_holder_id_num']=$member_id;

		$no_relation=$this->Member_details_model->get_relationship($data['policy_holder_id_num']);

        $data['no_relation']=count($no_relation);



        $date = new DateTime($valid_date);
        $date = $date->format('dd:mm:yyyy');
        $tomorrow = date('d-m-yy',strtotime("+10 days"));
        $data['valid_date']=$tomorrow;


		$data['first_name'] =                  NULL;
		$data['second_name']=                  NULL;
		$data['last_name'] =                   NULL;
		$data['gender'] =                      NULL;
		$data['dob'] =                         NULL;
		$data['marital_status'] =              NULL;
		$data['relationship_to_policy_holder']=NULL;
		$data['nationality_id'] =              NULL;
		$data['salary'] =                      NULL;
		$data['commision'] =                   NULL;
		$data['member_mobile_number'] =        NULL;
		$data['file_number'] =                 NULL;
		$data['member_registration_id'] =      NULL;
		$data['mandatory_qns'] =               NULL;
		$data['residence_country_id'] =        NULL;
		$data['eid_number'] =                  NULL;
		$data['eid_app_number'] =              NULL;
		$data['uid_num'] =                     NULL;
		$data['pp_num'] =                      NULL;
		$data['applicant_email'] =             NULL;
		$data['residence_emirate_id'] =        NULL;
		$data['work_emirate_id'] =             NULL;
		$data['visa_emirate_id'] =             NULL;
		$data['eid_expiry_date'] =             NULL;
		$data['pp_expiry_date'] =              NULL;
		$data['business_residence_address'] =  NULL;
		$data['height'] =                      NULL;
		$data['weight'] =                      NULL;
		$data['principle_id'] =                NULL;
		$data['policy_holder_id'] =            NULL;


		$this->load->view('header.php',$data);
		$this->load->view('member_details.php',$config);
		$this->load->view('footer.php');
	}
	function data()
	{

		$data['questions']=$this->Mandatory_questions_model->get_questions();
		$quote_number=$this->quote_number;
		 if($quote_number==NULL){
			 redirect('/Policy_holder');
		 }
		$member_id=$this->Member_details_model->get_Data($quote_number);
		$member_id = $member_id[0]->policy_holder_id;

		$data['first_name'] =                  $this->input->post('first_name');
		$data['second_name']=                  $this->input->post('second_name');
		$data['last_name'] =                   $this->input->post('last_name');
		$data['gender'] =                      $this->input->post('gender');
		$data['dob'] =                         $this->input->post('dob');
		$data['marital_status'] =              $this->input->post('marital_status');
		$data['relationship_to_policy_holder']=$this->input->post('relationship_to_policy_holder');
		$data['nationality_id'] =              $this->input->post('nationality_id');
		$data['salary'] =                      $this->input->post('salary');
		$data['commision'] =                   0;
		$data['member_mobile_number'] =        $this->input->post('member_mobile_number');
		$data['file_number'] =                 $this->input->post('file_number');
		$data['member_registration_id'] =      0;
		$data['mandatory_qns'] =               0;
		$data['residence_country_id'] =        $this->input->post('country_of_residence');
		$data['eid_number'] =                  $this->input->post('emirates_id');
		$data['eid_app_number'] =              $this->input->post('eid_application_no');
		$data['uid_num'] =                     $this->input->post('uid_number');
		$data['pp_num'] =                      $this->input->post('passport_number');
		$data['applicant_email'] =             $this->input->post('applicant_email');
		$data['residence_emirate_id'] =        $this->input->post('residence_emirate');
		$data['work_emirate_id'] =             $this->input->post('work_emirate');
		$data['visa_emirate_id'] =             $this->input->post('emirate_visa');
		$data['eid_expiry_date'] =             $this->input->post('eid_expiry_date');
		$data['pp_expiry_date'] =              $this->input->post('member_registration_exp_date');
		$data['business_residence_address'] =  $this->input->post('business_residence_address');
		$data['height'] =                      $this->input->post('height');
		$data['weight'] =                      $this->input->post('weight');
		$data['principle_id'] =                0;
		$data['policy_holder_id'] =            $member_id;

		if ($data['eid_number'] == NULL ) {
			$this->form_validation->set_rules('eid_application_no', 'Emirates ID Application number', 'required|trim|callback__eid_check_new_brn');
		}else if ($data['eid_app_number']==NULL) {
			$this->form_validation->set_rules('emirates_id', 'emirates id number', 'required|trim|callback__eid_check');
		}else if ($data['eid_number'] == NULL && $data['eid_app_number']==NULL) {
			$this->form_validation->set_rules('eid_application_no', 'Emirates ID Application number', 'required|trim|callback__eid_check_new_brn');
			$this->form_validation->set_rules('emirates_id', 'emirates id number', 'required|trim|callback__eid_check');
		}
		else{
			$this->form_validation->set_rules('eid_application_no', 'Emirates ID Application number', 'required|trim|callback__eid_check_new_brn');
			$this->form_validation->set_rules('emirates_id', 'emirates id number', 'required|trim|callback__eid_check');
		}


		$this->form_validation->set_rules('first_name', 'First name as in passport ', 'required|trim|callback__check_name');
		$this->form_validation->set_rules('country_of_residence', 'current country of residence ', 'required|trim');
		$this->form_validation->set_rules('second_name', 'second name as in passport', 'required|trim|callback__check_name');

		$this->form_validation->set_rules('last_name', 'last name as in passport', 'required|trim|callback__check_name');


		$this->form_validation->set_rules('gender', 'gender', 'required|trim');
		$this->form_validation->set_rules('dob', 'dob', 'required|trim');
		$this->form_validation->set_rules('uid_number', 'uid number', 'required|trim|callback__check_uid');
		$this->form_validation->set_rules('marital_status', 'marital status', 'required|trim');
		$this->form_validation->set_rules('relationship_to_policy_holder', 'relationship to policy holder', 'required|trim');
		$this->form_validation->set_rules('passport_number', 'passport_number', 'required|trim|callback__is_valid_pp');
		$this->form_validation->set_rules('nationality_id', 'nationality id', 'required|trim');
		$this->form_validation->set_rules('applicant_email', 'applicant email address', 'required|trim|valid_email');
		$this->form_validation->set_rules('salary', 'salary', 'required|trim');
		$this->form_validation->set_rules('residence_emirate', 'residence emirate', 'required|trim');
		$this->form_validation->set_rules('work_emirate', 'work emirate', 'required|trim');
		$this->form_validation->set_rules('member_mobile_number', 'member mobile number', 'required|trim|callback__valid_mobile');
		$this->form_validation->set_rules('emirate_visa', 'emirate of visa', 'required|trim');
		$this->form_validation->set_rules('file_number', 'file number', 'required|trim');
		$this->form_validation->set_rules('eid_expiry_date', 'eid expiry date', 'required|trim');
		$this->form_validation->set_rules('member_registration_exp_date', 'member registration exp date', 'required|trim');
		$this->form_validation->set_rules('business_residence_address', 'business residence address', 'required|trim|min_length[10]|max_length[100]');
		$this->form_validation->set_rules('height', 'height of Insured ', 'required|trim');
		$this->form_validation->set_rules('weight', 'weight of Insured ', 'required|trim');



		if ($this->form_validation->run()==FALSE) {
		$data['title']="MetLife -Error";
		$this->session->set_flashdata('errors', validation_errors());
		$data['quote_number'] =get_cookie('quote_number');
		$quote_number=$data['quote_number'];
		$this->session->set_flashdata('quote_number', $data['quote_number']);
		$config['nations']=$this->Nations_model->get_nations();
		$data['errors'] =   $this->session->flashdata('errors');


		$valid_date=$this->Member_details_model->get_valid_date($quote_number);
		if (isset($valid_date[0]->created_date)) {
			$valid_date=$valid_date[0]->created_date;
			$data['valid_date'] =$valid_date;
		}else{
			redirect(base_url(),'refresh');
		}
		$member_id=$this->Member_details_model->get_Data($quote_number);
		$member_id = $member_id[0]->policy_holder_id;

		$data['policy_holder_id_num']=$member_id;

		$no_relation=$this->Member_details_model->get_relationship($data['policy_holder_id_num']);

        $data['no_relation']=count($no_relation);

		$this->load->view('header.php',$data);
		$this->load->view('member_details.php',$config);
		$this->load->view('footer.php');

		}else{

			$data = array(
				'first_name' =>                 $this->input->post('first_name'),
				'second_name' =>                $this->input->post('second_name'),
				'last_name' =>                  $this->input->post('last_name'),
				'gender' =>                     $this->input->post('gender'),
				'dob' =>                        $this->input->post('dob'),
				'marital_status' =>             $this->input->post('marital_status'),
				'relationship_to_policy_holder' =>$this->input->post('relationship_to_policy_holder'),
				'nationality_id' =>             $this->input->post('nationality_id'),
				'salary' =>                     $this->input->post('salary'),
				'commision' =>                  0,
				'member_mobile_number' =>       $this->input->post('member_mobile_number'),
				'file_number' =>                $this->input->post('file_number'),
				'member_registration_id' =>     0,
				'mandatory_qns' =>              0,
				'residence_country_id' =>       $this->input->post('country_of_residence'),
				'eid_number' =>                 $this->input->post('emirates_id'),
				'eid_app_number' =>             $this->input->post('eid_application_no'),
				'uid_num' =>                    $this->input->post('uid_number'),
				'pp_num' =>                     $this->input->post('passport_number'),
				'applicant_email' =>            $this->input->post('applicant_email'),
				'residence_emirate_id' =>       $this->input->post('residence_emirate'),
				'work_emirate_id' =>            $this->input->post('work_emirate'),
				'visa_emirate_id' =>            $this->input->post('emirate_visa'),
				'eid_expiry_date' =>            $this->input->post('eid_expiry_date'),
				'pp_expiry_date' =>             $this->input->post('member_registration_exp_date'),
				'business_residence_address' => $this->input->post('business_residence_address'),
				'height' =>                     $this->input->post('height'),
				'weight' =>                     $this->input->post('weight'),
				'principle_id' =>               0,
				'policy_holder_id' =>           $member_id

				);
			$member_first_name=$this->input->post('first_name');



		    	if($this->input->cookie('member_name')==''){
                $this->input->set_cookie('member_name',$member_first_name,'3600');
                }

			$this->session->set_flashdata('member', $member_first_name);




                $duplicate_passport=$this->Member_details_model->duplicate_passport($this->input->post('passport_number'));

                $duplicate_applicant=$this->Member_details_model->duplicate_applicant($this->input->post('relationship_to_policy_holder'));

                if ($duplicate_passport>0 OR $duplicate_applicant >1) {
                 redirect ( base_url().'Doc_upload');
                }else{
                 $new_member_id=$this->Member_details_model->form_insert($data);
                }


				$this->load->model('Mandatory_questions_model');
				$data['anwers_from_user']=1111;
				if($data['gender']=="Female"){
					$questions=$this->Mandatory_questions_model->get_questions();
					$no_of_questions=count($questions);
					 $data['anwers_from_user']=$this->input->post("answer");
					 $anwers_from_user=$data['anwers_from_user'];

					 for($i=0;$i<$no_of_questions;$i++){
						$data = array(
							'member_id' => $new_member_id  ,
							'question_id' =>  $i+1,
							'answers' => $anwers_from_user[$i]
						);
						$this->Mandatory_questions_model->insert_ans($data);
					 }
				}
			redirect ( base_url().'Doc_upload');
		}
	}

	public function _check_name($str) {
        if ($str != '' && !preg_match(NAME_REGEX, $str)) {
            $this->form_validation->set_message('_check_name', 'Only characters are  allowed in %s.');
            return FALSE;
        }
        return TRUE;
	}
	public function _eid_check($str) {
            if (!preg_match(EID_REGEX, $str)) {
                $this->form_validation->set_message('_eid_check', 'The %s format is wrong. ( Format: 999-9999-9999999-9)');
                return FALSE;
            }
            $str_parts = explode('-', $str);
            $dob = $this->input->post('dob');
            $dob_parts = explode('-', $dob);
            if ($str_parts[1] != $dob_parts[0]) {
                $this->form_validation->set_message('_eid_check', 'Either DOB or Emirates ID is wrong.');
                return FALSE;
            }
        return TRUE;
	}
	public function _eid_check_new_brn($str) {
            if (!preg_match(EID_REGEX, $str)) {
                $this->form_validation->set_message('_eid_check_new_brn', 'The %s format is wrong. ( Format: 333-3333-3333333-3)');
                return FALSE;
            }
        return TRUE;
	}
	public function _check_uid($str) {
        if (!empty($str)) {
			$nationality_id = $this->input->post('nationality_id');
			$ssp_gcc_country_ids=config_item('ssp_gcc_country_ids');
            if (in_array($nationality_id, $ssp_gcc_country_ids)) {
                if (!preg_match(SSP_ALPHADIGIT15_REGEX, $str)) {
                    $this->form_validation->set_message('_check_uid', 'UID not Correct, Kindly do not use spaces and use upto 15 characters.');
                    return FALSE;
                }
            } else {
                if (!preg_match(SSP_DIGIT15_REGEX, $str)) {
                    $this->form_validation->set_message('_check_uid', 'UID not Correct, Kindly use only digits upto 15 digits.');
                    return FALSE;
                }
            }
        }
        return TRUE;
	}
	function _is_valid_pp($value) {
        $result = TRUE;
        $value = trim($value);
        if (!empty($value)) {
            if (!preg_match(SSP_ALPHADIGIT15_REGEX, $value)) {
				$this->form_validation->set_message('_is_valid_pp', 'Passport number not Correct, Kindly do not use spaces and use upto 15 characters.');
				return FALSE;
            }
        }
        return TRUE;
	}
	public function _valid_mobile($value) {
        $value = trim($value);
        if (!empty($value)) {
            if (!preg_match(DHA_MOBILE_REGEX, $value)) {
				$this->form_validation->set_message('_valid_mobile', 'Format is not Correct, Kindly rectify the Mobile Number Format.');
				return FALSE;
            }
        }
        return TRUE;
    }
}
