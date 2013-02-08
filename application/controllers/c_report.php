<?php
class C_Report extends MY_Controller {

	var $stylesheet = '

.table-header{
	border-bottom:2px solid purple;
}


';
	public function index() {
	}

	public function view() {
		$this -> load -> view('report');
	}

	public function project() {
		$this -> load -> model('m_project');
		$project = $this -> m_project -> viewRecords();

		$html = '';
		$html .= '
<table class="table">
<thead>
	<tr class="tr-row">
		<td>
			Project Name
		</td>
		<td>
			Project Type
		</td>
		<td>
			Project Location
		</td>
		<td>
			Total Input
		</td>
		<td>
			Total Profit
		</td>
		<td>
		    <a href="#">Edit</a><a href="#">Delete</a>
		</td>
	</tr>
	</thead>';
		foreach ($project as $key => $value) {

			$html .= '
		<tbody>
	<tr class="tr-row">
		<td>
			' . $value['projectName'] . '
		</td>
		<td>
			' . $value['projectType'] . '
		</td>
		<td>
			' . $value['projectLocation'] . '
		</td>
		<td>
			' . $value['totalInput'] . '
		</td>
		<td>
			' . $value['totalProfit'] . '
		</td>
	
	</tr>
	</tbody>
		
		';

		}
		$html .= "</table>";

		$this -> load -> library('mpdf');
		$this -> mpdf = new mPDF('', 'A4-L', 0, '', 15, 15, 16, 16, 9, 9, '');
		$this -> mpdf -> SetTitle('Project List');
		$this -> mpdf -> SetHTMLHeader('<em>Project List</em>');
		$this -> mpdf -> SetHTMLFooter('<em>Kianda Foundation</em>');
		$this -> mpdf -> simpleTables = true;
		$this -> mpdf -> WriteHTML($this -> stylesheet, 1);
		$this -> mpdf -> WriteHTML($html, 2);
		$report_name = 'Project List' . ".pdf";
		$this -> mpdf -> Output($report_name, 'D');

	}

	public function contribution() {
		$this -> load -> model('m_contribution');
		$contribution = $this -> m_contribution -> viewRecords();

		$html = '';
		$html .= '
<table class="table">
<thead>
	<tr class="tr-row">
		<td>
			FinanceID
		</td>
		<td>
			Donor Number
		</td>
		<td>
			Amount
		</td>
		<td>
			Contribution Date
		</td>
		
	</tr>
	</thead>';
		foreach ($contribution as $key => $value) {

			$html .= '
		<tbody>
	<tr class="tr-row">
		<td>
			' . $value['contributionID'] . '
		</td>
		<td>
			' . $value['donorNumber'] . '
		</td>
		<td>
			' . $value['amount'] . '
		</td>
		<td>
			' . $value['contributionDate'] . '
		</td>
		
	
	</tr>
	</tbody>
		
		';

		}
		$html .= "</table>";

		$this -> load -> library('mpdf');
		$this -> mpdf = new mPDF('', 'A4-L', 0, '', 15, 15, 16, 16, 9, 9, '');
		$this -> mpdf -> SetTitle('Contribution List');
		$this -> mpdf -> SetHTMLHeader('<em>Contribution List</em>');
		$this -> mpdf -> SetHTMLFooter('<em>Kianda Foundation</em>');
		$this -> mpdf -> simpleTables = true;
		$this -> mpdf -> WriteHTML($this -> stylesheet, 1);
		$this -> mpdf -> WriteHTML($html, 2);
		$report_name = 'Contribution List' . ".pdf";
		$this -> mpdf -> Output($report_name, 'D');

	}

	public function donors() {
		$this -> load -> model('m_donors');
		$donors = $this -> m_donors -> viewRecords();

		$html = '';
		$html .= '
<table class="table">
<thead>
	<tr class="tr-row">
		<td>
			First Name
		</td>
		<td>
			Last Name
		</td>
		<td>
			Email Address
		</td>
		<td>
			Phone Number
		</td>
		<td>
			Address
		</td>
		<td>
			Amount Donated
		</td>
		
	</tr>
	</thead>';
		foreach ($donors as $key => $value) {

			$html .= '
		<tbody>
	<tr class="tr-row">
		<td>
			' . $value['firstName'] . '
		</td>
		<td>
			' . $value['lastName'] . '
		</td>
		<td>
			' . $value['emailAddress'] . '
		</td>
		<td>
			' . $value['phoneNumber'] . '
		</td>
		<td>
			' . $value['address'] . '
		</td>
		<td>
			' . $value['amountDonated'] . '
		</td>
		
	</tr>
	</tbody>
		
		';

		}
		$html .= "</table>";

		$this -> load -> library('mpdf');
		$this -> mpdf = new mPDF('', 'A4-L', 0, '', 15, 15, 16, 16, 9, 9, '');
		$this -> mpdf -> SetTitle('Donor List');
		$this -> mpdf -> SetHTMLHeader('<em>Donor List</em>');
		$this -> mpdf -> SetHTMLFooter('<em>Kianda Foundation</em>');
		$this -> mpdf -> simpleTables = true;
		$this -> mpdf -> WriteHTML($this -> stylesheet, 1);
		$this -> mpdf -> WriteHTML($html, 2);
		$report_name = 'Donor List' . ".pdf";
		$this -> mpdf -> Output($report_name, 'D');

	}

