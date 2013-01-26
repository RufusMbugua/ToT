<?php
class C_Project extends CI_Controller {

	public function add() {
		$this -> load -> model('m_project');
		$this -> m_project -> addRecord();

		if ($this -> m_project -> response = 'ok') {
			//notify user of success
			$data['form_id'] = "";
			$data["messageType"] = "success";
			$data['message'] = '<p><b>' . $this -> m_project -> rowsInserted . '</b> record(s) submitted successfully';
			//redirect(base_url() . 'front/vehicles/index', 'location');
			$data['project'] = $this -> m_project -> viewRecords();
			$data['viewName'] = "View Project";
			$this -> load -> view('view', $data);

		} else {
			//notify user of error/failure
			echo('fail');
		}
	}

	public function view() {
		$this -> load -> model('m_project');
		$data["messageType"] = "guide";
			$data['message'] = 'View';
		$data['project'] = $this -> m_project -> viewRecords();
		$data['viewName'] = "View Project";
		$this -> load -> view('view', $data);

	}
	
	public function viewSpecific() {
		$this -> load -> model('m_project');
		$data["messageType"] = "guide";
			$data['message'] = 'View';
		$data['project'] = $this -> m_project -> viewSpecificRecord('lastName','Mbugua');
		$data['viewName'] = "View Project";
		$this -> load -> view('view', $data);

	}

	public function edit() {
		$this -> load -> model('m_project');
		$this -> m_project -> editRecord();
		echo 'done';

	}

	public function deactivate() {
		$this -> load -> model('m_project');
		$this -> m_project -> deactivateRecord('lastName','ia');
		echo 'done';

	}

}
