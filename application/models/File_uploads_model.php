<?php
class File_uploads_model extends CI_Model{

 
    function upload_file($data){ 

    $this->db->insert('osp_document_uploads', $data); 

    }
    function check_file($data){ 

    $this->db->select('*');
    $this->db->from('osp_document_uploads');
    $this->db->where('member_id', $data['member_id']); 
    $this->db->where('document_id', $data['document_id']); 
    $query = $this->db->get();  
    return $query->num_rows(); 
        
    }
    function update_file($data){  

        $this->db->set('file_name',  $data['file_name']);
        $this->db->where('member_id', $data['member_id']); 
        $this->db->where('document_id', $data['document_id']); 
        $this->db->update('osp_document_uploads'); 

    }

}
?>