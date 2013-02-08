<form class="registration-form" method="post" action="<?php echo base_url().'c_project/edit/'.$projectID?>">
<input type="text" name="projectName" placeholder="Project Name" value="<?php echo $projectName;?>"/>
<input type="text" name="projectType" placeholder="Project Type" value="<?php echo $projectType;?>"/>
<input type="text" name="projectLocation" placeholder="Project Location" value="<?php echo $projectLocation;?>"/>
<input type="submit" value="register" />
</form>