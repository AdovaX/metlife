<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Upload extends CI_Controller {
public function __construct() {
parent::__construct();
$this->load->model('File_uploads_model');
}
public function index(){
$this->load->view('header');
}
public function do_upload(){
    if(isset($_FILES["image_file"]["name"]))
    {
         $config['upload_path'] = './uploads/';
         $config['allowed_types'] = 'jpg|jpeg|png';
         $config['max_size']             = 5000000;
         $this->upload->initialize($config);

         if ($_FILES["image_file"]["size"] > 5000000) {
            echo "<p style='color:red;'>Sorry, your file is too large.</p>";
            return false;
        }

         if($this->upload->do_upload('image_file'))
         {   $qm_id=$this->input->post("qm_id");
             $id=explode("-",$qm_id);
             $question_id=$id[0];
             $member_id=$id[1];

             $upload_data = $this->upload->data();
             $file_name = $upload_data['file_name'];
             $data = array(
                'member_id' =>                 $member_id,
                'document_id' =>               $question_id,
                'file_name' =>                 $file_name
             );
             $file_exists=$this->File_uploads_model->check_file($data);
             if($file_exists){
             $this->File_uploads_model->update_file($data);
             echo "<p style='color:green;'>Updated</p>";
             }else{
             $this->File_uploads_model->upload_file($data);
             echo "<p style='color:green;'>Success</p>";
             }
         }
         else
         {
              echo "Error ! Invalid file.";
         }
    }  else{
        echo "Error !";
    }
}
}
?>