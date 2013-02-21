<form class="registration-form" method="post" action="<?php echo base_url() . 'c_contribution/edit/' . $contributionID; ?>">
	<input type="text" name="contribution" placeholder="Contribution" value="<?php echo $amount; ?>"/>
	<input type="text" name ="proectName" value="<?php echo $projectName; ?>"/>
	<select name="projectList">
		<?php 
		foreach($projectList as $key => $value){
			echo '<option>'.$value['projectName'].'</option>';
		}
		?>
	</select>

	<input type="submit" value="register" />
</form>