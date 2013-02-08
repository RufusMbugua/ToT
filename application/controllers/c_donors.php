<?php
class C_Donors extends CI_Controller {

	public function add() {
		$this -> load -> model('m_donors');
		$this -> m_donors -> addRecord();

		if ($this -> m_donors -> response = 'ok') {
			//notify user of success
			$data['form_id'] = "";
			$data["messageType"] = "success";
			$data['message'] = '<p><b>' . $this -> m_donors -> rowsInserted . '</b> record(s) submitted successfully';
			//redirect(base_url() . 'front/vehicles/index', 'location');
			$data['viewName'] = "Donors";
			$this -> load -> model('m_donors');

			$data['donors'] = $this -> m_donors -> viewRecords();

			$this -> load -> view('template', $data);
		} else {
			//notify user of error/failure
			echo('fail');
		}
	}

	public function view() {
		$this -> load -> model('m_donors');
		$data["messageType"] = "guide";
		$data['message'] = 'View';
		$data['donors'] = $this -> m_donors -> viewRecords();
		$data['viewName'] = "View Donors";
		$this -> load -> view('view', $data);

	}

	public function register() {
		$data["messageType"] = "guide";
		$data['message'] = 'Donors';
		$data['viewName'] = "Donors";
		$this -> load -> model('m_donors');

		$data['donors'] = $this -> m_donors -> viewRecords();

		$this -> load -> view('template', $data);
	}

	public function viewSpecific() {
		$this -> load -> model('m_donors');
		$data["messageType"] = "guide";
		$data['message'] = 'View';
		$data['donors'] = $this -> m_donors -> viewSpecificRecord('lastName', 'Mbugua');
		$data['viewName'] = "View Donors";
		$this -> load -> view('view', $data);

	}

	public function retrieve($id) {
		$this -> load -> model('m_donors');
		$this -> m_donors -> viewSpecificRecord($id);
		$cake = $this -> m_donors -> donors;

		foreach ($cake as $key => $value) {
			$data['donorNumber'] = $value['donorNumber'];
			$data['firstName'] = $value['firstName'];
			$data['lastName'] = $value['lastName'];
			$data['emailAddress'] = $value['emailAddress'];
			$data['phoneNumber'] = $value['phoneNumber'];
			$data['address'] = $value['address'];
		}
		$data["messageType"] = "guide";
		$data['message'] = 'Edit';
		$data['donors'] = $this -> m_donors -> viewRecords();
		$data['viewName'] = "Edit Donors";
		$this -> load -> view('template', $data);

	}

	public function edit($id) {
		$this -> load -> model('m_donors');
		$this -> m_donors -> editRecord($id);
		$data['viewName'] = "Donors";
		$data["messageType"] = "guide";
		$data['message'] = 'Donors';
		$data['donors'] = $this -> m_donors -> viewRecords();
		$this -> load -> view('template', $data);

	}

	public function deactivate() {
		$this -> load -> model('m_donors');
		$this -> m_donors -> deactivateRecord('lastName', 'ia');
		echo 'done';

	}

}
