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
			$data['trainees'] = $this -> m_trainees -> viewRecords();
			$data['viewName'] = "View Trainers";
			$this -> load -> view('view', $data);

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

	public function edit() {
		$this -> load -> model('m_trainees');
		$this -> m_trainees -> deactivateRecord();
		echo 'done';

	}

}