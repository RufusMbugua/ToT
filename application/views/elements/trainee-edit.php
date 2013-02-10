<form name="traineeForm" method="post" class="registration-form" action="<?php echo base_url().'c_trainees/edit/'.$traineeNo?>">

		<section class="fields">
			<input type="text" name="firstName" placeholder="First Name" value="<?php echo $firstName;?>" required>
			<input type="text" name="lastName" placeholder="Other Names"  value="<?php echo $lastName;?>" required>
			<input type="text" name="age" placeholder="Age" value="<?php echo $age; ?>"  required>
			<input type="text" name="phoneNumber" placeholder="Telephone Number" value="<?php echo $phoneNumber; ?>" required>
			<input type="text" name="residence" placeholder="Residence" value="<?php echo $residence; ?>"  required>		
		</section>
	
	
	<input type="submit" value="Submit">

</form>