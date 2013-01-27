<?php
class C_Authorize extends CI_Controller {
	var $data;
	var $count;
	public function _construct() {

		parent::_construct();
		$this -> data = '';
		$this -> load -> helper('url');
		$this -> count = 1;

	}

	public function index() {
		$data['title'] = 'Sign In';
		$this -> load -> view('index', $data);
	}//End of index file

	public function login() {
		
		$this -> load -> model('m_users');
		$this -> m_users -> getUser();
		if ($this -> m_users -> isUser == 'true') {

		//Get Data from Trainers or Trainees or Donors
		$userType = $this -> m_users -> userType;
		
		
			/*create session data*/
	        $newdata = array('name' => $this -> m_users -> name,'id' => $this -> m_users -> userId,'userType' => $this -> m_users -> userType, 'logged_in' => TRUE);
			$this -> session -> set_userdata($newdata);

			redirect(base_url() . 'C_front/home', 'refresh');
	

		} else {
			#use an ajax request and not a whole refresh
			$data['message']="Wrong Username";
			$data['messageType']="error";
			$this->load->view('index',$data);
		}
	}

}
