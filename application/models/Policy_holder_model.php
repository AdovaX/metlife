<?php
class Policy_holder_model extends CI_Model{

function form_insert($data){ 

$this->db->insert('osp_policy_holders', $data);

}

}
?>