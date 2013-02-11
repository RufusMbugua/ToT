<form class="registration-form" method="post" action="<?php echo base_url()?>C_Users/add">
	<select name="type">
		<option>Donor</option>
		<option>Trainer</option>
		<option>Trainee</option>
	</select>
	<input type="text" name="firstName" placeholder="First Name"/>
	<input type="text" name="lastName" placeholder="Last Name"/>
	<input type="text" name="emailAddress" placeholder="Email Address"/>
	<input type="text" name="phoneNumber" placeholder="Phone Number"/>
	<input type="text" name="address" placeholder="Address"/>
	<input type="submit" value="register" />
</form>