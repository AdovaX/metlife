<?php
class Nations_model extends CI_Model{

function get_nations(){
    $this->db->order_by('country_name');
    $query = $this->db->get('mnt_nationalities');


    return $query;
}

}
?>