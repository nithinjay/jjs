<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	/**
	* Class : user (LeadModel)
	* Lead class Model for User.
	* @author : Nithin Jay
	* @version : 1.1
	* @since : 13 January 2019
	*/
	class Lead_model extends CI_Model {
		
		public function __construct(){
			parent::__construct();
		}
		
		function addlead($data){
			$this->db->insert('leads',$data);
			return $this->db->insert_id();
		}
		
		function get_allleads(){
			$this->db->select('*');
			$this->db->from('leads');
			$this->db->order_by('firstname','ASC');
			$query = $this->db->get();
			return $query;
		}
		
		function deletelead($lead_id){
			$this->db->where('lead_id',$lead_id);
			return $this->db->delete('leads');		
		}
	}