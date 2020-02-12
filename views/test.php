<?php


function _validate_member_field($key, $value, $member, $policy_city,$new_born_addn,$endorsement_id,$ext_mem_ref) {
    $member_fields = $this->config->item('ssp_member_fields_new');
    $result = TRUE;
    switch ($key) {
        case 'reference_id':
            $result = $this->_required_field($member_fields[$key], $value);
            if($result === TRUE){
                $result = $this->_is_unique($member_fields[$key], $value, $key);
            }
            if ($result === TRUE && !empty($value)) {
                $result = $this->_is_valid_ref_num($member_fields[$key], $value);
            }
            break;
        case 'card_num' :
            break;
        case 'first_name':
            $result = $this->_required_field($member_fields[$key], $value);
            if ($result === TRUE && !empty($value)) {
                $result = $this->_alpha_field($member_fields[$key], $value, 50);
            }
            if ($result === TRUE) {
                $result = $this->_is_correct_length($member_fields[$key], $value, 0, 50);
            }
            break;
        case 'last_name':
            $result = $this->_required_field($member_fields[$key], $value);
            if ($result === TRUE && !empty($value)) {
                $result = $this->_alpha_field($member_fields[$key], $value, 50);
            }
            if ($result === TRUE) {
                $result = $this->_is_correct_length($member_fields[$key], $value, 0, 50);
            }
            break;
        case 'second_name':
            $result = $this->_alpha_field($member_fields[$key], $value, 20);
            if ($result === TRUE) {
                $result = $this->_is_correct_length($member_fields[$key], $value, 0, 20);
            }
            break;
        case 'eid_num' :
            $result = true;
            if(!$new_born_addn){
                $result = $this->_is_valid_eid($member_fields[$key], $value, $member);
                if($result === TRUE){
                    $result = $this->_is_unique($member_fields[$key], $value, $key);
                }
            } else if($value!=null){
                $result = $this->_is_valid_eid($member_fields[$key], $value, $member);
                if($result === TRUE){
                    $result = $this->_is_unique($member_fields[$key], $value, $key);
                }
            }
            break;
        case 'eid_app_num' :
            if($member['visa_emirate_id']!=10){
                $result = $this->_is_valid_eid_appnum($member_fields[$key], $value, $member);
            }
            break;
        case 'uid_num':
            if($member['visa_emirate_id']!=10){
                $result = $this->_required_field($member_fields[$key], $value);
            }
            if ($result === TRUE && $value!='') {
                if(!$new_born_addn){
                    $result = $this->_is_valid_uid($member_fields[$key], $value, $member);
                }else if($value!=null){
                    $result = $this->_is_valid_uid($member_fields[$key], $value, $member);
                }
            }
            break;
        case 'pp_num':
            if($member['visa_emirate_id']!=10){
                $result = $this->_required_field($member_fields[$key], $value);
            }
            if ($result === TRUE && $value!='') {
                if(!$new_born_addn){
                    $result = $this->_is_valid_pp($member_fields[$key], $value, $member);
                 }else if($value!=null){
                    $result = $this->_is_valid_pp($member_fields[$key], $value, $member);
                 }
            }
            break;
        case 'dob':
            $result = $this->_required_field($member_fields[$key], $value);
            if (($result === TRUE)&&($new_born_addn)) {
                $result = $this->_valid_date_new_born($member_fields[$key], $value);
            }else if($result === TRUE){
                $result = $this->_valid_date($member_fields[$key], $value);
            }
            break;
        case 'gender':
            $message = ", kindly use MALE or FEMALE";
            $result = $this->_is_correct_value($member_fields[$key], $value, $member['gender_text'], TRUE, $message);
            break;
        case 'relation':
            if($new_born_addn){
                 $message = ", kindly use (CHILD)";
                $result = $this->_is_correct_relation_value($member_fields[$key], $value, $member['relation_text'], TRUE, $message);
            }else{
                $message = ", kindly use (APPLICANT , EMPLOYEE, SPOUSE, CHILD, OTHER)";
                $result = $this->_is_correct_value($member_fields[$key], $value, $member['relation_text'], TRUE, $message);
            }
            break;
        case 'marital_status':
            $message = ", kindly use MARRIED or SINGLE";
            $result = $this->_is_correct_value($member_fields[$key], $value, $member['marital_status_text'], TRUE, $message);
            break;
        case 'category':
            //$result = $this->_required_field($member_fields[$key], $value);
//                $message = ", kindly refer to details sheet for Value.";
//                $result = $this->_is_correct_value($member_fields[$key], $value, $member['category'], TRUE, $message);
            break;
        case 'mobile':
            $result = $this->_required_field($member_fields[$key], $value);
            if ($result === TRUE && !empty($value)) {
                $result = $this->_valid_mobile($member_fields[$key], $value);
            }
            break;
        case 'landline':
            $result = $this->_valid_landline($member_fields[$key], $value);
//                if ($result === TRUE) {
//                    if ($member['relation'] == 0 && trim($value) == '' && trim($member['mobile']) == '') {
//                        $result = 'Either \'Mobile Number\' or \'Landline Number\' is required.';
//                    }
//                }
            break;
        case 'email':
            $result = $this->_required_field($member_fields[$key], $value);
            if ($result === TRUE) {
                $result = $this->_valid_member_email($member_fields[$key], $value);
            }
            break;
        case 'nationality_id':
            $message = ", kindly refer to details sheet for Value.";
            $result = $this->_is_correct_value($member_fields[$key], $value, $member['nationality'], TRUE, $message);
            break;
        case 'residence_country_id':
            $message = ", kindly refer to details sheet for Value.";
            $result = $this->_is_correct_value($member_fields[$key], $value, $member['residence_country'], TRUE, $message);
            break;
        case 'residence_emirate_id':
            $message = ", kindly refer to details sheet for Value.";
            $flag = ($member['visa_emirate_id'] != 10) ? TRUE : FALSE;
            $result = $this->_is_correct_value($member_fields[$key], $value, $member['residence_emirate'], $flag, $message);
            break;
        case 'residence_location_id':
            $message = ", kindly refer to details sheet for Value.";
            $flag = ($member['visa_emirate_id'] == ENDO_DUBAI_EMIRATE_ID) ? TRUE : FALSE;
            $result = $this->_is_correct_value($member_fields[$key], $value, $member['residence_location'], $flag, $message);
            break;
        case 'work_emirate_id':
//                if ($member['relation'] == 1 || $member['relation'] == 100) {
            $flag = ($member['visa_emirate_id'] != 10) ? TRUE : FALSE;
            $message = ", kindly refer to details sheet for Value.";
            $result = $this->_is_correct_value($member_fields[$key], $value, $member['work_emirate'], $flag, $message);
//                }
            break;
        case 'work_location_id':
            $message = ", kindly refer to details sheet for Value.";
            $flag = ($member['visa_emirate_id'] == ENDO_DUBAI_EMIRATE_ID) ? TRUE : FALSE;
            $result = $this->_is_correct_value($member_fields[$key], $value, $member['work_location'], $flag, $message);
            break;
        case 'visa_emirate_id':
            $message = ", kindly refer to details sheet for Value.";
            $result = $this->_is_correct_value($member_fields[$key], $value, $member['visa_emirate'], TRUE, $message);
            break;
        case 'salary_band':
//                if ($member['relation'] == 0) {
            $message = ", kindly refer to details sheet for Value.";
            $flag = ($member['visa_emirate_id'] != 10) ? TRUE : FALSE;
            $result = $this->_is_correct_value($member_fields[$key], $value, $member['salary_band_text'], $flag, $message);
//                }
            break;
        case 'commision':
//                if ($member['relation'] == 0) {
            $message = ", kindly use Yes or No.";
            $flag = ($member['visa_emirate_id'] == ENDO_DUBAI_EMIRATE_ID) ? TRUE : FALSE;
            $result = $this->_is_correct_value($member_fields[$key], $value, $member['commision_text'], $flag, $message);
//                }
            break;
        case 'currently_insured':
            $message = ", kindly use Yes or No.";
            $result = $this->_is_correct_value($member_fields[$key], $value, $member['currently_insured_text'], TRUE, $message);
            break;
        case 'enrollment_date':
            $endorsement = $this->endorsements->get($endorsement_id);
               $result = $this->_required_field($member_fields[$key], $value, $policy_city);
            if ($result === TRUE) {
                $result = $this->_valid_enrl_date($member_fields[$key], $value,$endorsement);
            }
            break;
        case 'visa_issuance_date':
            if (!empty($value)) {
                $result = $this->_valid_date($member_fields[$key], $value, FALSE);
            }
            break;
        case 'visa_expiry_date':
            if (!empty($value)) {
               $result = $this->_valid_date($member_fields[$key], $value, FALSE);
           }
            break;
        case 'member_reference_number':
            $result = $this->_required_field($member_fields[$key], $value);
            break;
        case 'principle_reference_number':
            $result = $this->_required_field($member_fields[$key], $value);
            if($new_born_addn && $result === TRUE){
               $message = ",Principle reference number should not be equal to member reference number for new born addition";
                $result = $this->_is_correct_pri_ref_new_brn($member_fields[$key], $value, $member['member_reference_number'], TRUE, $message);
            }else if(!$new_born_addn && $result === TRUE){
                if($value!=$member['member_reference_number']){
                    if(in_array($value, $ext_mem_ref)){
                        $result = TRUE;
                    }else{
                        $result = $this->_is_correct_mn_member_ref($value,$endorsement_id);
                    }
                }
            }
            break;
        case 'residency_visa_number':
            $message = ", kindly refer to details sheet for Value.";
            $flag = ($member['visa_emirate_id'] == ENDO_DUBAI_EMIRATE_ID) ? TRUE : FALSE;
            if(!$new_born_addn){
                $result = $this->_is_correct_res_vis_num($member_fields[$key], $value, $member, $flag, $message);
            }else if($value!=null){
                $result = $this->_is_correct_res_vis_num($member_fields[$key], $value, $member, FALSE, $message);
            }
            break;
        case 'height':
           $result = $this->_num_dec_field($member_fields[$key], $value);
           break;
        case 'weight':
           $result = $this->_num_dec_field($member_fields[$key], $value);
           break;
        case 'member_classification':
//                if ($member['relation'] == 0) {
            $message = ", kindly use VIP or STANDARD.";
            $flag = FALSE;
            $result = $this->_is_correct_value($member_fields[$key], $value, $member['member_classification_text'], $flag, $message);
//                }
            break;
        case 'birth_certificate_number':
            $result = true;
            if(!empty($member['dob'])){
            $format = "d-m-Y";
            $from = DateTime::createFromFormat($format, $member['dob']);
            $to = new DateTime('today');
            $dateDiff = $from->diff($to);

            $eid_num_arr = explode('-', $member['eid_num']);
            if($eid_num_arr[0]==784){
                $eid_check = false;
            }else{
               $eid_check = true;
            }
                if(($new_born_addn)&&(($member['eid_num']=='333-3333-3333333-3')&&($member['pp_num']=="NOVALUE")&&($member['uid_num']=="NOVALUE"))){
                    if(/*$member['relation_text']=='CHILD' &&*/ $dateDiff->invert == 0 && $dateDiff->days < 60 /*&& $eid_check*/){
                        $result = $this->_required_field($member_fields[$key], $value, $key);
                    }
                }
            }
            break;
        case 'occupation_id':
            $result = $this->_required_field($member_fields[$key], $value);
            break;
        default :
            break;
    }
    return $result;
}


  function _check_name($str) {
    if ($str != '' && !preg_match(NAME_REGEX, $str)) {
        $this->form_validation->set_message('_check_name', 'Only characters are  allowed in %s.');
        return FALSE;
    }
    return TRUE;
}

























?>