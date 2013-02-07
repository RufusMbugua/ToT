<?php
class C_Contribution extends CI_Controller {

	public function add() {
		$this -> load -> model('m_contribution');
		$this -> m_contribution -> addRecord();

		if ($this -> m_contribution -> response = 'ok') {
			//notify user of success
			$data['form_id'] = "";
			$data["messageType"] = "success";
			$data['message'] = '<p><b>' . $this -> m_contribution -> rowsInserted . '</b> record(s) submitted successfully';
			//redirect(base_url() . 'front/vehicles/index', 'location');
			$data['viewName'] = "Contribution";
			$this -> load -> model('m_contribution');

			$data['contribution'] = $this -> m_contribution -> viewRecords();

			$this -> load -> view('template', $data);
		} else {
			//notify user of error/failure
			echo('fail');
		}
	}

	public function view() {
		$this -> load -> model('m_contribution');
		$data["messageType"] = "guide";
		$data['message'] = 'View';
		$data['contribution'] = $this -> m_contribution -> viewRecords();
		$data['viewName'] = "View Contribution";
		$this -> load -> view('view', $data);

	}

	public function register() {
		$data["messageType"] = "guide";
		$data['message'] = 'Contribution';
		$data['viewName'] = "Contribution";
		$this -> load -> model('m_contribution');

		$data['contribution'] = $this -> m_contribution -> viewRecords();

		$this -> load -> view('template', $data);
	}

	public function viewSpecific() {
		$this -> load -> model('m_contribution');
		$data["messageType"] = "guide";
		$data['message'] = 'View';
		$data['contribution'] = $this -> m_contribution -> viewSpecificRecord('lastName', 'Mbugua');
		$data['viewName'] = "View Contribution";
		$this -> load -> view('view', $data);

	}

	public function edit() {
		$this -> load -> model('m_contribution');
		$this -> m_contribution -> editRecord();
		echo 'done';

	}

	public function deactivate() {
		$this -> load -> model('m_contribution');
		$this -> m_contribution -> deactivateRecord('lastName', 'ia');
		echo 'done';

	}

}
