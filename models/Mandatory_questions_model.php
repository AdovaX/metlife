<?php
class Mandatory_questions_model extends CI_Model{

function get_questions(){ 

    $query = $this->db->get('osp_mandatory_questions');   
    return $query->result();
}
function insert_ans($data){ 

    $this->db->insert('osp_mandatory_questions_answers', $data); 
    }

}
?>