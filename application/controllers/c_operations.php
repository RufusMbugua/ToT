<?php
class C_Operations extends CI_Controller {
	var $data;
	var $count;
	public function _construct() {

		parent::_construct();
		$this -> data = '';
		$this -> load -> helper('url');
		$this -> count = 1;

	}

	public function index() {
		$data['title'] = 'Login';
		$this -> load -> view('index', $data);
	}//End of index file
	
	public function viewTrainers(){
		$data['viewName']="View Trainers";
		$this -> load -> view('view', $data);
		
	}

}