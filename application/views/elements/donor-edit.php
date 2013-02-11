<form class="registration-form" method="post" action="<?php echo base_url().'c_donors/edit/'.$donorNumber?>">
	<input type="text" name="firstName" placeholder="First Name" value="<?php echo $firstName;?>"/>
	<input type="text" name="lastName" placeholder="Last Name" value="<?php echo $lastName?>"/>
	<input type="text" name="emailAddress" placeholder="Email Address" value="<?php echo $emailAddress ?>"/>
	<input type="text" name="phoneNumber" placeholder="Phone Number" value="<?php echo $phoneNumber;?>"/>
	<input type="text" name="address" placeholder="Address" value="<?php echo $address;?>"/>
	<input type="text" name="username" placeholder="Username" value="<?php echo $username;?>"/>
	<input type="text" name="password" placeholder="Password" value="<?php echo $password;?>"/>
	<input type="submit" value="register" />
</form>