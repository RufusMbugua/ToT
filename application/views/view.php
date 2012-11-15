<?php $this ->load ->view('segments/header'); ?>

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
if ($viewName == 'View Trainers') {
	foreach ($trainers as $key => $value) {

		echo '
	<tr class="tr-row">
		<td>
			'.$value['firstName'].'
		</td>
		<td>
			'.$value['lastName'].'
		</td>
		<td>
			'.$value['nameOfschool'].'
		</td>
		<td>
			'.$value['residence'].'
		</td>
		<td>
			'.$value['nameOfcourse'].'
		</td>
		<td>
			'.$value['email'].'
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
<?php $this ->load ->view('segments/footer'); ?>




