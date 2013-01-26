<?php $this -> load -> view('segments/header'); ?>

<header>
	<section class="banner">
		<section class="user">
			<section class="details">
				Signed in as:
				Account Settings Log Out
			</section>
		</section>
	</section>
	<?php $this -> load -> view('menus/main-menu'); ?>

</header>
<section class='content'>
	<?php $this -> load -> view('elements/message'); ?>
	<h3><?php echo $viewName; ?></h3>
	<?php echo anchor(base_url() . 'C_front/trainers', 'Add Trainer'); ?>
<?php

if ($viewName == 'View Trainers') {
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
		    <a href="#">Edit</a><a href="#">Delete</a>
		</td>
	</tr>
		
		';

	}

}
if ($viewName == 'View Groups') {
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
		    <a href="#">Edit</a><a href="#">Delete</a>
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
		    <a href="#">Edit</a><a href="#">Delete</a>
		</td>
	</tr>
		
		';
	}

}

if ($viewName == 'View Project') {
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
		    <a href="#">Edit</a><a href="#">Delete</a>
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
		    <a href="#">Edit</a><a href="#">Delete</a>
		</td>
	</tr>
		
		';
	}

}
if ($viewName == 'View Donors') {
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
			Amount Donated
		</td>
		<td>
		    <a href="#">Edit</a><a href="#">Delete</a>
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
			' . $value['amountDonated'] . '
		</td>
		<td>
		    <a href="#">Edit</a><a href="#">Delete</a>
		</td>
	</tr>
		
		';
	}

}

echo '</table>';
?>


</section>
<?php $this -> load -> view('segments/footer'); ?>




