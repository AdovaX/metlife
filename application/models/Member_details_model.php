<?php
class Member_details_model extends CI_Model{

function form_insert($data){

$this->db->insert('osp_employee_details', $data);
 return $this->db->insert_id();

}
function duplicate_passport($passport_number){
 $this->db->select('member_id');
    $this->db->from('osp_employee_details');
    $this->db->where('pp_num' , $passport_number);
    $query = $this->db->get();
    return $query->num_rows();
}
function duplicate_applicant($relationship,$member_id){
 $this->db->select('member_id');
    $this->db->from('osp_employee_details');
    $this->db->where('relationship_to_policy_holder' , $relationship);
    $this->db->where('policy_holder_id' , $member_id);
    $query = $this->db->get();
    return $query->num_rows();
}

function get_data($id){

    $this->db->select('policy_holder_id');
    $this->db->from('osp_policy_holders');
    $this->db->where('quote_number', $id);
    $this->db->limit(1);
    $query = $this->db->get();
    return $query->result();

    }
    function Get_Member_Data($id){

    $this->db->select('*');
    $this->db->from('osp_employee_details');
    $this->db->where('policy_holder_id', $id);
    $query = $this->db->get();
    return $query->result();

    }
    function Get_Master_documet_titles(){

    $this->db->select('*');
    $this->db->from('osp_master_documents');
    $query = $this->db->get();
    return $query->result();

    }function get_valid_date($quote_number){
    $this->db->select('*');
    $this->db->from('osp_policy_holders');
    $this->db->where('quote_number', $quote_number);
    $query = $this->db->get();
    return $query->result();

    }
function get_relationship($policy_holder_id_num){

    $this->db->select('policy_holder_id');
    $this->db->from('osp_employee_details');
    $this->db->where('policy_holder_id', $policy_holder_id_num);
    $query = $this->db->get();
    return $query->result();

    }

}
?>