<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Items extends CI_Controller {

		public function index(){
			$this->load->view("Items/index");
		}
		
		public function partial_index(){
			$data['items'] = $this->Item->fetch_all_items();
			$this->load->view("Items/Partial/partial_index", $data);
		}

		public function search(){
			$inputs = array();
			if(strlen($this->input->post('name')) > 0){
				$inputs += ['name' => $this->input->post('name')];
			}
			if(!empty($this->input->post('min'))){
				$inputs += ['min' => $this->input->post('min')];
			}
			if(!empty($this->input->post('max'))){
				$inputs += ['max' => $this->input->post('max')];
			}
			if($this->input->post('price_order')){
				if($this->input->post('price_order') == "High to Low Price"){
					$order = "DESC";
				}
				else{
					$order ="ASC";
				}
				$inputs += ['order' => $order];
			}
			$data['items'] = $this->Item->search($inputs);
			$this->load->view("Items/Partial/partial_index", $data);
		}
	}
?>