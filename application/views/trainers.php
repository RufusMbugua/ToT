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

	<?php $this -> load -> view('elements/trainer-form'); ?>

</section>
<?php $this ->load ->view('segments/footer'); ?>