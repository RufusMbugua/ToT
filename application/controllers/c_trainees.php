<?php
class C_Trainees extends CI_Controller {

	public function add() {
		$this -> load -> model('m_trainees');
		$this -> m_trainees -> addRecord();

		if ($this -> m_trainees -> response = 'ok') {
			//notify user of success
			$data['form_id'] = "";
			$data["messageType"] = "success";
			$data['message'] = '<p><b>' . $this -> m_trainees -> rowsInserted . '</b> record(s) submitted successfully';
			//redirect(base_url() . 'front/vehicles/index', 'location');
			$data['viewName'] = "Trainees";
			$this -> load -> model('m_trainees');

			$data['trainees'] = $this -> m_trainees -> viewRecords();

			$this -> load -> view('template', $data);

		} else {
			//notify user of error/failure
			echo('fail');
		}
	}

	public function view() {
		$this -> load -> model('m_trainees');
		$data['trainees'] = $this -> m_trainees -> viewRecords();
		$data['viewName'] = "View Trainers";
		$this -> load -> view('view', $data);

	}

	public function register() {
		$data["messageType"] = "guide";
		$data['message'] = 'Trainees';
		$data['viewName'] = "Trainees";
		$this -> load -> model('m_trainees');

		$data['trainees'] = $this -> m_trainees -> viewRecords();

		$this -> load -> view('template', $data);
	}

	public function retrieve($id) {
		$this -> load -> model('m_trainees');
		$this -> m_trainees -> viewSpecificRecord($id);
		$trainee = $this -> m_trainees -> trainees;

		foreach ($trainee as $key => $value) {
			$data['traineeNo'] = $value['traineeNo'];
			$data['firstName'] = $value['firstName'];
			$data['lastName'] = $value['lastName'];
			$data['age'] = $value['age'];
			$data['phoneNumber'] = $value['phoneNumber'];
			$data['residence'] = $value['residence'];
			$data['username'] = $this -> m_trainees -> username;
			$data['password'] = $this -> m_trainees -> password;
		}
		$data["messageType"] = "guide";
		$data['message'] = 'Trainees';
		$data['trainees'] = $this -> m_trainees -> viewRecords();
		$data['viewName'] = "Edit Trainees";
		$this -> load -> view('template', $data);

	}

	public function edit($id) {
		$this -> load -> model('m_trainees');
		$this -> m_trainees -> editRecord($id);
		$data['viewName'] = "Trainees";
		$data["messageType"] = "guide";
		$data['message'] = 'Trainees';
		$data['trainees'] = $this -> m_trainees -> viewRecords();
		$this -> load -> view('template', $data);

	}

	public function delete($id) {
		$this -> load -> model('m_trainees');
		$this -> m_trainees -> deleteRecord($id);
		$data['viewName'] = "Trainees";
		$data["messageType"] = "guide";
		$data['message'] = 'Trainees';
		$data['trainees'] = $this -> m_trainees -> viewRecords();
		$this -> load -> view('template', $data);

	}

}
