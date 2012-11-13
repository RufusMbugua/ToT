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
		$data['title'] = 'Welcome';
		$data['content'] = "<p>Cakes Delights</p>";
		$this -> load -> view('index', $data);
	}//End of index file

	public function login() {
		
		$this -> load -> model('m_trainers');
		$this -> m_trainers -> getUser();
		if ($this -> m_trainers -> isUser == 'true') {

		
			/*create session data*/
			$newdata = array('name' => $this -> m_trainers -> name, 'logged_in' => TRUE);
			$this -> session -> set_userdata($newdata);

			redirect(base_url() . 'C_front/home', 'refresh');
	

		} else {
			#use an ajax request and not a whole refresh
			
			echo ('Error');
		}
	}

}
