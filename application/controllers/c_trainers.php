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
			$this -> load -> view('trainers', $data);

		} else {
			//notify user of error/failure
			echo('fail');
		}
	}

	public function edit() {
		$this -> load -> model('m_trainers');
		$this -> m_trainers -> viewRecords();

		foreach ($this -> m_trainers -> trainers as $key => $value) {
			$one = $value['firstName'];
		}

	}

}
