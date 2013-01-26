<?php
class C_Project extends CI_Controller {

	public function add() {
		$this -> load -> model('m_project');
		$this -> m_project -> addRecord();

		if ($this -> m_project -> response = 'ok') {
			//notify user of success

			$data["messageType"] = "success";
			$data['message'] = '<p><b>' . $this -> m_project -> rowsInserted . '</b> record(s) submitted successfully';
			//redirect(base_url() . 'front/vehicles/index', 'location');
			$data['viewName'] = "Project";
			$this -> load -> model('m_project');
			$data['project'] = $this -> m_project -> viewRecords();
			$this -> load -> view('template', $data);

		} else {
			//notify user of error/failure
			echo('fail');
		}
	}

	public function register() {
		$data["messageType"] = "guide";
		$data['message'] = 'Project';
		$data['viewName'] = "Project";
		$this -> load -> model('m_project');

		$data['project'] = $this -> m_project -> viewRecords();

		$this -> load -> view('template', $data);
	}

	public function viewSpecific() {
		$this -> load -> model('m_project');
		$data["messageType"] = "guide";
		$data['message'] = 'View';
		$data['project'] = $this -> m_project -> viewSpecificRecord('lastName', 'Mbugua');
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
		$this -> m_project -> deactivateRecord('lastName', 'ia');
		echo 'done';

	}

}
