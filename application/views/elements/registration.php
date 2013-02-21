<form class="registration-form" method="post" action="<?php echo base_url()?>C_Users/add">
	<select name="type">
		<option>Donor</option>
		<option>Trainer</option>
		<option>Trainee</option>
	</select>
	<input type="text" name="firstName" placeholder="First Name" required/>
	<input type="text" name="lastName" placeholder="Last Name" required/>
	<input type="text" name="emailAddress" placeholder="Email Address" required/>
	<input type="text" name="phoneNumber" placeholder="Phone Number" required/>
	<input type="text" name="address" placeholder="Address" required/>
	<input type="submit" value="register" />
</form>