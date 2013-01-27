<?php
class C_Users extends CI_Controller {

	public function add() {
		$this -> load -> model('m_users');
		$this -> m_users -> addRecord();

		if ($this -> m_users -> response = 'ok') {
			//notify user of success
			$data['form_id'] = "";
			$data["messageType"] = "success";
			$data['message'] = '<p><b>' . $this -> m_users -> rowsInserted . '</b> record(s) submitted successfully';
			//redirect(base_url() . 'front/vehicles/index', 'location');
				$data['viewName'] = "Users";
			$this -> load -> model('m_users');

			$data['users'] = $this -> m_users -> viewRecords();

			$this -> load -> view('template', $data);

		} else {
			//notify user of error/failure
			echo('fail');
		}
	}

	public function view() {
		$this -> load -> model('m_users');
		$data["messageType"] = "guide";
			$data['message'] = 'View';
		$data['users'] = $this -> m_users -> viewRecords();
		$data['viewName'] = "View Users";
		$this -> load -> view('view', $data);

	}
	public function register() {
		$data["messageType"] = "guide";
		$data['message'] = 'Users';
		$data['viewName'] = "Users";
		$this -> load -> model('m_users');

		$data['users'] = $this -> m_users -> viewRecords();

		$this -> load -> view('template', $data);
	}
	public function viewSpecific() {
		$this -> load -> model('m_users');
		$data["messageType"] = "guide";
			$data['message'] = 'View';
		$data['users'] = $this -> m_users -> viewSpecificRecord('lastName','Mbugua');
		$data['viewName'] = "View Users";
		$this -> load -> view('view', $data);

	}

	public function edit() {
		$this -> load -> model('m_users');
		$this -> m_users -> editRecord();
		echo 'done';

	}

	public function deactivate() {
		$this -> load -> model('m_users');
		$this -> m_users -> deactivateRecord('lastName','ia');
		echo 'done';

	}

}
