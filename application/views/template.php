<?php 
$sessionEmail = $this -> session -> userdata('name');
$this -> load -> view('segments/header'); ?>

<header>
	<section class="logo">
		<img src="<?php echo base_url(); ?>images/ToT_logo.png" />
	</section>
	<section class="banner">
		<section class="user">
			<section class="details">
				Signed in as: <?php echo $sessionEmail ?>
			</section>
		</section>
	</section>
	<?php $this -> load -> view('menus/main-menu'); ?>

</header>
<section class='content'>
	<?php $this -> load -> view('elements/message'); ?>
	<h3><?php echo $viewName; ?></h3>

<?php

if ($viewName == "Donors") {
	$this -> load -> view('elements/donor-registration');
}
if ($viewName == "Project") {
	$this -> load -> view('elements/project-registration');
}
if ($viewName == "Trainers") {
	$this -> load -> view('elements/trainer-registration');
}
if ($viewName == "Trainees") {
	$this -> load -> view('elements/trainee-registration');
}
if ($viewName == "Contribution") {
	$this -> load -> view('elements/contribution-registration');
}

if ($viewName == "Edit Donors") {
	$this -> load -> view('elements/donor-edit');
}
if ($viewName == "Edit Project") {
	$this -> load -> view('elements/project-edit');
}
if ($viewName == "Edit Trainers") {
	$this -> load -> view('elements/trainer-edit');
}
if ($viewName == "Edit Trainees") {
	$this -> load -> view('elements/trainee-edit');
}
if ($viewName == "Edit Contribution") {
	$this -> load -> view('elements/contribution-edit');
}
$this -> load -> view('view');
?>
	

</section>
<?php $this -> load -> view('segments/footer'); ?>




