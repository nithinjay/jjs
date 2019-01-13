<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

	/**
	* Class : Index (IndexController)
	* User class to control user login.
	* @author : Nithin Jay
	* @version : 1.1
	* @since : 13 January 2019
	*/
	
	
	public function __construct(){
		parent::__construct();
		$this->load->model('lead_model');
	}
	
	public function index(){
		$data	= array();
		$data['title']	= 'JJSoft || Add Leads';
		
		$this->load->library('form_validation');            
		$this->form_validation->set_rules('email','Email','trim|required');
		if($this->input->post()){
			if($this->form_validation->run() == TRUE){	
				$fname		= $this->security->xss_clean($this->input->post('fname'));
				$lname 		= $this->security->xss_clean($this->input->post('lname'));
				$email 		= $this->security->xss_clean($this->input->post('email'));
				$phone 		= $this->security->xss_clean($this->input->post('phone'));
				$address 	= $this->security->xss_clean($this->input->post('address'));
				$squarefoot = $this->security->xss_clean($this->input->post('squarefoot'));
				$lead_data=array(
					'firstname'		=> $fname,
					'lastname'		=> $lname,
					'email'			=> $email,
					'phone'			=> $phone,
					'address'		=> $address,
					'squarefoot'	=> $squarefoot,
					'added_date'	=> date('Y-m-d h:i:s')
				);
					
				$lead_id = $this->lead_model->addlead($lead_data);
				
				if($lead_id > 0){
					
					$this->session->set_flashdata('message_name', 'Added new lead successfully.');
					redirect('index/dashboard');
				}
				else
				{
					$this->session->set_flashdata('message_name', 'Sorry lead is not added. Please try again.');
				}
			}
		}
		$this->load->view('includes/header',$data);
		$this->load->view('includes/leftmenu',$data);
		$this->load->view('landing',$data);
		$this->load->view('includes/footer',$data);
	}
	
	public function dashboard(){
		$data	= array();
		$data['title']	= 'JJSoft || Dashboard';
		
		
		$this->load->view('dashboard',$data);
		
	}
}