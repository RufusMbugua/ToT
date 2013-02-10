<?php
class C_Groups extends CI_Controller {

	public function add() {
		$this -> load -> model('m_groups');
		$this -> m_groups -> addRecord();

		if ($this -> m_groups -> response = 'ok') {
			//notify user of success
			$data['form_id'] = "";
			$data["messageType"] = "success";
			$data['message'] = '<p><b>' . $this -> m_groups -> rowsInserted . '</b> record(s) submitted successfully';
			//redirect(base_url() . 'front/vehicles/index', 'location');
			$data['groups'] = $this -> m_groups -> viewRecords();
			$data['viewName'] = "View Groups";
			$this -> load -> view('view', $data);

		} else {
			//notify user of error/failure
			echo('fail');
		}
	}

	public function view() {
		$this -> load -> model('m_groups');
		$data["messageType"] = "guide";
			$data['message'] = 'View';
		$data['groups'] = $this -> m_groups -> viewRecords();
		$data['viewName'] = "View Groups";
		$this -> load -> view('view', $data);

	}
	
	public function viewSpecific() {
		$this -> load -> model('m_groups');
		$data["messageType"] = "guide";
			$data['message'] = 'View';
		$data['groups'] = $this -> m_groups -> viewSpecificRecord('lastName','Mbugua');
		$data['viewName'] = "View Groups";
		$this -> load -> view('view', $data);

	}

	public function retrieve($id) {
		$this -> load -> model('m_groups');
		$this -> m_groups -> viewSpecificRecord($id);
		$cake = $this -> m_groups -> groups;

		foreach ($cake as $key => $value) {
			$data['cakeID'] = $value['Groups_ID'];
			$data['cakeName'] = $value['Groups_Name'];
		}

		$data['groups'] = $this -> m_groups -> viewRecords();
		$data['viewName'] = "Edit Groups";
		$this -> load -> view('template', $data);

	}

	public function edit($id) {
		$this -> load -> model('m_groups');
		$this -> m_groups -> editRecord($id);
		$data['viewName'] = "Groups";
		$data['groups'] = $this -> m_groups -> viewRecords();
		$this -> load -> view('template', $data);

	}

	public function delete($id) {
		$this -> load -> model('m_groups');
		$this -> m_groups -> deleteRecord($id);
		$data['viewName'] = "Groups";
		$data['groups'] = $this -> m_groups -> viewRecords();
		$this -> load -> view('template', $data);

	}

}
