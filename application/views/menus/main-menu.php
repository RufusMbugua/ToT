<?php
$userType = $this -> session -> userdata('userType');
if($userType==1){
?>

<nav>
	<ul>
		<li>
			<?php echo anchor(base_url() . 'C_front/index', 'Home'); ?>
		</li>
		<li>
			<?php echo anchor(base_url() . 'C_Project/register', 'Projects'); ?>
		</li>
		<li>
			<?php echo anchor(base_url() . 'C_Contribution/register', 'Contribution'); ?>
		</li>
		<li>
			<?php echo anchor(base_url() . 'C_Donors/register', 'Donors'); ?>
		</li>
		<li>
			<?php echo anchor(base_url() . 'C_front/logout', 'Logout'); ?>
		</li>
		
		
	</ul>
</nav>

<?php
}
if($userType==2){
?>
<nav>
	<ul>
		<li>
			<?php echo anchor(base_url() . 'C_front/index', 'Home'); ?>
		</li>
		<li>
			<?php echo anchor(base_url() . 'C_Project/register', 'Projects'); ?>
		</li>
		<li>
			<?php echo anchor(base_url() . 'C_Donors/register', 'Donors'); ?>
		</li>
		<li>
			<?php echo anchor(base_url() . 'C_Trainers/register', 'Trainers'); ?>
		</li>
		<li>
			<?php echo anchor(base_url() . 'C_Trainees/register', 'Trainees'); ?>
		</li>
		<li>
			<?php echo anchor(base_url() . 'C_front/logout', 'Logout'); ?>
		</li>
	</ul>
</nav>
<?php
}
if($userType==3){
?>

	<nav>
	<ul>
		<li>
			<?php echo anchor(base_url() . 'C_front/index', 'Home'); ?>
		</li>
		<li>
			<?php echo anchor(base_url() . 'C_Trainees/register', 'Trainees'); ?>
		</li>
		<li>
			<?php echo anchor(base_url() . 'C_front/logout', 'Logout'); ?>
		</li>
	</ul>
</nav>

<?php
}
if($userType==4){
?>
<nav>
	<ul>
		<li>
			<?php echo anchor(base_url() . 'C_front/index', 'Home'); ?>
		</li>
		<li>
			<?php echo anchor(base_url() . 'C_Project/register', 'Projects'); ?>
		</li>
		<li>
			<?php echo anchor(base_url() . 'C_Donors/register', 'Donors'); ?>
		</li>
		<li>
			<?php echo anchor(base_url() . 'C_Trainers/register', 'Trainers'); ?>
		</li>
		<li>
			<?php echo anchor(base_url() . 'C_Trainees/register', 'Trainees'); ?>
		</li>
		<li>
			<?php echo anchor(base_url() . 'C_front/trainees', 'Finances'); ?>
		</li>
		<li>
			<?php echo anchor(base_url() . 'C_front/logout', 'Logout'); ?>
		</li>
	</ul>
</nav>
<?php
}
if($userType==''){
?>
<nav>
	<ul>
		<li>
			<?php echo anchor(base_url() . 'C_front/index', 'Home'); ?>
		</li>
		<li>
			<?php echo anchor(base_url() . 'C_front/aboutus', 'About Us'); ?>
		</li>
		<li>
			<?php echo anchor(base_url() . 'C_front/contactus', 'Contact Us'); ?>
		</li>
		<li>
			<?php echo anchor(base_url() . 'C_front/login', 'Login'); ?>
		</li>
	</ul>
</nav>
<?php
}
?>
