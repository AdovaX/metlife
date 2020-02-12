<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pay_by_cash extends CI_Controller {

	public function index()
	{
		$data['title']="MetLife - HTML Template for insurance";


		$data['quote_number']=get_cookie('quote_number');
		$data['member_name']=get_cookie('member_name');
		//$data['member_name']=$this->session->flashdata('member_name');

		$this->load->view('header.php',$data);
		$this->load->view('pay_by_cash.php');
		$this->load->view('footer.php');
	}
	  public function sendemail()
    {
        $this->load->config('email');
        $name = $_POST['name'];
        $email = $_POST['email'];
        $product_name = $_POST['product_name'];
        $premium = $_POST['premium'];
        $policy_num = $_POST['policy_num'];
        $date=date('d-m-y');
        $amount="5367.77";
        $policy_num=get_cookie('quote_number');


        $from = $this->config->item('smtp_user');
        $to = 'deepak.dev@ridgecone.com';
        $subject = $product_name;
        $headers = "From: " . strip_tags($email) . "\r\n";
        $headers .= "Reply-To: ". strip_tags($email) . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

        $message ="

The   transaction has been successfully processed and a confirmation has been sent to your registered email ID

Receipt Number : 123456789987    ||   Date : ".$date."

MetLife Policy Number : ".$policy_num."     ||       Card Holders Name : ".$name."

Payment Currency : USD    ||        Amount : ".$amount."
-------------------------------------------------------------------------------------

This is an electronic receipt and is valid without signature.

Payment is subject to MetLife's acceptance and policy expiry terms and conditions.

If you have any questions, Kindly contact our Customer Service at 800 MetLife(8006385433)from within the UAE or at +971 4 415 4555 if you are outside of the UAE.

        ";

        if (mail($to, $subject, $message, $headers))
        {
             echo 'Your message has been correctly sent. Thank you for contacting us: well reply as soon as possible  ';
        }
        else
        {
            echo 'Ooops, Im sorry but something went wrong sending your message. Please contact us at this address: ';
        }

    }
}
