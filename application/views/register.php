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

if($viewName=="Donor Registration"){
	$this->load->view('elements/donor-registration');
}
?>


</section>
<?php $this -> load -> view('segments/footer'); ?>




