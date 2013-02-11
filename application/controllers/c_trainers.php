<?php
class C_Trainers extends CI_Controller {

	public function add() {
		$this -> load -> model('m_trainers');
		$this -> m_trainers -> addRecord();

		if ($this -> m_trainers -> response = 'ok') {
			//notify user of success
			$data['form_id'] = "";
			$data["messageType"] = "success";
			$data['message'] = '<p><b>' . $this -> m_trainers -> rowsInserted . '</b> record(s) submitted successfully';
			//redirect(base_url() . 'front/vehicles/index', 'location');
			$data['viewName'] = "Trainers";
			$this -> load -> model('m_trainers');

			$data['trainers'] = $this -> m_trainers -> viewRecords();

			$this -> load -> view('template', $data);

		} else {
			//notify user of error/failure
			echo('fail');
		}
	}

	public function view() {
		$this -> load -> model('m_trainers');
		$data["messageType"] = "guide";
		$data['message'] = 'View';
		$data['trainers'] = $this -> m_trainers -> viewRecords();
		$data['viewName'] = "Trainers";
		$this -> load -> view('view', $data);

	}

	public function register() {
		$data["messageType"] = "guide";
		$data['message'] = 'Trainers';
		$data['viewName'] = "Trainers";
		$this -> load -> model('m_trainers');

		$data['trainers'] = $this -> m_trainers -> viewRecords();
		
		$this -> load -> view('template', $data);
	}

	public function viewSpecific() {
		$this -> load -> model('m_trainers');
		$data["messageType"] = "guide";
		$data['message'] = 'View';
		$data['trainers'] = $this -> m_trainers -> viewSpecificRecord('lastName', 'Mbugua');
		$data['viewName'] = "View Trainers";
		$this -> load -> view('view', $data);

	}

	public function retrieve($id) {
		$this -> load -> model('m_trainers');
		$this -> m_trainers -> viewSpecificRecord($id);
		$trainee = $this -> m_trainees -> trainees;

		foreach ($trainee as $key => $value) {
			$data['trainerID'] = $value['traineeID'];
			$data['firstName'] = $value['firstName'];
			$data['lastName'] = $value['lastName'];
			$data['age'] = $value['age'];
			$data['phoneNumber'] = $value['phoneNumber'];
			$data['residence'] = $value['residence'];
			$data['username'] = $this -> m_trainees -> username;
			$data['password'] = $this -> m_trainees -> password;
		}

		$data['trainers'] = $this -> m_trainers -> viewRecords();
		$data['viewName'] = "Edit Trainers";
		$this -> load -> view('template', $data);

	}

	public function edit($id) {
		$this -> load -> model('m_trainers');
		$this -> m_trainers -> editRecord($id);
		$data['viewName'] = "Trainers";
		$data['trainers'] = $this -> m_trainers -> viewRecords();
		$this -> load -> view('template', $data);

	}

	public function delete($id) {
		$this -> load -> model('m_trainers');
		$this -> m_trainers -> deleteRecord($id);
		$data['viewName'] = "Trainers";
		$data['trainers'] = $this -> m_trainers -> viewRecords();
		$this -> load -> view('template', $data);

	}

}
