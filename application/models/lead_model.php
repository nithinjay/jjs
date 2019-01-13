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
	}