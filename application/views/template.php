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
$this -> load -> view('view');
?>
	

</section>
<?php $this -> load -> view('segments/footer'); ?>