	public function groups() {
		$this -> load -> model('m_groups');
		$groups = $this -> m_groups -> viewRecords();

		$html = '';
		$html .= '
<table class="table">
<thead>
	<tr class="tr-row">
		<td>
			Group Number
		</td>
		<td>
			Start Time
		</td>
		<td>
			End Time
		</td>
		<td>
			Money Allocated
		</td>
		<td>
			Trainer ID
		</td>
		
	</tr>
	</thead>';
		foreach ($groups as $key => $value) {

			$html .= '
		<tbody>
	<tr class="tr-row">
		<td>
			' . $value['groupNumber'] . '
		</td>
		<td>
			' . $value['startTime'] . '
		</td>
		<td>
			' . $value['endTime'] . '
		</td>
		<td>
			' . $value['moneyAllocated'] . '
		</td>
		<td>
			' . $value['trainerID'] . '
		</td>
		
	
	</tr>
	</tbody>
		
		';

		}
		$html .= "</table>";

		$this -> load -> library('mpdf');
		$this -> mpdf = new mPDF('', 'A4-L', 0, '', 15, 15, 16, 16, 9, 9, '');
		$this -> mpdf -> SetTitle('Group List');
		$this -> mpdf -> SetHTMLHeader('<em>Group List</em>');
		$this -> mpdf -> SetHTMLFooter('<em>Kianda Foundation</em>');
		$this -> mpdf -> simpleTables = true;
		$this -> mpdf -> WriteHTML($this -> stylesheet, 1);
		$this -> mpdf -> WriteHTML($html, 2);
		$report_name = 'Group List' . ".pdf";
		$this -> mpdf -> Output($report_name, 'D');

	}

	public function trainees() {
		$this -> load -> model('m_trainees');
		$trainees = $this -> m_trainees -> viewRecords();

		$html = '';
		$html .= '
<table class="table">
<thead>
	<tr class="tr-row">
		<td>
			First Name
		</td>
		<td>
			Last Name
		</td>
		<td>
			Age
		</td>
		<td>
			Phone Number
		</td>
		<td>
			Residence
		</td>
		
	</tr>
	</thead>';
		foreach ($trainees as $key => $value) {

			$html .= '
		<tbody>
	<tr class="tr-row">
		<td>
			' . $value['firstName'] . '
		</td>
		<td>
			' . $value['lastName'] . '
		</td>
		<td>
			' . $value['age'] . '
		</td>
		<td>
			' . $value['phoneNumber'] . '
		</td>
		<td>
			' . $value['residence'] . '
		</td>
		
	
	</tr>
	</tbody>
		
		';

		}
		$html .= "</table>";

		$this -> load -> library('mpdf');
		$this -> mpdf = new mPDF('', 'A4-L', 0, '', 15, 15, 16, 16, 9, 9, '');
		$this -> mpdf -> SetTitle('Trainee List');
		$this -> mpdf -> SetHTMLHeader('<em>Trainee List</em>');
		$this -> mpdf -> SetHTMLFooter('<em>Kianda Foundation</em>');
		$this -> mpdf -> simpleTables = true;
		$this -> mpdf -> WriteHTML($this -> stylesheet, 1);
		$this -> mpdf -> WriteHTML($html, 2);
		$report_name = 'Trainee List' . ".pdf";
		$this -> mpdf -> Output($report_name, 'D');

	}

	public function trainers() {
		$this -> load -> model('m_trainers');
		$trainers = $this -> m_trainers -> viewRecords();

		$html = '';
		$html .= '
<table class="table">
<thead>
	<tr class="tr-row">
		<td>
			First Name
		</td>
		<td>
			Last Name
		</td>
		<td>
			Name Of School
		</td>
		<td>
			Residence
		</td>
		<td>
			Name Of Course
		</td>
		<td>
			Email
		</td>
		<td>
		    Operations
		</td>
		
	</tr>
	</thead>';
		foreach ($trainers as $key => $value) {

			$html .= '
		<tbody>
	<tr class="tr-row">
		<td>
			' . $value['firstName'] . '
		</td>
		<td>
			' . $value['lastName'] . '
		</td>
		<td>
			' . $value['nameOfschool'] . '
		</td>
		<td>
			' . $value['residence'] . '
		</td>
		<td>
			' . $value['nameOfcourse'] . '
		</td>
		<td>
			' . $value['email'] . '
		</td>
		
	
	</tr>
	</tbody>
		
		';

		}
		$html .= "</table>";

		$this -> load -> library('mpdf');
		$this -> mpdf = new mPDF('', 'A4-L', 0, '', 15, 15, 16, 16, 9, 9, '');
		$this -> mpdf -> SetTitle('Trainer List');
		$this -> mpdf -> SetHTMLHeader('<em>Trainer List</em>');
		$this -> mpdf -> SetHTMLFooter('<em>Kianda Foundation</em>');
		$this -> mpdf -> simpleTables = true;
		$this -> mpdf -> WriteHTML($this -> stylesheet, 1);
		$this -> mpdf -> WriteHTML($html, 2);
		$report_name = 'Trainer List' . ".pdf";
		$this -> mpdf -> Output($report_name, 'D');

	}

}
