<?php
 	header('Content-Type: text/html; charset=utf-8');

	class Sponsors extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('sponsors_model');
		}
		public function view_sponsors(){
			$this->load->library('form_validation');
			$this->load->view('show_sponsors');
		}
		public function input_sponsors(){
			$this->load->helper('form');
			$this->load->library('form_validation');

			$this->form_validation->set_rules('sponsor','Спонсор','required');
			$this->form_validation->set_rules('sector','Сектор','required');
			$this->form_validation->set_rules('country','Държава','required');
			$this->form_validation->set_rules('president','Президент','required');

			if($this->form_validation->run() === False){
				$this->view_sponsors();
			}
			else{
				$this->sponsors_model->insert_sponsors();
				echo '<h3 align="center" style="color: blue;">Въвеждането е успешно!</h3>';
			}
		}
	}