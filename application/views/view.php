<?php

if ($viewName == 'Trainers') {
	echo '
<table>
	<tr class="tr-title">
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
';
	foreach ($trainers as $key => $value) {

		echo '
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
		<td>
		   <a href="'.base_url().'C_Trainers/retrieve/'.$value['trainerID'].'">Edit</a><a href="'.base_url().'C_Trainers/delete/'.$value['trainerID'].'">Delete</a>
		</td>
	</tr>
		
		';

	}

}

if ($viewName == 'Trainees') {
	echo '
	<table>
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
		<td>
		    Operations
		</td>
	</tr>
		
		';

	foreach ($trainees as $key => $value) {
		echo '
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
		<td>
		    <a href="'.base_url().'C_Trainees/retrieve/'.$value['traineeNo'].'">Edit</a><a href="'.base_url().'C_Trainees/delete/'.$value['traineeNo'].'">Delete</a>
		</td>
	</tr>
		
		';
	}

}


if ($viewName == 'Groups') {
	echo '
	<table>
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
		<td>
		    Operations
		</td>
	</tr>
		
		';

	foreach ($groups as $key => $value) {
		echo '
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
		<td>
		    <a href="'.base_url().'C_Groups/retrieve/'.$value['groupID'].'">Edit</a><a href="'.base_url().'C_Groups/delete/'.$value['groupID'].'">Delete</a>
		</td>
	</tr>
		
		';
	}

}

if ($viewName == 'Project') {
	echo '
	<table>
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
		    Operations
		</td>
	</tr>
		
		';

	foreach ($project as $key => $value) {
		echo '
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
		<td>
		    <a href="'.base_url().'C_Project/retrieve/'.$value['projectID'].'">Edit</a><a href="'.base_url().'C_Project/delete/'.$value['projectID'].'">Delete</a>
		</td>
	</tr>
		
		';
	}

}
if ($viewName == 'Donors') {
	echo '
	<table>
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
		    Operations
		</td>
	</tr>
		
		';

	foreach ($donors as $key => $value) {
		echo '
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
		   <a href="'.base_url().'C_Donors/retrieve/'.$value['donorNumber'].'">Edit</a><a href="'.base_url().'C_Donors/delete/'.$value['donorNumber'].'">Delete</a>
		</td>
	</tr>
		
		';
	}

}

if ($viewName == 'Contribution') {
	echo '
	<table>
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
		<td>
		    Operations
		</td>
	</tr>
		
		';

	foreach ($contribution as $key => $value) {
		echo '
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
		<td>
		    <a href="'.base_url().'C_Contribution/retrieve/'.$value['contributionID'].'">Edit</a><a href="'.base_url().'C_Contribution/delete/'.$value['contributionID'].'">Delete</a>
		</td>
	</tr>
		
		';
	}

}

echo '</table>';
?>
