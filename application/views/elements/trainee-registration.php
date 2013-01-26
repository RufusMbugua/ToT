<form name="traineeForm" method="post" class="registration-form" action="<?php echo base_url().'c_trainees/add'?>">

		<section class="fields">
			<input type="text" name="firstName" placeholder="First Name" required>
			<input type="text" name="lastName" placeholder="Other Names" required>
			<input type="text" name="age" placeholder="Age" required>
			<input type="text" name="phoneNumber" placeholder="Telephone Number" required>
			<input type="text" name="residence" placeholder="Residence" required>		
		</section>
	
	
	<input type="submit" value="Submit">

</form>