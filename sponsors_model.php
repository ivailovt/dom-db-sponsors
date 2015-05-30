<?php
	class Sponsors_model extends CI_Model{
		public function __construct(){
			parent::__construct();
		}
		public function insert_sponsors(){
			$sponsors = array(
				'sponsor' => $this->input->post('sponsor'),
				'sector' => $this->input->post('sector'),
				'country' => $this->input->post('country'),
				'president' => $this->input->post('president'),
				);
			return $this->db->insert('sponsors',$sponsors);
		}
	}