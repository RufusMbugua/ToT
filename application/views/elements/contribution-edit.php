<form class="registration-form" method="post" action="<?php echo base_url().'c_contribution/edit/'.$contributionID;?>">
	<input type="text" name="contribution" placeholder="Contribution" value="<?php echo $amount; ?>"/>
	<select name="project">
		<option><?php echo $project; ?></option>
	</select>
	<input type="submit" value="register" />
</form>