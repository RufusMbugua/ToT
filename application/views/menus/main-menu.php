<?php
$userType = $this -> session -> userdata('userType');
if($userType==1){
?>

<nav>
	<ul>
		<li>
			<?php echo anchor(base_url() . 'C_front/home', 'Home'); ?>
		</li>
		<li>
			<?php echo anchor(base_url() . 'C_Project/register', 'Projects'); ?>
		</li>
		<li>
			<?php echo anchor(base_url() . 'C_Donors/register', 'Profile'); ?>
		</li>
	</ul>
</nav>

<?php
}
if($userType==2){
?>
<nav>
	<ul>
	
	</ul>
</nav>
<?php
}
if($userType==3){
?>
<nav>
	<ul>

	</ul>
</nav>
<?php
}
if($userType==4){
?>
<nav>
	<ul>
		<li>
			<?php echo anchor(base_url() . 'C_front/home', 'Home'); ?>
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
	</ul>
</nav>
<?php
}
?>
