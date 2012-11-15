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
			$data['trainers'] = $this -> m_trainers -> viewRecords();
			$data['viewName'] = "View Trainers";
			$this -> load -> view('view', $data);

		} else {
			//notify user of error/failure
			echo('fail');
		}
	}

	public function view() {
		$this -> load -> model('m_trainers');
		$data['trainers'] = $this -> m_trainers -> viewRecords();
		$data['viewName'] = "View Trainers";
		$this -> load -> view('view', $data);

	}

	public function edit() {
		$this -> load -> model('m_trainers');
		$this -> m_trainers -> deactivateRecord();
		echo 'done';

	}

}
