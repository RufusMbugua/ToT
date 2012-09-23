<?php

class C_Front extends CI_Controller {
	var $data;
	var $count;
	public function _construct() {

		parent::_construct();
		$this -> data = '';
		$this -> load -> helper('url');
		$this -> count = 1;

	}

	public function index() {
		$data['title'] = 'Welcome';
		$this -> load -> view('index', $data);
	}//End of index file

	public function projects(){
		$data["title"]="Projects";
		$this->load->view ("projects",$data);
	}
	public function donors(){
		$data["title"]="Donors";
		$this->load->view ("donors",$data);
	}
	public function trainers(){
		$data["title"]="Trainers";
		$this->load->view ("trainers",$data);
	}
	public function trainees(){
		$data["title"]="Trainees";
		$this->load->view ("trainees",$data);
	}

}
?>