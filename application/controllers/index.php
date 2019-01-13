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
		
		$this->load->view('includes/header',$data);
		$this->load->view('includes/leftmenu',$data);
		$this->load->view('dashboard',$data);
		$this->load->view('includes/footer',$data);
	}
	
	
	public function allleads(){
		// Datatables Variables
		$draw = intval($this->input->get("draw"));
		$start = intval($this->input->get("start"));
		$length = intval($this->input->get("length"));
		$leads = $this->lead_model->get_allleads();

		$data = array();

		foreach($leads->result() as $k=>$r) {
			$si_no=$k+1;
			$data[] = array(
				'<input type="checkbox" class="sub_chk" data-id="'.$r->lead_id.'">',
				'<a style="text-decoration: none; color:black" href="'.base_url('index/details/'.$r->lead_id).'">'.$si_no.'</a>',
				'<a style="text-decoration: none; color:black" href="'.base_url('index/details/'.$r->lead_id).'">'.$r->firstname.' '.$r->lastname.'</a>',
				'<a style="text-decoration: none; color:black" href="'.base_url('index/details/'.$r->lead_id).'">'.$r->email.'</a>',
				'<a style="text-decoration: none; color:black" href="'.base_url('index/details/'.$r->lead_id).'">'.date("d-M-Y h:i:s", strtotime($r->added_date)).'</a>'
			);
		}

		$output = array(
			"draw" => $draw,
			"recordsTotal" => $leads->num_rows(),
			"recordsFiltered" => $leads->num_rows(),
			"data" => $data
		);
		echo json_encode($output);
		exit();
	}
	
	public function deletlead(){
		$ids	= $this->input->post('ids');
		$prodcts=explode(",",$ids);
		foreach($prodcts as $k=>$v){
			$this->lead_model->deletelead($v);
		}
		return true;
	}
	
	public function details($lead_id){
		$data=array();
		$data['title']='JJSoft || Lead Details';
		
		$lead_details=$this->lead_model->get_lead($lead_id);
		
		$lead_id_db	= $lead_details->lead_id;
		$firstname	= $lead_details->firstname;
		$lastname	= $lead_details->lastname;
		$email		= $lead_details->email;
		$phone		= $lead_details->phone;
		$address	= $lead_details->address;
		$squarefoot	= $lead_details->squarefoot;
		$added_date	= $lead_details->added_date;
		
		$data['lead_id']	= $lead_id;
		$data['firstname']	= $firstname;
		$data['lastname']	= $lastname;
		$data['email']		= $email;
		$data['phone']		= $phone;
		$data['address']	= $address;
		$data['squarefoot']	= $squarefoot;
		$data['added_date']	= date("d-M-Y h:i:s", strtotime($added_date));
		
		$this->load->view('includes/header',$data);
		$this->load->view('includes/leftmenu',$data);
		$this->load->view('details',$data);
		$this->load->view('includes/footer',$data);
	}
}