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

	public function login() {
		$data["title"] = "Login";
		$data['message'] = "Please Login";
		$data['messageType'] = "guide";
		$this -> load -> view("login", $data);
	}
	
	public function logout() {
		$this->session->sess_destroy();
		$data['title'] = 'Welcome';
		$this -> load -> view('index', $data);
		
	}
	

public function register() {
		$data["messageType"] = "guide";
		$data['message'] = 'User';
		$data['viewName'] = "User";

		$data['users'] = '';
		
		$this -> load -> view('template', $data);
	}

public function aboutus() {
		$data["messageType"] = "guide";
		$data['message'] = 'AboutUs';
		$data['viewName'] = "AboutUs";

		$data['users'] = '';
		
		$this -> load -> view('template', $data);
	}

public function contactus() {
		$data["messageType"] = "guide";
		$data['message'] = 'ContactUs';
		$data['viewName'] = "ContactUs";

		$data['users'] = '';
		
		$this -> load -> view('template', $data);
	}

public function report() {
		$data["messageType"] = "guide";
		$data['message'] = 'Reports';
		$data['viewName'] = "Reports";

		$data['users'] = '';
		
		$this -> load -> view('template', $data);
	}

}
?>